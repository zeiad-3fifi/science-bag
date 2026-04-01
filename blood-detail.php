<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس الدم ومكوناته | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* تنسيقات مخصصة لثيم الدم */
        .lesson-header {
            background: linear-gradient(135deg, #c0392b, #8e44ad) !important;
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 0 0 50px 50px;
            margin-bottom: 40px;
        }

        .tab-btn.active {
            background: #8e44ad;
            color: white;
        }

        .anatomy-list li {
            border-right: 4px solid #8e44ad;
            background: rgba(142, 68, 173, 0.05);
        }

        .component-card {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 15px;
            padding: 15px;
            background: var(--bg-card);
            border-radius: 15px;
            border: 1px solid rgba(128, 128, 128, 0.1);
        }

        .component-icon {
            font-size: 2.5rem;
            min-width: 60px;
            text-align: center;
        }

        /* سلايدر الصور */
        .image-slider { position: relative; border-radius: 20px; overflow: hidden; background: #000; margin-top: 20px; }
        .slide { display: none; text-align: center; }
        .slide.active { display: block; }
        .slide img { width: 100%; max-height: 450px; object-fit: contain; }
        .caption { background: rgba(0,0,0,0.7); color: white; padding: 10px; position: absolute; bottom: 0; width: 100%; }
        
        .prev, .next {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(255,255,255,0.3); color: white; border: none;
            padding: 15px; cursor: pointer; border-radius: 50%;
        }
        .prev { right: 10px; } .next { left: 10px; }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <header class="lesson-header" data-aos="fade-down">
        <div class="container">
            <h1>🩸 الدم ومكوناته</h1>
            <p>نهر الحياة الذي يغذي جسمك</p>
        </div>
    </header>

    <main class="container">
        <div class="internal-tabs" data-aos="fade-up">
            <button class="tab-btn active" onclick="switchTab(event, 'theory')">📖 المحتوى العلمي</button>
            <button class="tab-btn" onclick="switchTab(event, 'media')">🎬 الوسائط</button>
            <button class="tab-btn" onclick="switchTab(event, 'activity')">🧩 نشاط تفاعلي</button>
        </div>

        <div id="theory" class="tab-pane active">
            <div class="lesson-card" data-aos="fade-up">
                <h3>ما هو الدم؟</h3>
                <p>الدم هو نسيج ضام سائل يمثل حوالي 7-8% من وزن جسم الإنسان. يتكون من أربعة مكونات أساسية تعمل معاً بدقة متناهية.</p>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>مكونات الدم الأربعة:</h3>
                
                <div class="component-card">
                    <div class="component-icon">🔴</div>
                    <div>
                        <strong>خلايا الدم الحمراء:</strong> تنقل الأكسجين بفضل بروتين "الهيموجلوبين". ليس لها نواة وشكلها قرصي.
                    </div>
                </div>

                <div class="component-card">
                    <div class="component-icon">⚪</div>
                    <div>
                        <strong>خلايا الدم البيضاء:</strong> جيش الدفاع الذي يهاجم الميكروبات والفيروسات. تحتوي على نواة.
                    </div>
                </div>

                <div class="component-card">
                    <div class="component-icon">🧱</div>
                    <div>
                        <strong>الصفائح الدموية:</strong> أجزاء خلوية صغيرة جداً تساعد في تجلط الدم ومنع النزيف عند الإصابة.
                    </div>
                </div>

                <div class="component-card">
                    <div class="component-icon">💧</div>
                    <div>
                        <strong>البلازما:</strong> سائل أصفر يمثل أكثر من 50% من حجم الدم، ينقل الغذاء والفضلات والهرمونات.
                    </div>
                </div>
            </div>
        </div>

        <div id="media" class="tab-pane">
            <div class="lesson-card">
                <h3>🖼️ معرض الصور المجهرية</h3>
                <div class="image-slider">
                    <div class="slides">
                        <div class="slide active">
                            <img src="images/unit1/lesson3/blood-composition.jpg" alt="مكونات الدم">
                            <div class="caption">نسب مكونات الدم في العينة</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit1/lesson3/red-cells.jpg" alt="خلايا حمراء">
                            <div class="caption">خلايا الدم الحمراء تحت المجهر</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit1/lesson3/clotting.jpg" alt="تجلط الدم">
                            <div class="caption">كيف تعمل الصفائح الدموية على سد الجروح</div>
                        </div>
                    </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>

        <div id="activity" class="tab-pane">
            <div class="lesson-card" style="text-align: center;">
                <h3>تحدي المختبر 🔬</h3>
                <p>إذا فحصت عينة دم ووجدت أنها تفتقر لـ "الهيموجلوبين"، ما الوظيفة التي ستتأثر؟</p>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                    <button class="tab-btn" style="border: 1px solid #8e44ad;" onclick="checkAnswer(this, false)">مقاومة الأمراض</button>
                    <button class="tab-btn" style="border: 1px solid #8e44ad;" onclick="checkAnswer(this, true)">نقل الأكسجين</button>
                    <button class="tab-btn" style="border: 1px solid #8e44ad;" onclick="checkAnswer(this, false)">تجلط الدم</button>
                </div>
                <div id="quiz-result" style="margin-top: 20px; font-weight: bold;"></div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        function switchTab(evt, tabId) {
            document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        let currentSlide = 0;
        function changeSlide(direction) {
            const slides = document.querySelectorAll('.slide');
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function checkAnswer(btn, isCorrect) {
            const result = document.getElementById('quiz-result');
            if(isCorrect) {
                btn.style.background = "#2ecc71";
                btn.style.color = "white";
                result.innerHTML = "✅ إجابة دقيقة! الهيموجلوبين هو الناقل الرسمي للأكسجين.";
                result.style.color = "#2ecc71";
            } else {
                btn.style.background = "#e74c3c";
                btn.style.color = "white";
                result.innerHTML = "❌ فكر مجدداً.. الهيموجلوبين موجود داخل الخلايا الحمراء.";
                result.style.color = "#e74c3c";
            }
        }
    </script>
    <script src="script.js?v=1.2"></script>
</body>
</html>