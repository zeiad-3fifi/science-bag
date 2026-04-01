<?php
session_start();
include('db_connect.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$error = "";
$success = "";

// 1. جلب بيانات المستخدم الأساسية
$query = "SELECT username, email, password FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// 2. جلب درجات الطالب
$score_query = "SELECT quiz_id, MAX(score) as best_score, MAX(created_at) as last_attempt 
                FROM user_scores 
                WHERE user_id = '$user_id' 
                GROUP BY quiz_id 
                ORDER BY quiz_id ASC";
$score_result = mysqli_query($conn, $score_query);

$lesson_names = [
    1 => "🫁 الجهاز التنفسي",
    2 => "❤️ الجهاز الدوري",
    3 => "🩸 مكونات الدم",
    4 => "🍔 الجهاز الهضمي",
    5 => "🍏 الغذاء الصحي",
    6 => "🏆 الاختبار النهائي"
];

// 3. تنفيذ تغيير الباسورد
if (isset($_POST['submit_change'])) {
    $old_pass = mysqli_real_escape_string($conn, $_POST['old_password']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($old_pass !== $user['password']) {
        $error = "كلمة المرور القديمة غير صحيحة!";
    } elseif ($new_pass !== $confirm_pass) {
        $error = "كلمة المرور الجديدة غير متطابقة!";
    } else {
        $update = "UPDATE users SET password = '$new_pass' WHERE id = '$user_id'";
        if (mysqli_query($conn, $update)) {
            $success = "تم تحديث كلمة المرور بنجاح! ✅";
            $user['password'] = $new_pass;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ملفي الشخصي | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* تنسيقات مخصصة لصفحة البروفايل تدعم الثيمين */
        body { 
            background-color: var(--bg-body); 
            color: var(--text-main); 
            transition: 0.3s;
        }

        .profile-wrapper { 
            max-width: 1000px; 
            margin: 40px auto; 
            display: grid; 
            grid-template-columns: 1fr 1.5fr; 
            gap: 25px; 
            padding: 0 15px;
        }

        /* تصميم الكروت الجديد */
        .profile-card { 
            background-color: var(--bg-card); 
            padding: 30px; 
            border-radius: 20px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid rgba(128, 128, 128, 0.1);
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--accent);
            display: inline-block;
        }

        .input-group { margin-bottom: 15px; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: bold; font-size: 0.9rem; opacity: 0.8; }
        .input-group input { 
            width: 100%; 
            padding: 12px; 
            border-radius: 12px; 
            border: 1px solid rgba(128, 128, 128, 0.2); 
            background: var(--bg-body); 
            color: var(--text-main);
            box-sizing: border-box;
            transition: 0.3s;
        }

        .input-group input:focus { border-color: var(--accent); outline: none; }

        /* سجل الدرجات */
        .score-item { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 15px; 
            background: rgba(128, 128, 128, 0.05);
            border-radius: 15px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .score-item:hover { transform: scale(1.02); background: rgba(128, 128, 128, 0.1); }

        .score-badge { 
            background: var(--accent); 
            color: white; 
            padding: 5px 15px; 
            border-radius: 10px; 
            font-weight: bold; 
        }

        .confirm-btn { 
            background: var(--accent); 
            color: white; 
            border: none; 
            padding: 14px; 
            border-radius: 12px; 
            width: 100%; 
            font-weight: bold; 
            cursor: pointer; 
            margin-top: 15px; 
            box-shadow: 0 4px 15px rgba(17, 186, 240, 0.3);
        }

        .alert { padding: 12px; border-radius: 10px; margin-bottom: 20px; text-align: center; }
        .alert-error { background: #fee2e2; color: #b91c1c; }
        .alert-success { background: #dcfce7; color: #15803d; }

        @media (max-width: 850px) { .profile-wrapper { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="profile-wrapper">
        
        <div class="profile-card">
            <h3 class="card-title">⚙️ إعدادات الحساب</h3>
            <p style="margin-bottom: 20px;">أهلاً، <strong><?php echo htmlspecialchars($user['username']); ?></strong></p>

            <?php if($error) echo "<div class='alert alert-error'>$error</div>"; ?>
            <?php if($success) echo "<div class='alert alert-success'>$success</div>"; ?>

            <form method="POST">
                <div class="input-group">
                    <label>البريد الإلكتروني (لا يمكن تغييره)</label>
                    <input type="text" value="<?php echo $user['email']; ?>" disabled style="opacity: 0.6; cursor: not-allowed;">
                </div>
                <hr style="margin: 25px 0; opacity: 0.1;">
                <div class="input-group">
                    <label>كلمة المرور الحالية</label>
                    <input type="password" name="old_password" placeholder="••••••••" required>
                </div>
                <div class="input-group">
                    <label>كلمة المرور الجديدة</label>
                    <input type="password" name="new_password" placeholder="••••••••" required>
                </div>
                <div class="input-group">
                    <label>تأكيد الكلمة الجديدة</label>
                    <input type="password" name="confirm_password" placeholder="••••••••" required>
                </div>
                <button type="submit" name="submit_change" class="confirm-btn">تحديث البيانات</button>
            </form>
            <a href="logout.php" style="display: block; text-align: center; margin-top: 20px; color: #ff4d4d; text-decoration: none; font-weight: bold;">⚠️ تسجيل الخروج</a>
        </div>

        <div class="profile-card">
            <h3 class="card-title">📊 لوحة إنجازاتك</h3>
            
            <?php if(mysqli_num_rows($score_result) > 0): ?>
                <div style="margin-top: 10px;">
                    <?php while($row = mysqli_fetch_assoc($score_result)): ?>
                        <div class="score-item">
                            <div>
                                <div style="font-weight: bold; font-size: 1.05rem; margin-bottom: 4px;">
                                    <?php echo $lesson_names[$row['quiz_id']] ?? "اختبار #".$row['quiz_id']; ?>
                                </div>
                                <small style="opacity: 0.6;">📅 <?php echo date("Y-m-d", strtotime($row['last_attempt'])); ?></small>
                            </div>
                            <div class="score-badge">
                                <?php echo $row['best_score']; ?> / 10
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div style="text-align: center; padding: 50px 0; opacity: 0.5;">
                    <p style="font-size: 3rem; margin-bottom: 10px;">🚀</p>
                    <p>ابدأ رحلتك التعليمية الآن لتظهر نتائجك هنا!</p>
                    <a href="lessons.php" class="confirm-btn" style="display: inline-block; text-decoration: none; width: auto; padding: 10px 25px;">اذهب للدروس</a>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>