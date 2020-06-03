<?php
mb_check_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>
    <!--このなかにマイページとして表示する部分を記述していく(HTMLとPOSTで記述)-->
    <header>
        <img src="4eachblog_logo.jpg">
    </header>
    <div class="form_contents">
        <h2>会員登録 確認</h2>
        <p>こちらの内容で登録しても宜しいでしょうか？</p>
        <div class="name">
            <label>氏名:</label>
            <?php echo $_POST['name'];?>
        </div>
        <div class="mail">
            <label>メール:</label>
            <?php echo $_POST['mail'];?>
        </div>
        <div class="password">
            <label>パスワード:</label>
            <?php echo $_POST['password'];?>
        </div>
        <div class="picture">
            <label>プロフィール写真:</label>
            <?php echo $_FILES['picture']['name'];?>
        </div>
        <div class="comments">
            <label>コメント:</label>
            <?php echo $_POST['comments'];?>
        </div>

       <div class="button">
        <form action="register.php">
            <input type="submit" class="button1" value="戻って修正する" />
        </form>

        <form action="register_insert.php" method="post">
            <input type="submit" class="button2" value="登録する" />
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
            <input type="hidden" value="<?php echo $path_filename;?>" name="path_filename">
            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
        </div>
        
    </div>


    <footer>
        ©︎ 2018 InterNous.inc. All rights reserved
    </footer>
    
</body>

</html>
