<?php
session_start();
include('db_connect.php');

// جلب أفضل 10 طلاب - تم تعديل users.name إلى username
// لو اسم العمود عندك مختلف (مثلاً full_name) غير كلمة username اللي تحت دي
$query = "SELECT users.username, SUM(user_scores.score) as total_points, COUNT(DISTINCT user_scores.quiz_id) as lessons_done 
          FROM user_scores 
          JOIN users ON user_scores.user_id = users.id 
          GROUP BY users.id 
          ORDER BY total_points DESC, lessons_done DESC 
          LIMIT 10";

$result = mysqli_query($conn, $query);

// لو لسه بيطلع خطأ، جرب تغير username لـ name أو أي اسم عمود عندك في جدول users
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة الشرف | الأبطال</title>
    <link rel="stylesheet" href="style.css">
    <style>
        :root { --gold: #f1c40f; --silver: #bdc3c7; --bronze: #cd7f32; --primary: #2c3e50; }
        body { background-color: #f4f7f6; font-family: 'Tajawal', sans-serif; margin: 0; padding: 20px; }
        .leaderboard-card { max-width: 700px; margin: 0 auto; background: white; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); overflow: hidden; }
        .header { background: var(--primary); color: white; padding: 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 2rem; }
        
        .table-container { padding: 20px; }
        table { width: 100%; border-collapse: collapse; text-align: right; }
        th { padding: 15px; border-bottom: 2px solid #eee; color: #7f8c8d; font-size: 0.9rem; }
        td { padding: 20px 15px; border-bottom: 1px solid #f9f9f9; font-weight: bold; color: #333; }
        
        /* تلوين المراكز الثلاثة الأولى */
        tr:nth-child(1) .rank { color: var(--gold); font-size: 1.5rem; }
        tr:nth-child(2) .rank { color: var(--silver); font-size: 1.3rem; }
        tr:nth-child(3) .rank { color: var(--bronze); font-size: 1.2rem; }
        
        .points-badge { background: #e8f5e9; color: #27ae60; padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; }
        .lessons-count { color: #95a5a6; font-size: 0.8rem; font-weight: normal; }
        
        .btn-back { display: block; width: fit-content; margin: 30px auto; padding: 12px 30px; background: var(--primary); color: white; text-decoration: none; border-radius: 10px; font-weight: bold; transition: 0.3s; }
        .btn-back:hover { background: #34495e; transform: scale(1.05); }
        
        .empty-msg { text-align: center; padding: 40px; color: #999; }
    </style>
</head>
<body>

    <div class="leaderboard-card">
        <div class="header">
            <span>🏆</span>
            <h1>لوحة شرف المبدعين</h1>
            <p>أفضل الطلاب أداءً في الحقيبة التعليمية</p>
        </div>

        <div class="table-container">
            <?php if(mysqli_num_rows($result) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>المركز</th>
                            <th>اسم البطل</th>
                            <th>المهام المكتملة</th>
                            <th>إجمالي النقاط</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $rank = 1;
                        while($row = mysqli_fetch_assoc($result)): 
                        ?>
                            <tr>
                                <td class="rank">#<?php echo $rank++; ?></td>
                                <td><?php echo htmlspecialchars($row['username']); ?></td>
                                <td class="lessons-count"><?php echo $row['lessons_done']; ?> / 6 مهام</td>
                                <td><span class="points-badge"><?php echo $row['total_points']; ?> نقطة</span></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="empty-msg">لا يوجد متنافسون بعد.. كن أول من يتصدر اللوحة!</div>
            <?php endif; ?>
        </div>
    </div>

    <a href="index.php" class="btn-back">العودة للرئيسية 🏠</a>

</body>
</html>