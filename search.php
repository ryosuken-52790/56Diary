<?php

    require_once('function.php');
    require_once('dbconnect.php');

    $nickname = '';
    if (isset($_GET['nickname'])) {
        $nickname = $_GET['nickname'];
    }


    // SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname like ?');
    $stmt->execute(["%$nickname%"]);
    $results = $stmt->fetchALL();
    var_dump($results);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nickname">
        <button>検索</button>
        <!-- 送信ボタンとして使いたくなかったらtype="button"にしておく。 -->
        <!-- <input type="submit" value="検索"> -->
    </form>

    <a href="http://localhost/php_contact_form/search.php?nickname=aa">aaaa</a>


    <!-- //画面に表示する -->
    <!-- <?php foreach ($results as $result): ?>
        <p><?php echo h($result['nickname']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['content']); ?></p>
    <?php endforeach; ?> -->
</body>
</html>