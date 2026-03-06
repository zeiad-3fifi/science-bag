const toggleBtn = document.getElementById('darkModeToggle');
const body = document.body;

// 1. التأكد من حالة الوضع الليلي المحفوظة عند تحميل الصفحة
if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    toggleBtn.innerText = '☀️'; // تغيير الأيقونة لشمس
}
window.addEventListener('load', () => {
    // كود الترحيب بالاسم
    let savedName = localStorage.getItem('studentName');
    const nameDisplay = document.getElementById('userNameDisplay');

    if (!savedName) {
        // لو مفيش اسم، نطلبه منه بشكل لطيف
        setTimeout(() => {
            let name = prompt("مرحباً بك في الحقيبة التعليمية! ما هو اسمك يا بطل؟");
            if (name) {
                localStorage.setItem('studentName', name);
                if(nameDisplay) nameDisplay.innerText = name;
            }
        }, 1000);
    } else {
        if(nameDisplay) nameDisplay.innerText = savedName;
    }
});
// 2. وظيفة الزرار عند الضغط
toggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        toggleBtn.innerText = '☀️';
    } else {
        localStorage.setItem('theme', 'light');
        toggleBtn.innerText = '🌙';
    }
});
window.addEventListener('load', () => {
    // تحديث نسبة التقدم في لوحة التحكم
    const completed = parseInt(localStorage.getItem('quizCompleted') || 0);
    const progressPercent = Math.round((completed / 6) * 100);
    
    const progressFill = document.getElementById('overallProgress');
    if(progressFill) {
        progressFill.style.width = progressPercent + '%';
        progressFill.innerText = progressPercent + '%';
    }

    // ممكن مستقبلاً نضيف كود يطلب اسم الطالب لو مش موجود
    const nameDisplay = document.getElementById('userNameDisplay');
    const savedName = localStorage.getItem('studentName');
    if(savedName && nameDisplay) {
        nameDisplay.innerText = savedName;
    }
});