<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فهرس الدروس | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ستايل إضافي خاص بصفحة الفهرس لضمان التوافق مع Dark Mode */
        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            transition: 0.3s;
        }

        .page-header {
            background: linear-gradient(135deg, var(--accent), #2c82bf) !important;
            padding: 50px 0;
            text-align: center;
            border-radius: 0 0 40px 40px;
            margin-bottom: 30px;
        }

        .unit-section {
            margin-bottom: 20px;
            border-radius: 20px;
            overflow: hidden;
            background: var(--bg-card);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(128, 128, 128, 0.1);
        }

        .unit-header {
            width: 100%;
            padding: 20px;
            background: var(--bg-card);
            color: var(--text-main);
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: bold;
            transition: 0.3s;
        }

        .unit-header:hover {
            background: rgba(17, 186, 240, 0.05);
        }

        .unit-header.active {
            border-bottom: 2px solid var(--accent);
        }

        .unit-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out, padding 0.3s ease;
            background: var(--bg-body);
        }

        .unit-content.open {
            max-height: 1000px; /* رقم كبير لضمان ظهور المحتوى */
            padding: 20px;
        }

        .lesson-item {
            display: flex;
            align-items: center;
            background: var(--bg-card);
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 15px;
            text-decoration: none;
            color: var(--text-main);
            border: 1px solid rgba(128, 128, 128, 0.08);
            transition: 0.3s;
        }

        .lesson-item:hover:not(.disabled) {
            transform: translateX(-10px);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(17, 186, 240, 0.1);
        }

        .lesson-item .icon {
            font-size: 2.5rem;
            margin-left: 20px;
        }

        .lesson-item h4 {
            margin: 0 0 5px 0;
            font-size: 1.1rem;
        }

        .lesson-item p {
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.7;
        }

        .lesson-item.disabled {
            opacity: 0.6;
            cursor: not-allowed;
            filter: grayscale(1);
        }

        .arrow {
            transition: transform 0.3s ease;
        }

        .unit-header.active .arrow {
            transform: rotate(180deg);
        }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <header class="page-header" data-aos="fade-down">
        <div class="container">
            <h1 style="color: white;">📚 الوحدات الدراسية</h1>
            <p style="color: rgba(255,255,255,0.9);">اختر الوحدة ثم ابدأ رحلتك التعليمية</p>
        </div>
    </header>

    <main class="container" data-aos="fade-up">
        <div class="unit-section">
            <button class="unit-header" onclick="toggleUnit('unit1')">
                <span>📂 الوحدة الأولى: أجهزة النقل والإمداد</span>
                <span class="arrow">▼</span>
            </button>
            <div id="unit1" class="unit-content">
                <div class="lessons-list">
                    <a href="lesson-detail.php" class="lesson-item">
                        <span class="icon">🫁</span>
                        <div class="text">
                            <h4>الدرس الأول: الجهاز التنفسي</h4>
                            <p>تعرف على آلية الشهيق والزفير وتبادل الغازات.</p>
                        </div>
                    </a>
                    <a href="circulatory-detail.php" class="lesson-item">
                        <span class="icon">❤️</span>
                        <div class="text">
                            <h4>الدرس الثاني: الجهاز الدوري</h4>
                            <p>وظيفة القلب والأوعية الدموية ودورة الدم الحيوية.</p>
                        </div>
                    </a>
                    <a href="blood-detail.php" class="lesson-item">
                        <span class="icon">🩸</span>
                        <div class="text">
                            <h4>الدرس الثالث: الدم ومكوناته</h4>
                            <p>تعرف على أنواع خلايا الدم ووظائفها المذهلة.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="unit-section">
            <button class="unit-header" onclick="toggleUnit('unit2')">
                <span>📂 الوحدة الثانية: الطاقة والصحة</span>
                <span class="arrow">▼</span>
            </button>
            <div id="unit2" class="unit-content">
                <div class="lessons-list">
                    <a href="digestive-detail.php" class="lesson-item">
                        <span class="icon">🍔</span>
                        <div class="text">
                            <h4>الدرس الأول: الجهاز الهضمي</h4>
                            <p>رحلة الطعام العجيبة من الفم إلى باقي أجزاء الجسم.</p>
                        </div>
                    </a>
                    <a href="healthy-food-detail.php" class="lesson-item">
                        <span class="icon">🥗</span>
                        <div class="text">
                            <h4>الدرس الثاني: أهمية الغذاء الصحي</h4>
                            <p>كيف تختار غذاءك بذكاء لتبني جسماً قوياً.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleUnit(unitId) {
            const content = document.getElementById(unitId);
            const header = content.previousElementSibling;
            
            // تبديل الكلاسات للفتح والإغلاق
            content.classList.toggle('open');
            header.classList.toggle('active');
        }

        // كود إضافي للتأكد من حالة الثيم عند التحميل
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.setAttribute('data-theme', 'dark');
                document.body.classList.add('dark-mode');
            }
        });
    </script>
    <script src="script.js?v=1.2"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>