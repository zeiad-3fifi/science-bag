<?php
session_start();
include('db_connect.php');
include('header.php');

// 1. حماية الصفحة
$admin_email = "admin@admin.com"; 
if (!isset($_SESSION['user_id']) || $_SESSION['user_email'] !== $admin_email) {
    die("<h1 style='text-align:center; color:red; margin-top:50px; font-family:Tajawal;'>عذراً! الدخول للمسؤولين فقط. ⛔</h1>");
}

$message = "";

// 2. معالجة التعديل والحذف
if (isset($_POST['update_score_btn'])) {
    $s_id = intval($_POST['score_id']);
    $new_score = intval($_POST['new_score']);
    mysqli_query($conn, "UPDATE user_scores SET score = '$new_score' WHERE id = '$s_id'");
    $message = "تم تحديث الدرجة بنجاح! ✅";
}

if (isset($_GET['delete_score'])) {
    $s_id = intval($_GET['delete_score']);
    mysqli_query($conn, "DELETE FROM user_scores WHERE id = '$s_id'");
    $message = "تم حذف النتيجة بنجاح! 🗑️";
}

// 3. جلب الإحصائيات (Dashboard Logic)
$stat_total_students = mysqli_num_rows(mysqli_query($conn, "SELECT DISTINCT user_id FROM user_scores"));
$stat_avg_query = mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(score) as avg_score FROM user_scores"));
$stat_avg = round($stat_avg_query['avg_score'], 1);
$stat_max_query = mysqli_fetch_assoc(mysqli_query($conn, "SELECT MAX(score) as max_score FROM user_scores"));
$stat_max = $stat_max_query['max_score'] ?? 0;

// 4. الفلترة وجلب البيانات
$filter_quiz = isset($_GET['quiz_id']) ? intval($_GET['quiz_id']) : 0;
$where_sql = ($filter_quiz > 0) ? "WHERE user_scores.quiz_id = $filter_quiz" : "";

$query = "SELECT user_scores.*, users.username FROM user_scores 
          JOIN users ON user_scores.user_id = users.id 
          $where_sql
          ORDER BY user_scores.created_at DESC";
$all_scores = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم الذكية | Admin</title>
    <style>
        body { background: #f0f4f8; font-family: 'Tajawal', sans-serif; margin: 0; padding: 20px; }
        .admin-container { max-width: 1100px; margin: 0 auto; }
        
        /* 1. تصميم كروت الإحصائيات */
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .stat-card { background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 20px; border-bottom: 5px solid #ddd; }
        .stat-card .icon { font-size: 2.5rem; background: #f8f9fa; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; border-radius: 50%; }
        .stat-card .info h3 { margin: 0; font-size: 0.9rem; color: #7f8c8d; }
        .stat-card .info p { margin: 5px 0 0; font-size: 1.8rem; font-weight: bold; color: #2c3e50; }
        
        .blue-card { border-bottom-color: #3498db; }
        .green-card { border-bottom-color: #27ae60; }
        .gold-card { border-bottom-color: #f1c40f; }

        /* شريط الأدوات */
        .tools-bar { display: flex; gap: 15px; background: white; padding: 20px; border-radius: 15px; margin-bottom: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); align-items: center; flex-wrap: wrap; }
        .search-box { flex: 2; min-width: 250px; }
        .search-box input { width: 100%; padding: 12px; border: 2px solid #edf2f7; border-radius: 10px; outline: none; }
        .filter-box { flex: 1; min-width: 200px; }
        .filter-box select { width: 100%; padding: 12px; border: 2px solid #edf2f7; border-radius: 10px; cursor: pointer; }

        /* الجدول */
        .score-card { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { background: #2c3e50; color: white; padding: 18px; text-align: center; }
        td { padding: 15px; text-align: center; border-bottom: 1px solid #f1f5f9; }
        .bad-score { background: #fff5f5; color: #e53e3e; font-weight: bold; padding: 5px 10px; border-radius: 5px; }
        .good-score { background: #f0fff4; color: #38a169; font-weight: bold; padding: 5px 10px; border-radius: 5px; }
        .btn-update { background: #1a73e8; color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; }
        .alert { background: #c6f6d5; color: #22543d; padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center; }
    </style>
</head>
<body>

<div class="admin-container">
    <h1 style="text-align: center; color: #2d3748; margin-bottom: 30px;">🕹️ مركز قيادة "الحقيبة التعليمية"</h1>

    <?php if($message) echo "<div class='alert'>$message</div>"; ?>

    <div class="stats-grid">
        <div class="stat-card blue-card">
            <div class="icon">👥</div>
            <div class="info">
                <h3>إجمالي المختبرين</h3>
                <p><?php echo $stat_total_students; ?></p>
            </div>
        </div>
        <div class="stat-card green-card">
            <div class="icon">📈</div>
            <div class="info">
                <h3>متوسط الدرجات</h3>
                <p><?php echo $stat_avg; ?></p>
            </div>
        </div>
        <div class="stat-card gold-card">
            <div class="icon">🏆</div>
            <div class="info">
                <h3>أعلى سكور</h3>
                <p><?php echo $stat_max; ?></p>
            </div>
        </div>
    </div>

    <div class="tools-bar">
        <div class="search-box">
            <input type="text" id="liveSearch" placeholder="🔍 ابحث عن طالب معين بالاسم..." onkeyup="doSearch()">
        </div>
        <div class="filter-box">
            <form method="GET">
                <select name="quiz_id" onchange="this.form.submit()">
                    <option value="0">📂 جميع الاختبارات</option>
                    <option value="1" <?php if($filter_quiz==1) echo 'selected'; ?>>درس 1: الجهاز التنفسي</option>
                    <option value="2" <?php if($filter_quiz==2) echo 'selected'; ?>>درس 2: الجهاز الدوري</option>
                    <option value="6" <?php if($filter_quiz==6) echo 'selected'; ?>>🏆 الاختبار النهائي</option>
                </select>
            </form>
        </div>
    </div>

    <div class="score-card">
        <table id="scoresTable">
            <thead>
                <tr>
                    <th>الطالب</th>
                    <th>الاختبار</th>
                    <th>الدرجة</th>
                    <th>تعديل</th>
                    <th>إدارة</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($all_scores)): ?>
                <?php $status_class = ($row['score'] < 5) ? 'bad-score' : ($row['score'] >= 9 ? 'good-score' : ''); ?>
                <tr class="student-row">
                    <td><strong><?php echo htmlspecialchars($row['username']); ?></strong></td>
                    <td>كويز #<?php echo $row['quiz_id']; ?></td>
                    <td><span class="<?php echo $status_class; ?>"><?php echo $row['score']; ?></span></td>
                    <td>
                        <form method="POST" style="display: flex; gap: 5px; justify-content: center;">
                            <input type="hidden" name="score_id" value="<?php echo $row['id']; ?>">
                            <input type="number" name="new_score" style="width:50px; text-align:center;" value="<?php echo $row['score']; ?>">
                            <button type="submit" name="update_score_btn" class="btn-update">حفظ</button>
                        </form>
                    </td>
                    <td><a href="?delete_score=<?php echo $row['id']; ?>" onclick="return confirm('حذف نهائي؟')">🗑️</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function doSearch() {
    let input = document.getElementById("liveSearch").value.toLowerCase();
    let rows = document.querySelectorAll(".student-row");
    rows.forEach(row => {
        let name = row.querySelector("td").innerText.toLowerCase();
        row.style.display = name.includes(input) ? "" : "none";
    });
}
</script>

</body>
</html>