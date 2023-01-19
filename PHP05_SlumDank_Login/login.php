<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="Style.css" />
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
        body {
            background-image: url(image/oen_images.jpeg);
            background-repeat: repeat-x;
            background-size:contain;
            background-position: 1000px 500px ;

        }
    </style>
    <title>ログイン</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">LOGIN</nav>
    </header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="newuser.php">新規ユーザー登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>


</body>

</html>
