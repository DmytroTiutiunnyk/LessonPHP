    <html>
<head>
    <title>Перевірка пошти</title>
    <meta charset="UTF-8">
</head>
<body>

    
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваш емейл: <input type="mail" name='mail'><br>
    <input type="submit">
    
</form>
<?php
$mail = $_POST['mail'];
$mailPattern = "/\w+@\w+\.\w+/";

if(preg_match( $mailPattern, $mail))  
   { echo 'Емейл вірний ' .  $mail; } 
            else 
   { echo "Емейл не корректний"; }       
?>
</body>
    </html>