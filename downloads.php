<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة التحميلات | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body> <?php include 'header.php'; ?>

    <header class="page-header" data-aos="fade-down" style="background: linear-gradient(135deg, var(--main-blue), var(--accent-color));">
        <div class="container">
            <h1>📂 مكتبة الوسائط والتحميلات</h1>
            <p>حمل الملفات الخاصة بكل درس (PDF - صور - عروض PPT)</p>
        </div>
    </header>

    <main class="container" data-aos="fade-up">
        
        <h2 class="section-title" style="margin-top: 30px; color: var(--main-blue);">🔵 الوحدة الأولى: أجهزة النقل</h2>

        <div class="downloads-grid">
            <div class="download-card">
                <div class="file-icon">🫁</div>
                <div class="file-info">
                    <h3>الدرس 1: الجهاز التنفسي</h3>
                    <p>ملخص شامل + صور + عرض باوربوينت</p>
                </div>
                <div class="download-actions">
                    <a href="files/الوحده 1/الدرس 1/الدرس 1 الجهاز التنفسي.pdf" download class="download-btn">📄 PDF</a>
                    
                    <a href="images/الوحده 1/الدرس_1_صور.zip" download class="download-btn img-btn">🖼️ صور</a>
                    
                    <a href="files/الوحده 1/ppt/الدرس 1/الدرس 1.pptx" download class="download-btn ppt-btn" style="background:#d24726">📊 PPT</a>
                </div>
            </div>

            <div class="download-card">
                <div class="file-icon">❤️</div>
                <div class="file-info">
                    <h3>الدرس 2: الجهاز الدوري</h3>
                    <p>ملخص شامل + صور + عرض باوربوينت</p>
                </div>
                <div class="download-actions">
                    <a href="files/الوحده 1/الدرس 2/الدرس 2 الجهاز الدوري.pdf" download class="download-btn">📄 PDF</a>
                    
                    <a href="images/الوحده 1/الدرس_2_صور.zip" download class="download-btn img-btn">🖼️ صور</a>
                    
                    <a href="#" class="download-btn ppt-btn" style="background:#ccc; cursor: not-allowed;">📊 قريباً</a>
                </div>
            </div>

            <div class="download-card">
                <div class="file-icon">🩸</div>
                <div class="file-info">
                    <h3>الدرس 3: الدم ومكوناته</h3>
                    <p>ملخص شامل + صور + عرض باوربوينت</p>
                </div>
                <div class="download-actions">
                    <a href="#" class="download-btn" style="background:#ccc;">📄 قريباً</a>
                    <a href="#" class="download-btn img-btn" style="background:#ccc;">🖼️ قريباً</a>
                    <a href="#" class="download-btn ppt-btn" style="background:#ccc;">📊 قريباً</a>
                </div>
            </div>
        </div>

        <hr style="margin: 40px 0; border: 0; border-top: 1px dashed #ccc;">

        <h2 class="section-title" style="color: #27ae60;">🟢 الوحدة الثانية: الغذاء والإخراج</h2>

        <div class="downloads-grid">
            <div class="download-card">
                <div class="file-icon">🍔</div>
                <div class="file-info">
                    <h3>الدرس 1: الجهاز الهضمي</h3>
                    <p>ملخص شامل + صور + عرض باوربوينت</p>
                </div>
                <div class="download-actions">
                    <a href="#" class="download-btn" style="background:#ccc;">📄 قريباً</a>
                    <a href="#" class="download-btn img-btn" style="background:#ccc;">🖼️ قريباً</a>
                    <a href="#" class="download-btn ppt-btn" style="background:#ccc;">📊 قريباً</a>
                </div>
            </div>
            <div class="download-card">
                <div class="file-icon">🥗</div>
                <div class="file-info">
                    <h3>الدرس 2: أهمية الغذاء الصحي</h3>
                    <p>ملخص شامل + صور + عرض باوربوينت</p>
                </div>
                <div class="download-actions">
                    <a href="#" class="download-btn" style="background:#ccc;">📄 قريباً</a>
                    <a href="#" class="download-btn img-btn" style="background:#ccc;">🖼️ قريباً</a>
                    <a href="#" class="download-btn ppt-btn" style="background:#ccc;">📊 قريباً</a>
                </div>
            </div>
        </div>

    </main>

    <style>
        .download-actions {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            margin-top: 10px;
        }
        .download-actions .download-btn {
            padding: 8px 12px;
            font-size: 0.8rem;
            flex: 1;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            background: var(--main-blue, #1a73e8);
        }
        .download-actions .img-btn { background: #2ecc71; }
        .download-actions .ppt-btn { background: #d24726; }
    </style>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
     </script>
</body>
</html>