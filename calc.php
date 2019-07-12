<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex4 - Cauculo</title>
</head>
<body>

    <?php
        
        $conta= $_POST['conta'];
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];


        if ($conta == 'adicao')
        {
            $tot = $valor1 + $valor2;
            print "O resultado é: $tot";
            exit;
        }


        if ($conta == 'subtracao')
        {
            $tot = $valor1 - $valor2;
            print "O resultado é: $tot";
            exit;
        }


        if ($conta == 'multiplicacao')
        {
            $tot = $valor1 * $valor2;
            print "O resultado é: $tot";
            exit;
        }


        if ($conta == 'divisao')
        {
            $tot = $valor1 / $valor2;
            print "O resultado é: $tot";
            exit;
        }
    ?>




</body>
</html>