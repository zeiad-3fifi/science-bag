<div class="sci-hero">
    <div class="sci-card">
        <div class="sci-heading">انضم لأبطال العلوم 🧬</div>
        <form action="register_action.php" method="POST" class="sci-form">
          <input required class="sci-input" type="text" name="username" placeholder="اسم المستخدم">
          <input required class="sci-input" type="email" name="email" placeholder="البريد الإلكتروني">
          <input required class="sci-input" type="password" name="password" placeholder="كلمة المرور">
          
          <input class="sci-submit-btn" type="submit" name="signup" value="إنشاء حساب">
        </form>

        <div class="sci-social-section">
            <span class="sci-social-title">أو اشترك بواسطة</span>
            <div class="sci-social-icons">
              <button type="button" class="sci-social-btn">
                <svg class="sci-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
              </button>
            </div>
        </div>

        <div class="sci-footer">
            <p>عندك حساب فعلاً؟ <a href="login.php">سجل دخولك من هنا</a></p>
        </div>
    </div>
</div>
<style>
 /* الأضواء المتحركة باستخدام ألوان موقعك */
.sci-hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    /* استخدام متغيرات الألوان اللي بعتها: Azure و White */
    background: linear-gradient(-45deg, #fff, #e7f8fd, #11baf022, #fff);
    background-size: 400% 400%;
    animation: sciLights 10s ease infinite;
    padding: 20px;
    font-family: 'Almarai', sans-serif;
}

@keyframes sciLights {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* تأثير الإضاءة الدائرية خلف الكارت */
.sci-hero::after {
    content: "";
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(17, 186, 240, 0.15) 0%, transparent 70%);
    z-index: 1;
}

.sci-card {
    position: relative;
    z-index: 10;
    max-width: 400px;
    width: 100%;
    background: #fff;
    border-radius: 1.3rem; /* نفس الـ border-radius-large بتاعك */
    padding: 35px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    direction: rtl;
    text-align: center;
    border: 1px solid #e7f8fd;
}

.sci-heading {
    font-weight: 700;
    font-size: 1.5rem;
    color: #11baf0; /* لون Bassthalk */
    margin-bottom: 25px;
}

.sci-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.sci-input {
    width: 100%;
    background: #f3f4f6; /* color-grey-1 */
    border: 2px solid transparent;
    padding: 15px;
    border-radius: 12px;
    box-sizing: border-box;
    text-align: right;
    transition: 0.3s ease;
    font-family: inherit;
}

.sci-input:focus {
    outline: none;
    border-color: #11baf0;
    background: #fff;
}

.sci-submit-btn {
    width: 100%;
    font-weight: 700;
    background: #11baf0;
    color: white;
    padding: 15px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    transition: 0.4s; /* transition-smooth */
    margin-top: 10px;
    font-size: 1rem;
}

.sci-submit-btn:hover {
    background: #0ea5d6;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(17, 186, 240, 0.3);
}

.sci-social-section { margin-top: 25px; }
.sci-social-title { font-size: 0.813rem; color: #9ca3af; display: block; margin-bottom: 10px; }
.sci-social-btn {
    background: #fff;
    border: 1px solid #d1d5db;
    border-radius: 50%;
    width: 45px;
    height: 45px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: 0.2s;
}
.sci-social-btn:hover { background: #f3f4f6; }
.sci-svg { fill: #111827; }

.sci-footer {
    margin-top: 20px;
    font-size: 0.938rem;
    color: #6b7280;
}
.sci-footer a {
    color: #11baf0;
    text-decoration: none;
    font-weight: 700;
}
</style>