<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <div class="error">
                    <p>メールアドレスまたはパスワードが間違っています。</p>
                </div>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['mail']?>" name="mail">
                </div>

                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" <?php echo $_SESSION['password']; ?> name="password">
                </div>

                <div class="checkbutton">
                    <p><input type="checkbox">ログイン情報を保持する</p>
                </div>

                <div class="loginbutton">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </main>

    <footer>
        ©︎ 2018 InterNous.inc. All rights reserved
    </footer>

</body>

</html>
