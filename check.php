<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Location: index.html');
}



$nickname = $_POST['nickname'];
echo $nickname;
// var_dump($nickname);
$email = $_POST['email'];
echo $email;

$content = $_POST['content'];
echo $content;


// var_dump($_POST);




if ($nickname == '') {
    $nickname_result = 'ニックネームが入力されていません。';
} else {
    $nickname_result = 'ようこそ' . $nickname
. '様';
}

if ($email == '') {
    $email_result = 'メールアドレスが入力されていません。';
} else {
    $email_result = 'メールアドレス:' . $email;
}
if ($content == '') {
  $content_result =  'お問い合わせ内容が入力されていません。';
} else {
  $content_result = 'お問い合わせ内容：' . $content;
}



require_once ('function.php');
// require_once 'function.php';


// 出ないよ？
// なんで色変わらないの？

?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>

    <p><?php echo htmlspecialchars($nickname_result, ENT_QUOTES, 'UTF-8'); ?></p>
    <!-- 送られてきたデータを同じ UTF-8 に合わせる必要がある。 -->


    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>
    <form method = "POST" action = "thanks.php">

        <button type="button" onclick="history.back()">戻る</button>

      <input type="hidden" name ="nickname" value ="<?php echo $nickname; ?>">
      <input type="hidden" name ="email" value ="<?php echo $email; ?>">
      <input type="hidden" name ="content" value ="<?php echo $content; ?>">
      <!-- inputタグって、何を意味するんだっけ。 -->




      <!-- コロン構文
        この場合、formの中に
        if文を作成する。 -->

    <?php if ($nickname != '' && $email != '' && $content != ''): ?>
        <button type="submit">OK</button>
    <?php endif; ?>


    </form>

</body>
</html>