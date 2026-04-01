<div class="hero" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; border-radius: 0;">
    <div class="container">
        <div class="heading">🔑 تسجيل دخول الأبطال</div>
        
        <form action="login_action.php" method="POST" class="form">
          <input required="" class="input" type="email" name="email" id="email" placeholder="البريد الإلكتروني">
          <input required="" class="input" type="password" name="password" id="password" placeholder="كلمة المرور">          
          <input class="login-button" type="submit" name="login" value="دخول">
        </form>

        <div class="social-account-container">
            <span class="title">أو تسجيل الدخول بواسطة</span>
            <div class="social-accounts">
              <button class="social-button google">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                  <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                </svg>
              </button>
              <button class="social-button apple">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                  <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                </svg>
              </button>
            </div>
        </div>

        <span class="agreement">
            <p style="font-size: 13px; color: #666;">ليس لديك حساب؟ <a href="signup.php" style="color: #0099ff; font-weight: bold; text-decoration: none;">اضغط هنا للاشتراك</a></p>
        </span>
    </div>
</div>
<style>
    /* From Uiverse.io by Smit-Prajapati */ 
.container {
  max-width: 400px; /* كبّرته شوية عشان الحقول العربية */
  background: #F8F9FD;
  background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
  border-radius: 40px;
  padding: 25px 35px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
  margin: 20px auto;
  direction: rtl; /* لضبط الاتجاه للعربية */
}

.heading {
  text-align: center;
  font-weight: 900;
  font-size: 26px; /* صغرت الخط قليلاً ليناسب العناوين الطويلة */
  color: rgb(16, 137, 211);
}

.form {
  margin-top: 20px;
}

.form .input {
  width: 100%;
  background: white;
  border: none;
  padding: 15px 20px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
  box-sizing: border-box; /* عشان الـ padding ما يخرجش بره العرض */
  text-align: right;
}

.form .input::placeholder {
  color: rgb(170, 170, 170);
}

.form .input:focus {
  outline: none;
  border-inline: 2px solid #12B1D1;
}

.form .login-button {
  display: block;
  width: 100%;
  font-weight: bold;
  background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
  color: white;
  padding-block: 15px;
  margin: 20px auto;
  border-radius: 20px;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
  border: none;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

.form .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}

.social-account-container {
  margin-top: 25px;
}

.social-account-container .title {
  display: block;
  text-align: center;
  font-size: 12px;
  color: rgb(170, 170, 170);
}

.social-account-container .social-accounts {
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 5px;
}

.social-account-container .social-accounts .social-button {
  background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
  border: 5px solid white;
  padding: 5px;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: grid;
  place-content: center;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

.social-account-container .social-accounts .social-button .svg {
  fill: white;
}

.agreement {
  display: block;
  text-align: center;
  margin-top: 15px;
}
</style>