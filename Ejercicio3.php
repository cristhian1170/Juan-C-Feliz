<?php
# valor de conversión
if(isset($_POST["conversion"]) && (is_numeric($_POST["conversion"]) || is_numeric(str_replace(",",".",$_POST["conversion"]))))
{
    $conversion=str_replace(",",".",$_POST["conversion"]);
}else{
    $conversion=58.96;

   // $Euro = 58.96;
   // $Dolar = 52.78;

}
 
# valor a convertir
if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))
{
    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);
}else{
    $aconvertir=0;
}
 
# calculo
$resultado=$conversion*$aconvertir;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversor de Monedas</title>
 
    <style>
        form span {
            display:block;
            float:left;
            width:180px;
        }
        input {text-align:right;}
    </style>
</head>
 
<body>
    <h1>Conversor de Monedas</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
 
        <span>Valor de moneda</span>
            <input type="text" name="conversion" value="<?php echo $conversion?>">
 
        <br><span>Euros </span>
            <input type="text" name="aconvertir" value="<?php echo $aconvertir?>">
 
        <br><span>Resultado o Valor en peso</span>
            <input type="text" name="resultado" readonly value="<?php echo number_format($resultado,2,".",",")?>">
 
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>
</html>