<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>一言</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="sousin">
<?php

try {
$pdo = new PDO('mysql:dbname=git-test;host=127.0.0.1', 'root', 'aoikokoro');

$stmt = $pdo->query('SET NAMES utf8');

$name    = $_REQUEST['name'];
$address = $_REQUEST['address'];
$message = $_REQUEST['message'];
$created = date('Y-m-d H:i:s');
$subject = $_REQUEST['subject'];

$stmt = $pdo->query("INSERT INTO comments(name, address, message, created,db_subject) VALUES('$name', '$address', '$message', '$created','$subject')");


$pdo = null;

} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

?>
    <h1>メッセージの投稿ありがとうございました！</h1>
    
    <h2><a href="index.php">一覧へ戻る</a></h2>
    
</div>

</body>
</html>