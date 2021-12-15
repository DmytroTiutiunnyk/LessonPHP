    <html>
<head>
    <title>Інніціали</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     ім'я <input type="text" name='first_name'><br>
     прізвище: <input type="text" name='sur_name'><br>
     по-батькові: <input type="text" name='last_name'><br>
    <input type="submit">
</form>
<?php
$first_name = trim($_POST['first_name']);
$sur_name = trim($_POST['sur_name']);
$last_name = trim($_POST['last_name']);

$initials =  mb_strtoupper(mb_substr($first_name, 0, 1)) .  mb_strtoupper(mb_substr($sur_name, 0, 1)) .
         mb_strtoupper(mb_substr($last_name, 0, 1)); {

echo "Привіт, $initials!<br>";
         }
?>
</body>
</html>
