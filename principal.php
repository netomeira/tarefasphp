
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Microblogging Site</title>
</head>
<body>
    
<?php 
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];

    if ($idade < 18) {
        echo "<b>menor de idade e ${sexo}</b>";
    } else {
        echo "<b>maior de idade e ${sexo}</b>";
    }
?>

</body>
</html>