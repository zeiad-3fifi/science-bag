<?php
session_start();
include('db_connect.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاختبار الشامل | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css">
    <style>
        :root { --primary: #8e44ad; --success: #27ae60; --danger: #e74c3c; --bg: #f5f0f9; }
        body { background-color: var(--bg); font-family: 'Tajawal', sans-serif; }
        .quiz-container { max-width: 850px; margin: 30px auto; background: white; padding: 30px; border-radius: 25px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border: 2px solid var(--primary); }
        .q-section { margin-bottom: 25px; padding: 20px; border-right: 6px solid var(--primary); background: #fbfaff; border-radius: 12px; }
        .q-text { font-size: 1.1rem; font-weight: bold; color: #333; margin-bottom: 15px; display: block; }
        .options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .opt-card { background: #fff; border: 2px solid #ddd; padding: 12px; border-radius: 10px; cursor: pointer; text-align: center; transition: 0.3s; font-weight: 600; }
        input[type="radio"] { display: none; }
        input[type="radio"]:checked + label { background: var(--primary); color: white; border-color: var(--primary); transform: scale(1.02); }
        .btn-submit { width: 100%; padding: 20px; background: var(--primary); color: white; border: none; border-radius: 15px; font-size: 1.3rem; font-weight: bold; cursor: pointer; margin-top: 20px; box-shadow: 0 5px 15px rgba(142, 68, 173, 0.3); }
        #timer-box { position: sticky; top: 10px; z-index: 100; background: white; padding: 10px 25px; border-radius: 50px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: fit-content; margin: 0 auto 20px; border: 3px solid var(--primary); font-size: 1.2rem; }
        #result-box { display: none; text-align: center; padding: 50px; }
        .badge { width: 150px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="quiz-container" id="quiz-ui">
            <div id="timer-box">⏳ الوقت المتبقي: <span id="time-left" style="color: var(--danger);">07:00</span></div>
            <h1 style="text-align: center; color: var(--primary); margin-bottom: 10px;">🏆 الاختبار النهائي الشامل</h1>
            <p style="text-align: center; color: #666; margin-bottom: 30px;">أثبت أنك بطل حقيقي واجمع كل الأوسمة!</p>
            
            <form id="qForm">
                <div class="q-section">
                    <span class="q-text">1. أين تحدث عملية تبادل الغازات (الأكسجين وثاني أكسيد الكربون)؟</span>
                    <div class="options-grid">
                        <input type="radio" name="q1" id="q1a" value="1"><label class="opt-card" for="q1a">الحويصلات الهوائية</label>
                        <input type="radio" name="q1" id="q1b" value="0"><label class="opt-card" for="q1b">المعدة</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">2. ما هي الأوعية الدموية التي تحمل الدم "من الجسم إلى القلب"؟</span>
                    <div class="options-grid">
                        <input type="radio" name="q2" id="q2a" value="1"><label class="opt-card" for="q2a">الأوردة</label>
                        <input type="radio" name="q2" id="q2b" value="0"><label class="opt-card" for="q2b">الشرايين</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">3. أي مكون من مكونات الدم مسؤول عن "تكوين الجلطة" لوقف النزيف؟</span>
                    <div class="options-grid">
                        <input type="radio" name="q3" id="q3a" value="1"><label class="opt-card" for="q3a">الصفائح الدموية</label>
                        <input type="radio" name="q3" id="q3b" value="0"><label class="opt-card" for="q3b">خلايا الدم البيضاء</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">4. ما المادة التي تعطي الدم اللون الأحمر وتنقل الأكسجين؟</span>
                    <div class="options-grid">
                        <input type="radio" name="q4" id="q4a" value="1"><label class="opt-card" for="q4a">الهيموجلوبين</label>
                        <input type="radio" name="q4" id="q4b" value="0"><label class="opt-card" for="q4b">البلازما</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">5. العضو المسؤول عن امتصاص "معظم العناصر الغذائية" هو:</span>
                    <div class="options-grid">
                        <input type="radio" name="q5" id="q5a" value="1"><label class="opt-card" for="q5a">الأمعاء الدقيقة</label>
                        <input type="radio" name="q5" id="q5b" value="0"><label class="opt-card" for="q5b">الأمعاء الغليظة</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">6. تفرز العصارة الصفراوية لهضم الدهون بواسطة عضو:</span>
                    <div class="options-grid">
                        <input type="radio" name="q6" id="q6a" value="1"><label class="opt-card" for="q6a">الكبد</label>
                        <input type="radio" name="q6" id="q6b" value="0"><label class="opt-card" for="q6b">القلب</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">7. أي من الآتي يعتبر من "الكربوهيدرات" التي تمدنا بالطاقة؟</span>
                    <div class="options-grid">
                        <input type="radio" name="q7" id="q7a" value="1"><label class="opt-card" for="q7a">الأرز والمكرونة</label>
                        <input type="radio" name="q7" id="q7b" value="0"><label class="opt-card" for="q7b">اللحوم والبيض</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">8. وظيفة البروتينات في جسم الإنسان هي:</span>
                    <div class="options-grid">
                        <input type="radio" name="q8" id="q8a" value="1"><label class="opt-card" for="q8a">بناء العضلات وتعويض التالف</label>
                        <input type="radio" name="q8" id="q8b" value="0"><label class="opt-card" for="q8b">تسوس الأسنان</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">9. القلب يضخ الدم لجميع أجزاء الجسم باستمرار ولا يتوقف.</span>
                    <div class="options-grid">
                        <input type="radio" name="q9" id="q9t" value="1"><label class="opt-card" for="q9t">✅ صح</label>
                        <input type="radio" name="q9" id="q9f" value="0"><label class="opt-card" for="q9f">❌ خطأ</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">10. شرب الماء بكثرة يضر الجهاز الهضمي والتنفسي.</span>
                    <div class="options-grid">
                        <input type="radio" name="q10" id="q10t" value="0"><label class="opt-card" for="q10t">✅ صح</label>
                        <input type="radio" name="q10" id="q10f" value="1"><label class="opt-card" for="q10f">❌ خطأ</label>
                    </div>
                </div>

                <button type="button" onclick="calculateResult(100)" class="btn-submit">إرسال الاختبار النهائي 🎓</button>
            </form>
        </div>

        <div id="result-box" class="quiz-container">
            <div id="badge-display"></div>
            <h1 id="score-text"></h1>
            <p id="feedback" style="font-size: 1.3rem; margin: 20px 0;"></p>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="leaderboard.php" class="btn-submit" style="text-decoration: none; background: #f39c12; flex: 1;">🏆 لوحة الشرف</a>
                <a href="index.php" class="btn-submit" style="text-decoration: none; flex: 1;">🏠 الرئيسية</a>
            </div>
        </div>
    </div>

    <script>
        let timeLeft = 420; // 7 دقائق
        const timerDisplay = document.getElementById('time-left');

        const timer = setInterval(() => {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timerDisplay.innerHTML = `${minutes}:${seconds}`;
            if (timeLeft <= 0) {
                clearInterval(timer);
                calculateResult(100);
            }
            timeLeft--;
        }, 1000);

        function calculateResult(quizID) {
            clearInterval(timer);
            let score = 0;
            const data = new FormData(document.getElementById('qForm'));
            for (let v of data.values()) { score += parseInt(v); }

            fetch('save_score.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `quiz_id=${quizID}&score=${score}`
            })
            .then(() => {
                document.getElementById('quiz-ui').style.display = 'none';
                document.getElementById('result-box').style.display = 'block';
                document.getElementById('score-text').innerText = `درجتك النهائية: ${score} من 10`;
                
                const fb = document.getElementById('feedback');
                const badge = document.getElementById('badge-display');
                
                if(score === 10) {
                    badge.innerHTML = '<img src="https://cdn-icons-png.flaticon.com/512/610/610333.png" class="badge"><h3>وسام العبقري الخارق! 🌟</h3>';
                    fb.innerText = "مذهل! لقد أجبت على جميع الأسئلة بشكل صحيح. أنت فخر للحقيبة التعليمية!";
                } else if(score >= 7) {
                    badge.innerHTML = '<img src="https://cdn-icons-png.flaticon.com/512/3112/3112946.png" class="badge"><h3>وسام التميز! 🎖️</h3>';
                    fb.innerText = "أداء رائع جداً! لقد أثبت أنك بطل مجتهد في العلوم.";
                } else {
                    badge.innerHTML = '<h3>استمر في المحاولة! 💪</h3>';
                    fb.innerText = "درجة جيدة، لكننا نعرف أنك تستطيع الحصول على الوسام. راجع الدروس وحاول مرة أخرى!";
                }
            });
        }
    </script>
</body>
</html>