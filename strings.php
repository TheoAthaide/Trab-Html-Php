
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade prática 5 - Funções para strings</title>
</head>

<body>

    <?php 
        $string  = $_POST['texto'];
        $mani = $_POST['mani'];
    ?>

    <?php 
        if ($mani =="font") {
            $txtf= strlen($string);
        }
        elseif ($mani =="inverter") {
            $txtf=strrev($string);
        }
        elseif ($mani =="maiu") {
            $txtf= strtoupper($string);
        }
        elseif ($mani =="minu") {
            $txtf= strtolower($string);
        }
        else{
            $txtf= ucwords($string);
        }
        print "$txtf";
    ?>

</body>

</html>