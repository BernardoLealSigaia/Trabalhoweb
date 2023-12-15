<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaaa</title>
</head>
<body>
    <h1>Página Inicial</h1>




    <?php
    $name = $_POST["nome"];
    $senha = $_POST["senha"];
    
    if($name == "bernardo" and $senha == "555"){
       header("Location:" ."telainiciohtml"); /*restrito*/ 

    }elseif($name =="m" and $senha =="124"){  
    header("Location:" ."intermediario.html"); /*intermediário*/
    }else
      header("Location:" ."menu.html") /*normal*/ 
    ?>
    
</body>


</html>