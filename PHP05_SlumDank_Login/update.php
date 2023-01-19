<?php
session_start();
require_once('funcs.php');
loginCheck();

//1. POSTデータ取得
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$sensyu = $_POST['sensyu'];
$school = $_POST['school'];
$word = $_POST['word'];
$content = $_POST['content'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE az_slam_sensyu SET name=:name,email=:email,sensyu = :sensyu,school = :school, word = :word,content = :content WHERE id=:id;');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':sensyu', $sensyu, PDO::PARAM_STR);
$stmt->bindValue(':school', $school, PDO::PARAM_STR);
$stmt->bindValue(':word', $word, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}
