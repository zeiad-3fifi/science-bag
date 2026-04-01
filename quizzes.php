<?php 
// يُفضل دائماً التأكد من الجلسة في بداية الملفات التي تعتمد على بيانات المستخدم
session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مركز الاختبارات | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* تنسيق شريط التقدم */
        .progress-section {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        .progress-container {
            background: #e0e0e0;
            border-radius: 20px;
            height: 20px;
            width: 100%;
            margin-top: 10px;
            overflow: hidden;
        }
        .progress-bar {
            background: linear-gradient(90deg, #27ae60, #2ecc71);
            height: 100%;
            width: 0%; /* تبدأ من 0 ويتم تحديثها بالـ JS */
            transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* نظام القفل المطور */
        .quiz-card.locked {
            opacity: 0.6;
            filter: grayscale(0.8);
            pointer-events: none;
            position: relative;
            cursor: not-allowed;
        }
        .quiz-card.locked::after {
            content: "🔒 مغلق حالياً";
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 0.75rem;
            z-index: 10;
        }

        .unit-tag {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .u1-tag { background: #e3f2fd; color: #1a73e8; }
        .u2-tag { background: #e8f5e9; color: #27ae60; }

        .final-challenge {
            background: #2c3e50 !important;
            color: white !important;
            grid-column: 1 / -1;
            margin-top: 30px;
            border: 2px solid #f1c40f;
            transition: 0.3s;
        }
        .final-challenge:not(.locked):hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <main class="container" data-aos="fade-up">
        <div class="progress-section">
            <h3>📊 مستوى إنجازك في المنهج: <span id="progressText">0%</span></h3>
            <div class="progress-container">
                <div class="progress-bar" id="mainProgress"></div>
            </div>
            <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">اجتز الاختبارات بنسبة 70% على الأقل لفتح التحديات التالية</p>
        </div>

        <div class="downloads-grid">
            
            <div class="download-card quiz-card" id="q1">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">🫁</div>
                <div class="file-info">
                    <h3>اختبار: الجهاز التنفسي</h3>
                    <p>ابدأ رحلتك التعليمية من هنا</p>
                </div>
                <a href="quiz1.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q2">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">❤️</div>
                <div class="file-info">
                    <h3>اختبار: الجهاز الدوري</h3>
                    <p>يفتح بعد النجاح في اختبار التنفس</p>
                </div>
                <a href="quiz2.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q3">
                <span class="unit-tag u1-tag">الوحدة الأولى</span>
                <div class="file-icon">🩸</div>
                <div class="file-info">
                    <h3>اختبار: الدم ومكوناته</h3>
                    <p>يفتح بعد النجاح في اختبار الدوري</p>
                </div>
                <a href="quiz3.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q4">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🍔</div>
                <div class="file-info">
                    <h3>اختبار: الجهاز الهضمي</h3>
                    <p>يفتح بعد إنهاء الوحدة الأولى</p>
                </div>
                <a href="quiz4.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked" id="q5">
                <span class="unit-tag u2-tag">الوحدة الثانية</span>
                <div class="file-icon">🥗</div>
                <div class="file-info">
                    <h3>اختبار: الغذاء الصحي</h3>
                    <p>يفتح بعد النجاح في اختبار الهضم</p>
                </div>
                <a href="quiz5.php" class="download-btn">ابدأ الاختبار</a>
            </div>

            <div class="download-card quiz-card locked final-challenge" id="qFinal">
                <div class="file-icon">🏆</div>
                <div class="file-info">
                    <h3>الاختبار الشامل (المنهج كاملاً)</h3>
                    <p>تحدي الأبطال النهائي لجميع الدروس</p>
                </div>
                <a href="quiz-final.php" class="download-btn" style="background:#f1c40f; color:#000;">بدء التحدي الكبير</a>
            </div>

        </div>
    </main>

    <script>
    function checkProgress() {
        fetch('get_progress.php')
        .then(response => response.json())
        .then(data => {
            let completed = parseInt(data.completed_count);
            let totalQuizzes = 6;
            let progress = Math.round((completed / totalQuizzes) * 100);
            
            // تحديث شريط التقدم والنص
            if(document.getElementById('mainProgress')) {
                document.getElementById('mainProgress').style.width = progress + '%';
                document.getElementById('progressText').innerText = progress + '%';
            }

            // فتح الاختبارات بالتتابع
            // إذا أكمل 1، يفتح 2.. إذا أكمل 2 يفتح 3 وهكذا
            for (let i = 2; i <= 5; i++) {
                let qBox = document.getElementById('q' + i);
                if (qBox && completed >= (i - 1)) {
                    qBox.classList.remove('locked');
                    // تحديث النص عند الفتح
                    let pTag = qBox.querySelector('.file-info p');
                    if(pTag) pTag.innerText = "أنت مستعد لهذا الاختبار الآن!";
                }
            }
            
            // فتح التحدي النهائي لو خلص الـ 5 اختبارات الأساسية
            if (completed >= 5) {
                let qFinal = document.getElementById('qFinal');
                if(qFinal) {
                    qFinal.classList.remove('locked');
                    qFinal.querySelector('.file-info p').innerText = "انطلق يا بطل نحو الوسام!";
                }
            }
        })
        .catch(err => console.error("Error fetching progress:", err));
    }

    // تشغيل الدالة فور تحميل الصفحة
    document.addEventListener('DOMContentLoaded', checkProgress);
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    <script src="script.js"></script>
</body>
</html>
