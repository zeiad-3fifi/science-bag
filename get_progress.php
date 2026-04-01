<?php
session_start();
include('db_connect.php');

header('Content-Type: application/json');

// التأكد إن المستخدم مسجل دخول
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['completed_count' => 0]);
    exit();
}

$user_id = $_SESSION['user_id'];

// حساب عدد الاختبارات اللي نجح فيها (أكبر من أو يساوي درجة النجاح)
// 7 من 10 للاختبارات العادية و 15 من 20 للنهائي
$query = "SELECT COUNT(*) as completed FROM user_scores 
          WHERE user_id = '$user_id' 
          AND ((quiz_id <= 5 AND score >= 7) OR (quiz_id = 6 AND score >= 15))";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

echo json_encode(['completed_count' => $row['completed']]);
?>