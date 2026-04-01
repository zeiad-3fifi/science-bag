<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس الغذاء الصحي | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* تنسيقات ثيم الغذاء الصحي (الأخضر) */
        .lesson-header {
            background: linear-gradient(135deg, #27ae60, #2ecc71) !important;
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 0 0 50px 50px;
            margin-bottom: 40px;
        }

        .tab-btn.active {
            background: #27ae60;
            color: white;
        }

        .food-pyramid-item {
            border-right: 5px solid #2ecc71;
            background: rgba(46, 204, 113, 0.05);
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .energy-box {
            background: #f1c40f15;
            border: 1px dashed #f1c40f;
            padding: 15px;
            border-radius: 15px;
            margin: 15px 0;
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
            <h1>🥗 الغذاء الصحي والمتوازن</h1>
            <p>الوقود الحقيقي لجسمك وعقلك</p>
        </div>
    </header>

    <main class="container">
        <div class="internal-tabs" data-aos="fade-up">
            <button class="tab-btn active" onclick="switchTab(event, 'theory')">📖 الهرم الغذائي</button>
            <button class="tab-btn" onclick="switchTab(event, 'media')">🎬 الوسائط</button>
            <button class="tab-btn" onclick="switchTab(event, 'activity')">🧩 الشيف الصغير</button>
        </div>

        <div id="theory" class="tab-pane active">
            <div class="lesson-card" data-aos="fade-up">
                <h3>ما هو الغذاء المتوازن؟</h3>
                <p>هو الغذاء الذي يحتوي على جميع العناصر الغذائية الضرورية بنسب معينة تتناسب مع احتياجات الجسم (العمر، النوع، والنشاط البدني).</p>
            </div>

            

[Image of the healthy food pyramid]


            <div class="lesson-card" data-aos="fade-up">
                <h3>مكونات الغذاء الأساسية:</h3>
                
                <div class="food-pyramid-item">
                    <strong>1. الكربوهيدرات:</strong> المصدر الرئيسي للطاقة (الخبز، الأرز، المكرونة).
                </div>
                <div class="food-pyramid-item">
                    <strong>2. البروتينات:</strong> ضرورية لنمو العضلات وتجديد الخلايا (اللحوم، البيض، البقوليات).
                </div>
                <div class="food-pyramid-item">
                    <strong>3. الدهون الصحية:</strong> مصدر طاقة احتياطي وحماية للأعضاء (زيت الزيتون، المكسرات).
                </div>
                <div class="food-pyramid-item">
                    <strong>4. الفيتامينات والمعادن:</strong> تقوي المناعة وتحمي من الأمراض (الخضروات والفواكه).
                </div>
            </div>

            <div class="lesson-card energy-box" data-aos="zoom-in">
                <h4>💡 هل تعلم؟</h4>
                <p>يحتاج جسمك للماء كعنصر أساسي بجانب الغذاء، حيث يشكل الماء حوالي 60-70% من وزن جسمك ويساعد في التخلص من السموم.</p>
            </div>
        </div>

        <div id="media" class="tab-pane">
            <div class="lesson-card">
                <h3>🖼️ معرض الصور</h3>
                <div class="image-slider">
                    <div class="slides">
                        <div class="slide active">
                            <img src="images/unit2/lesson2/food-pyramid.jpg" alt="الهرم الغذائي">
                            <div class="caption">توزيع المجموعات الغذائية في الهرم</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit2/lesson2/healthy-plate.jpg" alt="الطبق الصحي">
                            <div class="caption">تقسيم الطبق الصحي المثالي</div>
                        </div>
                    </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>

        <div id="activity" class="tab-pane">
            <div class="lesson-card" style="text-align: center;">
                <h3>تحدي الطبق الصحي 🥗</h3>
                <p>إذا أردت بناء عضلات قوية بعد ممارسة الرياضة، أي عنصر يجب أن تركز عليه في وجبتك؟</p>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                    <button class="tab-btn" style="border: 1px solid #27ae60;" onclick="checkAnswer(this, false)">السكريات</button>
                    <button class="tab-btn" style="border: 1px solid #27ae60;" onclick="checkAnswer(this, true)">البروتينات</button>
                    <button class="tab-btn" style="border: 1px solid #27ae60;" onclick="checkAnswer(this, false)">الدهون</button>
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
                result.innerHTML = "✅ أحسنت! البروتينات هي أحجار البناء التي تبني العضلات وتصلح الأنسجة.";
                result.style.color = "#2ecc71";
            } else {
                btn.style.background = "#e74c3c";
                btn.style.color = "white";
                result.innerHTML = "❌ حاول مرة أخرى.. فكر في المكون الذي نجده في اللحوم والبقوليات.";
                result.style.color = "#e74c3c";
            }
        }
    </script>
</body>
</html>