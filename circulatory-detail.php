<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس الجهاز الدوري | الحقيبة التعليمية</title>
    
    <link rel="stylesheet" href="style.css?v=1.2">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* تنسيقات مخصصة لثيم الجهاز الدوري (الأحمر) */
        .lesson-header {
            background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
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
            background: #e74c3c;
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

        .anatomy-list li {
            padding: 15px;
            background: rgba(231, 76, 60, 0.05);
            margin-bottom: 10px;
            border-radius: 12px;
            border-right: 4px solid #e74c3c;
            list-style: none;
        }

        /* تنسيق الجداول */
        .table-wrapper { overflow-x: auto; margin-top: 20px; }
        .breathing-table { width: 100%; border-collapse: collapse; min-width: 500px; }
        .breathing-table th { background: #e74c3c; color: white; padding: 15px; }
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
            padding: 15px; cursor: pointer; border-radius: 50%;
        }
        .prev { right: 10px; } .next { left: 10px; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>

    <header class="lesson-header" data-aos="fade-down">
        <div class="container">
            <h1>❤️ الجهاز الدوري في الإنسان</h1>
            <p>شبكة النقل الحيوية داخل جسمك</p>
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
                <h3>ما هو الجهاز الدوري؟</h3>
                <p>هو الجهاز المسؤول عن نقل الدم المحمل بالأكسجين والغذاء إلى جميع خلايا الجسم، وتخليصها من الفضلات.</p>
            </div>

            

[Image of the human circulatory system]


            <div class="lesson-card" data-aos="fade-up">
                <h3>1. القلب (المضخة)</h3>
                <ul class="anatomy-list">
                    <li><strong>الجانب الأيسر:</strong> يستقبل الدم المؤكسج من الرئتين ويضخه للجسم.</li>
                    <li><strong>الجانب الأيمن:</strong> يستقبل الدم غير المؤكسج من الجسم ويضخه للرئتين.</li>
                    <li><strong>الصمامات:</strong> تسمح للدم بالمرور في اتجاه واحد وتمنع رجوعه.</li>
                </ul>
            </div>

            <div class="lesson-card" data-aos="fade-up">
                <h3>2. الأوعية الدموية</h3>
                <div class="table-wrapper">
                    <table class="breathing-table">
                        <thead>
                            <tr>
                                <th>الوعاء</th>
                                <th>الوظيفة</th>
                                <th>الميزة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>الشرايين</td>
                                <td>من القلب للجسم</td>
                                <td>جدار سميك ومرن</td>
                            </tr>
                            <tr>
                                <td>الأوردة</td>
                                <td>من الجسم للقلب</td>
                                <td>تحتوي على صمامات</td>
                            </tr>
                            <tr>
                                <td>الشعيرات</td>
                                <td>تبادل المواد</td>
                                <td>جدار رقيق جداً</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="media" class="tab-pane">
            <div class="lesson-card">
                <h3>🎥 فيديو توضيحي</h3>
                <div style="aspect-ratio: 16/9; margin-top: 20px;">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/UHtqV2HmTuU" frameborder="0" allowfullscreen style="border-radius: 15px;"></iframe>
                </div>
            </div>

            <div class="lesson-card">
                <h3>🖼️ معرض الصور</h3>
                <div class="image-slider">
                    <div class="slides">
                        <div class="slide active">
                            <img src="images/unit1/lesson2/heart-internal.jpg" alt="القلب">
                            <div class="caption">تركيب القلب من الداخل</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit1/lesson2/blood-components.jpg" alt="الدم">
                            <div class="caption">مكونات الدم المجهرية</div>
                        </div>
                        <div class="slide">
                            <img src="images/unit1/lesson2/circulation-map.jpg" alt="الدورة الدموية">
                            <div class="caption">خريطة الدورة الدموية الكبرى والصغرى</div>
                        </div>
                    </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>

        <div id="activity" class="tab-pane">
            <div class="lesson-card" style="text-align: center;">
                <h3>تحدي الأبطال ⚡</h3>
                <p>أي من مكونات الدم مسؤول عن "تجلط الدم" ووقف النزيف؟</p>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                    <button class="tab-btn" style="border: 1px solid #e74c3c;" onclick="checkAnswer(this, false)">خلايا حمراء</button>
                    <button class="tab-btn" style="border: 1px solid #e74c3c;" onclick="checkAnswer(this, true)">الصفائح الدموية</button>
                    <button class="tab-btn" style="border: 1px solid #e74c3c;" onclick="checkAnswer(this, false)">خلايا بيضاء</button>
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
                result.innerHTML = "✅ إجابة صحيحة! الصفائح الدموية هي المسؤولة عن التئام الجروح.";
                result.style.color = "#2ecc71";
            } else {
                btn.style.background = "#e74c3c";
                btn.style.color = "white";
                result.innerHTML = "❌ حاول مرة أخرى.. فكر في المكون الذي يسد الفتحات عند الجرح.";
                result.style.color = "#e74c3c";
            }
        }
    </script>
    <script src="script.js?v=1.2"></script>
</body>
</html>