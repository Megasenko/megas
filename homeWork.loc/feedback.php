<?php
session_start();
if (isset($_POST["send"])) {
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST["to"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";
    $error = false;
    if ($from == "" || !preg_match("/@/", $from)) {
        $error_from = "Введите корректный email";
        $error = true;
    }
    if ($from == "" || !preg_match("/@/", $to)) {
        $error_to = "Введите корректный email";
        $error = true;
    }
    if (strlen($subject) == 0) {
        $error_subject = "Введите тему сообщения";
        $error = true;
    }
    if (strlen($message) == 0) {
        $error_message = "Введите тему сообщения";
        $error = true;
    }


}
if($error==false){
    echo "<pre>";
   print_r( $_SESSION);
   echo "</pre>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
</head>
<body>
<h2>Форма обратной связи</h2>
<form name="feedback" action="" method="post">
    <label>От кого: </label><br/>
    <label>
        <input type="text" name="from" value="<?= $_SESSION["from"] ?>"/>
        <span style="color: red"><?= $error_from ?></span>
        <br/>
    </label><br/>
    <label>Кому: </label><br/>
    <label>
        <input type="text" name="to" value="<?= $_SESSION["to"] ?>"/>
        <span style="color: red"><?= $error_to ?></span>
        <br/>
    </label><br/>
    <label>Тема: </label><br/>
    <label>
        <input type="text" name="subject" value="<?= $_SESSION["subject"] ?>"/>
        <span style="color: red"><?= $error_subject ?></span>
        <br/>
    </label><br/>
    <label>Сообщение: </label><br/>
    <label>
        <textarea name="message" cols="30" rows="10"><?= $_SESSION["message"] ?></textarea>
        <span style="color: red"><?= $error_message ?></span>
    </label><br/>
    <input type="submit" name="send" value="Отправить"/>
<!--    --><?php //echo '<pre>';
//    print_r($_POST);?>
</form>
</body>
</html>

