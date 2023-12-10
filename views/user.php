<?php 
require_once __DIR__.'/_header.php';
require_once __DIR__.'/../_.php';
$db = _db();
// $q = $db->prepare("SELECT * FROM users WHERE user_id = :user_id");
$q = $db->prepare("CALL user_info(:user_id)");
$q->bindValue(':user_id', $_GET['user_id']); 
$q->execute();
$user = $q->fetch();

if(!$user){
    header('Location: /users');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>Name: <?= $user['user_name'] ?></p>
    <p>Last name: <?= $user['user_last_name'] ?></p>
    <p>Email: <?= $user['user_email'] ?></p>
    <p>Address: <?= $user['user_address'] ?></p>
</body>
</html>

<?php require_once __DIR__.'/_footer.php'  ?>