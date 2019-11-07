
<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Location: index.html');
}

$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

require_once('function.php');
// これを入れてあげる事で、エスケープを働かせてあげる様にする。
require_once('dbconnect.php');


// My SQL
$stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
$stmt->execute([$nickname, $email, $content]);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>送信完了</title>
  <meta charset="UTF-8">
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
</head>
<body>
    <h1>お問い合わせありがとうございました。</h1>
    <p><?php echo $nickname; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $content; ?></p>
</body>
</html>