<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Hinh chu nhat</p><?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<p>Hinh tam giac</p><?php
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>
<p>Hinh tam giac</p><?php
for ($i = 7; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>



</body>
</html>
