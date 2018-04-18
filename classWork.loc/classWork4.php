<?php require_once "function.php"; ?>
<?php calc() ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Calc</title>
</head>
<body>

<form action="" method="post">
    <p><b>Castom calc</b></p>
    <p><input type="number" name="val1" value="<?php echo isset($_POST['val1'])? $_POST['val1'] : '';?>"><Br></p>
    <p><input type="radio" name="operand" value="*">*<Br>
        <input type="radio" name="operand" value="/">/<Br>
        <input type="radio" name="operand" value="+">+<Br>
        <input type="radio" name="operand" value="-">-</p>
    <p><input type="number" name="val2" value="<?php echo isset($_POST['val2'])? $_POST['val2'] : '';?>"><Br></p>
    <p><input type="submit"></p>
</form>
<p>Result : <?= calc() ?></p>
</body>
</html>