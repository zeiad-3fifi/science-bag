<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس الجهاز التنفسي | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* تنسيقات مخصصة لصفحة الدرس */
        .lesson-header {
            background: linear-gradient(135deg, var(--accent), #2c82bf) !important;
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 0 0 50px 50px;
            margin-bottom: 40px;
        }

        .internal-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
            background: var(--bg-card);
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .tab-btn {
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            background: transparent;
            color: var(--text-main);
            font-family: 'Tajawal', sans-serif;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab-btn.active {
            background: var(--accent);
            color: white;
        }

        .tab-pane { display: none; }
        .tab-pane.active { display: block; animation: fadeIn 0.5s ease; }

        .lesson-card {
            background: var(--bg-card);
            color: var(--text-main);
            padding: 30px;
            border-radius: 24px;
            margin-bottom: 25px;
            border: 1px solid rgba(128, 128, 128, 0.1);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .equation-box {
            background: rgba(17, 186, 240, 0.05);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin: 20px 0;
            border-right: 5px solid var(--accent);
            direction: ltr; /* لضمان ظهور المعادلة بشكل صحيح */
        }

        .anatomy-list {
            list-style: none;
            padding: 0;
        }

        .anatomy-list li {
            padding: 15px;
            background: rgba(128, 128, 128, 0.03);
            margin-bottom: 10px;
            border-radius: 12px;
            border-right: 4px solid var(--accent);
        }

        /* تنسيق الجدول */
        .table-wrapper { overflow-x: auto; margin-top: 20px; }
        .breathing-table { width: 100%; border-collapse: collapse; min-width: 500px; }
        .breathing-table th { background: var(--accent); color: white; padding: 15px; }
        .breathing-table td { padding: 15px; border-bottom: 1px solid rgba(128, 128, 128, 0.1); text-align: center; }

        /* سلايدر الصور */
        .image-slider { position: relative; border-radius: 20px; overflow: hidden; background: #000; margin-top: 20px; }
        .slide { display: none; text-align: center; }
        .slide.active { display: block; }
        .slide img { width: 100%; max-height: 450px; object-fit: contain; }
        .caption { background: rgba(0,0,0,0.7); color: white; padding: 10px; position: absolute; bottom: 0; width: 100%; }
        
        .prev, .next {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(255,255,255,0.3); color: white; border: none;
            padding: 15px; cursor: pointer; border-radius: 50%; transition: 0.3s;
        }
        .prev:hover, .next:hover { background: var(--accent); }
        .prev { right: 10px; } .next { left: 10px; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <header class="lesson-header" data-aos="fade-down">
        <div class="container">
            <h1>🫁 الجهاز التنفسي في الإنسان</h1>
            <p>الوحدة الأولى: أجهزة النقل والإمداد</p>
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
                <h3>1. لماذا نتنفس؟ (المقدمة الكيميائية)</h3>
                <p>عملية التنفس هي احتراق الغذاء لإنتاج الطاقة اللازمة للعمليات الحيوية:</p>
                <div class="equation-box">
                    $$C_6H_{12}O_6 + 6O_2 \rightarrow 6CO_2 + 6H_2O + ATP$$
                </div>
            </div>

            

[Image of the human respiratory system]


            <div class="lesson-card" data-aos="fade-up">
                <h3>2. الرحلة التشريحية للأكسجين</h3>
                <ul class="anatomy-list">
                    <li><strong>الأنف:</strong> الممر الصحي الأول (تدفئة، ترطيب، وترشيح).</li>
                    <li><strong>القصبة الهوائية:</strong> حلقات غضروفية تجعلها مفتوحة دائماً وأهداب لطرد الأجسام الغريبة.</li>
                    <li><strong>الحويصلات الهوائية:</strong> أكياس رقيقة جداً محاطة بالشعيرات الدموية، وهنا يحدث تبادل الغازات.</li>
                </ul>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>3. آلية التنفس (ميكانيكا الحركة)</h3>
                <div class="table-wrapper">
                    <table class="breathing-table">
                        <thead>
                            <tr>
                                <th>وجه المقارنة</th>
                                <th>الشهيق (Inspiration)</th>
                                <th>الزفير (Expiration)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>عضلة الحجاب الحاجز</td>
                                <td>تنقبض وتتحرك لأسفل</td>
                                <td>تنبسط وتتحرك لأعلى</td>
                            </tr>
                            <tr>
                                <td>حجم التجويف الصدري</td>
                                <td>يتسع ويقل الضغط</td>
                                <td>يضيق ويزداد الضغط</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>4. ركن الصحة والوقاية 🛡️</h3>
                <p>للحفاظ على جهازك التنفسي:</p>
                <ul class="anatomy-list">
                    <li>ابتعاد تام عن التدخين والمناطق الملوثة.</li>
                    <li>ممارسة الرياضة لزيادة كفاءة الرئتين.</li>
                    <li>تناول الخضروات والفاكهة الغنية بفيتامين C.</li>
                </ul>
            </div>
        </div>

        <div id="media" class="tab-pane">
            <div class="lesson-card">
                <h3>🎥 فيديو توضيحي</h3>
                <div style="aspect-ratio: 16/9; margin-top: 20px;">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kR01z-JPX-k" frameborder="0" allowfullscreen style="border-radius: 15px;"></iframe>
                </div>
            </div>

            <div class="lesson-card">
                <h3>🖼️ معرض الصور التعليمية</h3>
                <div class="image-slider" data-aos="zoom-in">
    <div class="slides">
        <div class="slide active">
            <img src="images/unit1/lesson1/respiratory-1.jpg" alt="الجهاز التنفسي">
            <div class="caption">نظرة عامة على هيكل الجهاز التنفسي</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/lungs-detail.jpg" alt="الحويصلات الهوائية">
            <div class="caption">تبادل الغازات داخل الحويصلات الهوائية</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/diaphragm.jpg" alt="عضلة الحجاب الحاجز">
            <div class="caption">آلية انقباض وانبساط عضلة الحجاب الحاجز</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/atp.jpg" alt="الطاقة">
            <div class="caption">عملية التنفس الخلوي وإنتاج الطاقة (ATP)</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/inspiration.jpg" alt="الشهيق والزفير">
            <div class="caption">مقارنة ميكانيكية بين الشهيق والزفير</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/lungs.jpg" alt="الرئتين">
            <div class="caption">شكل الرئتين من الخارج وحمايتهما بالضلوع</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/oxygen-travel.jpg" alt="رحلة الأكسجين">
            <div class="caption">مسار الهواء من الأنف وصولاً إلى الخلايا</div>
        </div>

        <div class="slide">
            <img src="images/unit1/lesson1/first-line-of-defense.jpg" alt="الأنف والأهداب">
            <div class="caption">الأنف والأهداب: خط الدفاع الأول ضد الميكروبات</div>
        </div>
    </div>

    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
</div>
            </div>
        </div>

        <div id="activity" class="tab-pane">
            <div class="lesson-card" style="text-align: center;">
                <h3>اختبر معلوماتك ⚡</h3>
                <p>أين يحدث تبادل الغازات فعلياً داخل الرئة؟</p>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                    <button class="tab-btn" style="border: 1px solid var(--accent);" onclick="checkAnswer(this, false)">البلعوم</button>
                    <button class="tab-btn" style="border: 1px solid var(--accent);" onclick="checkAnswer(this, true)">الحويصلات الهوائية</button>
                    <button class="tab-btn" style="border: 1px solid var(--accent);" onclick="checkAnswer(this, false)">الأنف</button>
                </div>
                <div id="quiz-result" style="margin-top: 20px; font-weight: bold;"></div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // تفعيل مكتبة الأنميشن
        AOS.init({ duration: 800, once: true });

        // تبديل التبويبات
        function switchTab(evt, tabId) {
            document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        // سلايدر الصور
        let currentSlide = 0;
        function changeSlide(direction) {
            const slides = document.querySelectorAll('.slide');
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        // فحص الإجابة
        function checkAnswer(btn, isCorrect) {
            const result = document.getElementById('quiz-result');
            if(isCorrect) {
                btn.style.background = "#2ecc71";
                btn.style.color = "white";
                result.innerHTML = "✅ إجابة رائعة! أنت بطل.";
                result.style.color = "#2ecc71";
            } else {
                btn.style.background = "#e74c3c";
                btn.style.color = "white";
                result.innerHTML = "❌ حاول مرة أخرى، فكر في أكياس الهواء الصغيرة.";
                result.style.color = "#e74c3c";
            }
        }
    </script>
    <script src="script.js?v=1.2"></script>
</body>
</html>