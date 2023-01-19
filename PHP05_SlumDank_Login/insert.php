<?php
//1. POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$sensyu = $_POST['sensyu'];
$school = $_POST['school'];
$word = $_POST['word'];
$content = $_POST['content']; //追加されています
$img = $_POST['img'];

// if ($_FILES['img']['name'] !== "") {
//     $file_name = $_SESSION['post']['file_name'] = $_FILES['img']['name'];
//     $image_data = $_SESSION['post']['image_data'] = file_get_contents($_FILES['img']['tmp_name']);
//     $image_type = $_SESSION['post']['image_type'] = exif_imagetype($_FILES['img']['tmp_name']);
// } else {
//     $file_name = $_SESSION['post']['file_name'] = '';
//     $image_data = $_SESSION['post']['image_data'] = '';
//     $image_type = $_SESSION['post']['image_type'] = '';
// }

if (isset($_FILES['img']['name'])) {
    $fileName = $_FILES['img']['name'];
    $img = date('YmdHis') . '_' . $_FILES['img']['name'];
}

if (isset($_FILES['img']['name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], '../images/' . $img);
}

// if ($_FILES['img']['name'] !== "") {
//     $file_name = $_SESSION['post']['file_name'] = $_FILES['img']['name'];
//     $image_data = $_SESSION['post']['image_data'] = file_get_contents($_FILES['img']['tmp_name']);
//     $image_type = $_SESSION['post']['image_type'] = exif_imagetype($_FILES['img']['tmp_name']);
// } else {
//     $file_name = $_SESSION['post']['file_name'] = '';
//     $image_data = $_SESSION['post']['image_data'] = '';
//     $image_type = $_SESSION['post']['image_type'] = '';
// }

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
                        az_slam_sensyu(id, name, email, sensyu, school, word, content,img,date)
                        VALUES(NULL, :name, :email, :sensyu, :school, :word, :content,:img, sysdate() );');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':sensyu', $sensyu, PDO::PARAM_STR);
$stmt->bindValue(':school', $school, PDO::PARAM_STR);
$stmt->bindValue(':word', $word, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':img', $content, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}
