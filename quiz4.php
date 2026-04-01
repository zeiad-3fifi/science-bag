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
    <title>اختبار الجهاز الهضمي | الحقيبة التعليمية</title>
    <link rel="stylesheet" href="style.css">
    <style>
        :root { --primary: #e67e22; --success: #27ae60; --danger: #e74c3c; --bg: #fffaf5; }
        body { background-color: var(--bg); font-family: 'Tajawal', sans-serif; }
        .quiz-container { max-width: 800px; margin: 30px auto; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .q-section { margin-bottom: 25px; padding: 20px; border-right: 6px solid var(--primary); background: #fefefe; border-radius: 10px; }
        .q-text { font-size: 1.1rem; font-weight: bold; color: #333; margin-bottom: 15px; display: block; }
        .options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .opt-card { background: #fff; border: 2px solid #ddd; padding: 12px; border-radius: 10px; cursor: pointer; text-align: center; transition: 0.3s; font-weight: 600; }
        input[type="radio"] { display: none; }
        input[type="radio"]:checked + label { background: var(--primary); color: white; border-color: var(--primary); transform: translateY(-2px); }
        .btn-submit { width: 100%; padding: 18px; background: var(--success); color: white; border: none; border-radius: 12px; font-size: 1.2rem; font-weight: bold; cursor: pointer; margin-top: 20px; }
        #timer-box { position: sticky; top: 10px; z-index: 100; background: white; padding: 8px 20px; border-radius: 50px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: fit-content; margin: 0 auto 20px; border: 2px solid var(--primary); font-weight: bold; }
        #result-box { display: none; text-align: center; padding: 40px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="quiz-container" id="quiz-ui">
            <div id="timer-box">⏱️ الوقت المتبقي: <span id="time-left">05:00</span></div>
            <h2 style="text-align: center; color: var(--primary);">🍔 اختبار الدرس الرابع: الجهاز الهضمي</h2>
            
            <form id="qForm">
                <h4 style="color: var(--primary); margin-bottom: 20px;">أولاً: اختر الإجابة الصحيحة</h4>

                <div class="q-section">
                    <span class="q-text">1. تبدأ عملية الهضم في:</span>
                    <div class="options-grid">
                        <input type="radio" name="q1" id="q1a" value="1"><label class="opt-card" for="q1a">الفم</label>
                        <input type="radio" name="q1" id="q1b" value="0"><label class="opt-card" for="q1b">المعدة</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">2. الأنبوب الذي ينقل الطعام من البلعوم إلى المعدة:</span>
                    <div class="options-grid">
                        <input type="radio" name="q2" id="q2a" value="1"><label class="opt-card" for="q2a">المريء</label>
                        <input type="radio" name="q2" id="q2b" value="0"><label class="opt-card" for="q2b">القصبة الهوائية</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">3. يتم امتصاص العناصر الغذائية ووصولها للدم في:</span>
                    <div class="options-grid">
                        <input type="radio" name="q3" id="q3a" value="1"><label class="opt-card" for="q3a">الأمعاء الدقيقة</label>
                        <input type="radio" name="q3" id="q3b" value="0"><label class="opt-card" for="q3b">الأمعاء الغليظة</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">4. العضو المسؤول عن إفراز العصارة الصفراوية لهضم الدهون:</span>
                    <div class="options-grid">
                        <input type="radio" name="q4" id="q4a" value="1"><label class="opt-card" for="q4a">الكبد</label>
                        <input type="radio" name="q4" id="q4b" value="0"><label class="opt-card" for="q4b">الرئة</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">5. وظيفة الأمعاء الغليظة هي امتصاص:</span>
                    <div class="options-grid">
                        <input type="radio" name="q5" id="q5a" value="1"><label class="opt-card" for="q5a">الماء من الفضلات</label>
                        <input type="radio" name="q5" id="q5b" value="0"><label class="opt-card" for="q5b">الأكسجين</label>
                    </div>
                </div>

                <h4 style="color: #d35400; margin: 30px 0 20px;">ثانياً: ضع علامة صح أو خطأ</h4>

                <div class="q-section">
                    <span class="q-text">6. اللعاب يساعد في ترطيب الطعام وهضم النشويات مبدئياً.</span>
                    <div class="options-grid">
                        <input type="radio" name="q6" id="q6t" value="1"><label class="opt-card" for="q6t">✅ صح</label>
                        <input type="radio" name="q6" id="q6f" value="0"><label class="opt-card" for="q6f">❌ خطأ</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">7. المعدة هي كيس عضلي يقوم بخلط الطعام بالعصارات الهاضمة.</span>
                    <div class="options-grid">
                        <input type="radio" name="q7" id="q7t" value="1"><label class="opt-card" for="q7t">✅ صح</label>
                        <input type="radio" name="q7" id="q7f" value="0"><label class="opt-card" for="q7f">❌ خطأ</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">8. الأسنان ليس لها دور في عملية الهضم.</span>
                    <div class="options-grid">
                        <input type="radio" name="q8" id="q8t" value="0"><label class="opt-card" for="q8t">✅ صح</label>
                        <input type="radio" name="q8" id="q8f" value="1"><label class="opt-card" for="q8f">❌ خطأ</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">9. عملية الهضم تحول الطعام المعقد إلى مواد بسيطة يستفيد منها الجسم.</span>
                    <div class="options-grid">
                        <input type="radio" name="q9" id="q9t" value="1"><label class="opt-card" for="q9t">✅ صح</label>
                        <input type="radio" name="q9" id="q9f" value="0"><label class="opt-card" for="q9f">❌ خطأ</label>
                    </div>
                </div>

                <div class="q-section">
                    <span class="q-text">10. الطعام يمر من البلعوم إلى الحنجرة ثم إلى المعدة.</span>
                    <div class="options-grid">
                        <input type="radio" name="q10" id="q10t" value="0"><label class="opt-card" for="q10t">✅ صح</label>
                        <input type="radio" name="q10" id="q10f" value="1"><label class="opt-card" for="q10f">❌ خطأ</label>
                    </div>
                </div>

                <button type="button" onclick="calculateResult(4)" class="btn-submit">عرض النتيجة وحفظ التقدم 🍎</button>
            </form>
        </div>

        <div id="result-box" class="quiz-container">
            <h1 id="score-text"></h1>
            <p id="feedback" style="font-size: 1.2rem; margin: 20px 0;"></p>
            <div style="display: flex; gap: 10px;">
                <a href="leaderboard.php" class="btn-submit" style="text-decoration: none; background: #f39c12;">🏆 لوحة الشرف</a>
                <a href="index.php" class="btn-submit" style="text-decoration: none;">🏠 الرئيسية</a>
            </div>
        </div>
    </div>

    <script>
        let timeLeft = 300;
        const timerDisplay = document.getElementById('time-left');

        const timer = setInterval(() => {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timerDisplay.innerHTML = `${minutes}:${seconds}`;
            if (timeLeft <= 0) {
                clearInterval(timer);
                calculateResult(4);
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
                document.getElementById('score-text').innerText = `درجتك: ${score} من 10`;
                const fb = document.getElementById('feedback');
                if(score >= 7) {
                    fb.innerText = "أحسنت! جهازك الهضمي يعمل بكفاءة عالية 🎉";
                    fb.style.color = "var(--success)";
                } else {
                    fb.innerText = "حاول مراجعة رحلة الطعام داخل الجسم وأعد الاختبار! 💪";
                    fb.style.color = "var(--danger)";
                }
            });
        }
    </script>
</body>
</html>