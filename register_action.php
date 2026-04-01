<?php
include('db_connect.php');

if (isset($_POST['signup'])) {
    // تنظيف البيانات لمنع المشاكل
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 

    // --- الخطوة الجديدة: التأكد من وجود الإيميل ---
    $check_email = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($result) > 0) {
        // لو الإيميل موجود، هنطلع رسالة ونوقفه هنا
        echo "<script>alert('الايميل موجود بالفعل حاول بحساب اخر'); window.history.back();</script>";
    } else {
        // --- لو مش موجود، كمل كودك القديم زي ما هو ---
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('يا بطل، تم إنشاء حسابك بنجاح!'); window.location.href='login.php';</script>";
        } else {
            echo "فيه مشكلة حصلت: " . mysqli_error($conn);
        }
    }
}
?>