// وظيفة تبديل الثيم
function toggleTheme() {
    const body = document.body;
    const checkbox = document.getElementById('darkModeToggle');
    
    if (checkbox.checked) {
        body.setAttribute('data-theme', 'dark');
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        body.removeAttribute('data-theme');
        body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
    }
}

// تنفيذ الثيم المحفوظ أول ما الصفحة تفتح
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');
    const checkbox = document.getElementById('darkModeToggle');
    const body = document.body;

    if (savedTheme === 'dark') {
        body.setAttribute('data-theme', 'dark');
        body.classList.add('dark-mode');
        if (checkbox) checkbox.checked = true;
    } else {
        body.removeAttribute('data-theme');
        body.classList.remove('dark-mode');
        if (checkbox) checkbox.checked = false;
    }
});