<html>
<head>
    <title>Задача 3</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
if (date('H') < 3 || date('H') >= 11) {
    echo "Привіт, світ!";
} else {
    echo "Добрий ранок, світ!";
}
?>

</body>
</html>