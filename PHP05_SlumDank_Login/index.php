<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Data Registration</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        div {
            padding: 10px;
            font-size: 20px;
            font-color: white; 
        }

        body {
            background-image: url(image/shohoku_images.jpeg);
            backgroung-repeat: no-repeat;
            background-size: contain;

        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">Data List</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">Login</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">Logout</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron" style="color:red; background-color:white;width:30%;">
            <fieldset>
            <legend>好きな登場キャラとセリフ登録</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>
                <label>キャラ名：<input type="text" name="sensyu"></label><br>
                <label>キャラ高校名：<input type="text" name="school"></label><br>
                <label>好きなセリフ：<input type="text" name="word"></label><br>
                <label>その他コメント<textArea name="content" rows="4" cols="40"></textArea></label><br>
                <label for="title" class="form-label">画像</label><input type="file" name="img"><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>
