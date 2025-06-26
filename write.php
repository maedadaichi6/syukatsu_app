<?php
$name = $_POST['name'];
$email = $_POST['email'];
$questions = isset($_POST['questions']) ? implode(" / ", $_POST['questions']) : '';
$other = $_POST['other'];

$file = fopen("data.csv", "a");
fputcsv($file, [$name, $email, $questions, $other]);
fclose($file);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>送信完了</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>ご協力ありがとうございました！</h2>
  <div style="text-align: center;">
    <a href="read.php">結果を見る</a>
  </div>
</body>
</html>
