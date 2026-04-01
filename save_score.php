<?php
session_start();
include('db_connect.php');

// التأكد إن الطالب مسجل دخول
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $quiz_id = mysqli_real_escape_string($conn, $_POST['quiz_id']);
    $score = mysqli_real_escape_string($conn, $_POST['score']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);

    // تحديث الدرجة لو الطالب امتحن قبل كدا، أو إضافة درجة جديدة
    $check_query = "SELECT id FROM user_scores WHERE user_id = '$user_id' AND quiz_id = '$quiz_id'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // لو الطالب جاب درجة أعلى من القديمة، نحدثها
        $update_query = "UPDATE user_scores SET score = '$score' WHERE user_id = '$user_id' AND quiz_id = '$quiz_id' AND score < '$score'";
        mysqli_query($conn, $update_query);
    } else {
        // إضافة أول محاولة
        $insert_query = "INSERT INTO user_scores (user_id, quiz_id, score, total_questions) VALUES ('$user_id', '$quiz_id', '$score', '$total')";
        mysqli_query($conn, $insert_query);
    }
    
    echo "Success";
}
?>