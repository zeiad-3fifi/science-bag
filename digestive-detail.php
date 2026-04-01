<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس الجهاز الهضمي | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* تنسيقات ثيم الجهاز الهضمي */
        .lesson-header {
            background: linear-gradient(135deg, #f39c12, #e67e22) !important;
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 0 0 50px 50px;
            margin-bottom: 40px;
        }

        .tab-btn.active {
            background: #e67e22;
            color: white;
        }

        .anatomy-list li {
            border-right: 4px solid #e67e22;
            background: rgba(230, 126, 34, 0.05);
        }

        .digestive-step {
            border-right: 3px dashed #f39c12;
            margin-right: 20px;
            padding-right: 20px;
            margin-bottom: 20px;
        }

        /* سلايدر الصور */
        .image-slider { position: relative; border-radius: 20px; overflow: hidden; background: #000; }
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
            <h1>🍔 الجهاز الهضمي في الإنسان</h1>
            <p>الوحدة الثانية: كيف يستفيد جسمك من الغذاء؟</p>
        </div>
    </header>

    <main class="container">
        <div class="internal-tabs" data-aos="fade-up">
            <button class="tab-btn active" onclick="switchTab(event, 'theory')">📖 رحلة الطعام</button>
            <button class="tab-btn" onclick="switchTab(event, 'media')">🎬 الوسائط</button>
            <button class="tab-btn" onclick="switchTab(event, 'activity')">🧩 مختبر الهضم</button>
        </div>

        <div id="theory" class="tab-pane active">
            <div class="lesson-card" data-aos="fade-up">
                <h3>ما هي عملية الهضم؟</h3>
                <p>هي عملية تحويل جزيئات الطعام الكبيرة والمعقدة إلى جزيئات صغيرة ذائبة ليسهل امتصاصها ونقلها إلى خلايا الجسم لإنتاج الطاقة.</p>
            </div>

            

[Image of the human digestive system]


            <div class="lesson-card" data-aos="fade-up">
                <h3>مسار الطعام (القناة الهضمية):</h3>
                <div class="digestive-step">
                    <strong>1. الفم:</strong> يبدأ فيه الهضم الميكانيكي (الأسنان) والكيميائي (اللعاب الذي يهضم النشويات).
                </div>
                <div class="digestive-step">
                    <strong>2. المريء:</strong> أنبوب عضلي يدفع الطعام نحو المعدة بواسطة "الحركة الدودية".
                </div>
                <div class="digestive-step">
                    <strong>3. المعدة:</strong> كيس عضلي يفرز الأحماض والإنزيمات لتحويل الطعام إلى سائل غليظ (الكيموس).
                </div>
                <div class="digestive-step">
                    <strong>4. الأمعاء الدقيقة:</strong> أطول جزء في القناة الهضمية، وهنا يتم الهضم الكامل وامتصاص الغذاء.
                </div>
                <div class="digestive-step">
                    <strong>5. الأمعاء الغليظة:</strong> يتم فيها امتصاص الماء من الفضلات قبل طردها خارج الجسم.
                </div>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>ملحقات الجهاز الهضمي:</h3>
                <ul class="anatomy-list">
                    <li><strong>الكبد:</strong> يفرز العصارة الصفراوية لهضم الدهون.</li>
                    <li><strong>البنكرياس:</strong> يفرز إنزيمات تساعد في هضم البروتينات والكربوهيدرات.</li>
                </ul>
            </div>
        </div>

        <div id="media" class="tab-pane">
            <div class="lesson-card">
                <h3>🖼️ معرض صور الجهاز الهضمي</h3>
                <div class="image-slider">
                    <div class="slides">
                        <div class="slide active">
                            <img src="images/unit2/lesson1/digestive-main.jpg" alt="digestive">
                            <div class="caption">أعضاء القناة الهضمية بالتفصيل</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit2/lesson1/stomach-detail.jpg" alt="stomach">
                            <div class="caption">تركيب المعدة الداخلي</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit2/lesson1/absorption.jpg" alt="absorption">
                            <div class="caption">عملية امتصاص الغذاء في الأمعاء الدقيقة</div>
                        </div>
                    </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>

        <div id="activity" class="tab-pane">
            <div class="lesson-card" style="text-align: center;">
                <h3>تحدي الهضم ⚡</h3>
                <p>أين تبدأ عملية هضم المواد "النشوية" (مثل الخبز والمكرونة)؟</p>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                    <button class="tab-btn" style="border: 1px solid #f39c12;" onclick="checkAnswer(this, true)">الفم</button>
                    <button class="tab-btn" style="border: 1px solid #f39c12;" onclick="checkAnswer(this, false)">المعدة</button>
                    <button class="tab-btn" style="border: 1px solid #f39c12;" onclick="checkAnswer(this, false)">الأمعاء الغليظة</button>
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
                result.innerHTML = "✅ إجابة ممتازة! اللعاب في الفم يحتوي على إنزيمات تبدأ هضم النشا فوراً.";
                result.style.color = "#2ecc71";
            } else {
                btn.style.background = "#e74c3c";
                btn.style.color = "white";
                result.innerHTML = "❌ فكر مجدداً.. أين يلمس الطعام اللعاب أولاً؟";
                result.style.color = "#e74c3c";
            }
        }
    </script>
    <script src="script.js?v=1.2"></script>
</body>
</html>