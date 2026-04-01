<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body> <?php include 'header.php'; ?>

    <header class="page-header" style="background: linear-gradient(135deg, var(--main-blue), var(--accent-color));">
        <div class="container" data-aos="zoom-in">
            <h1>📧 تواصل معنا</h1>
            <p>لديك استفسار أو اقتراح؟ نحن هنا لمساعدتك!</p>
        </div>
    </header>

    <main class="container contact-section">
        <div class="contact-grid">
            
            <div class="contact-form-card" data-aos="fade-left">
                <h3>أرسل لنا رسالة</h3>
                <form id="contactForm">
                    <div class="input-group">
                        <label>الاسم الكامل</label>
                        <input type="text" placeholder="أدخل اسمك هنا" required>
                    </div>
                    <div class="input-group">
                        <label>البريد الإلكتروني</label>
                        <input type="email" placeholder="example@mail.com" required>
                    </div>
                    <div class="input-group">
                        <label>عنوان الرسالة</label>
                        <input type="text" placeholder="بخصوص ماذا تريد مراسلتنا؟">
                    </div>
                    <div class="input-group">
                        <label>رسالتك</label>
                        <textarea rows="5" placeholder="اكتب تفاصيل رسالتك هنا..." required></textarea>
                    </div>
                    <button type="submit" class="btn-main" style="width: 100%;">إرسال الرسالة</button>
                </form>
            </div>

            <div class="contact-info" data-aos="fade-right">
                <div class="info-item">
                    <div class="icon">📍</div>
                    <div>
                        <h4>مقرنا</h4>
                        <p>مرسى مطروح، جمهورية مصر العربية</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="icon">📞</div>
                    <div>
                        <h4>اتصل بنا</h4>
                        <p lang="en" dir="ltr">+20 1026627759</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="icon">✉️</div>
                    <div>
                        <h4>البريد الإلكتروني</h4>
                        <p>zeiadafifi2022@hotmail.com</p>
                    </div>
                </div>

                <div class="social-links">
                    <h4>تابعنا على</h4>
                    <div class="social-icons">
                        <a href="#" class="social-btn fb">Facebook</a>
                        <a href="#" class="social-btn yt">YouTube</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="script.js"></script>
    <style>
        /* Contact Page Styles */
.contact-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 40px;
    margin-top: 40px;
    margin-bottom: 50px;
}

.contact-form-card {
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.input-group {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.input-group input, .input-group textarea {
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 10px;
    font-family: 'Tajawal', sans-serif;
    outline: none;
    transition: 0.3s;
}

.input-group input:focus, .input-group textarea:focus {
    border-color: var(--main-blue);
    box-shadow: 0 0 5px rgba(0,98,255,0.2);
}

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 20px;
    background: var(--soft-blue);
    padding: 20px;
    border-radius: 15px;
}

.info-item .icon {
    font-size: 2rem;
}

.social-icons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.social-btn {
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.fb { background: #3b5998; }
.yt { background: #ff0000; }

/* Responsive Contact */
@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
</body>
</html>