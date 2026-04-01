<?php
session_start(); // لازم نبدأ الجلسة عشان نعرف نقفلها
session_unset(); // بيمسح كل المتغيرات اللي متخزنة (زي الاسم والـ id)
session_destroy(); // بيدمر الجلسة تماماً

// تحويل الطالب لصفحة تسجيل الدخول فوراً
header("Location: login.php");
exit();
?>