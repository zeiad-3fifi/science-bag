const toggleBtn = document.getElementById('darkModeToggle');
const body = document.body;

// 1. التأكد من حالة الوضع الليلي المحفوظة عند تحميل الصفحة
if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    toggleBtn.innerText = '☀️'; // تغيير الأيقونة لشمس
}

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