<?php
$id = $_GET['id']; //?id~**を受け取る
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM az_slam_sensyu WHERE id=:id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ更新</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        div {
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>[編集]</legend>
                <label>名前：<input type="text" name="name" value="<?= $row['name']?>"></label><br>
                <label>Email：<input type="text" name="email" value="<?= $row['email']?>"></label><br>
                <label>選手名：<input type="text" name="sensyu" value="<?= $row['sensyu']?>"></label><br>
                <label>学校名：<input type="text" name="school" value="<?= $row['school']?>"></label><br>
                <label>セリフ：<input type="text" name="word" value="<?= $row['word']?>"></label><br>
                <label><textarea name="content" rows="4" cols="40"><?= $row['content']?></textarea></label><br>
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="submit" value="修正">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
