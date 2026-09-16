<?php


$opcion = $_POST["opcion"];


switch($opcion){
case 1;
echo "<h1>Retirar efectivo </h1><br>";

echo "<p>Seleccione la cantidad que desea retirar:</p>";

echo '<form method="POST">';

echo '<input type="radio" name="monto" value="100"> Q100 <br>';
echo '<input type="radio" name="monto" value="200"> Q200 <br>';
echo '<input type="radio" name="monto" value="500"> Q500 <br>';
echo '<input type="radio" name="monto" value="1000"> Q1000 <br>';

echo '<br>';

echo 'Otro monto:';
echo '<input type="number" name="Otromonto" placeholder"Q.0.00"><br>';

echo '<br><br>';

echo '<button type="submit"> Retirar </button>';
echo '<button action="index.html" type="submit"> Regresar </button>';
echo '</form>';

break;

case 2;
echo "<h1>Depositar efectivo </h1><br>";

echo "<p>Seleccione el tipo de depósito:</p>";

echo '<form method="POST">';

echo '<input type="radio" name="efectivo" > Efectivo <br>';
echo '<input type="radio" name="cheque" > Cheque <br>';

echo '<br>';

echo 'Monto a depositar:';
echo '<input type="number" name="montoD" placeholder"Q.0.00"><br>';

echo '<br><br>';

echo '<button type="submit"> Depositar </button>';
echo '<button action="index.html" type="submit"> Regresar </button>';
echo '</form>';

break;

case 3;
echo "<h1>Realizar transferencia </h1><br>";

echo '<form method="POST">';

echo 'Cuenta destino:';
echo '<input type="text" name="cDestino"><br>';

echo '<br><br>';

echo 'Monto:';
echo '<input type="number" name="montoT" placeholder"Q.0.00"><br>';

echo '<br><br>';

echo 'Concepto:';
echo '<input type="text" name="concepto"><br>';

echo '<br><br>';

echo '<button type="submit"> Transferir </button>';
echo '<button action="index.html" type="submit"> Regresar </button>';
echo '</form>';

break;
case 4;
echo "<h1>Consultar estado de cuenta </h1><br>";

echo "<p>Nombre: Anyeli Hernández</p>";
echo "<p>Número de cuenta: ****1234</p>";
echo "<p>Monto disponible: Q.2,500.00</p>";

echo '<form  action="index.html" method="POST">';
echo '<button type="submit"> Regresar </button>';
echo '</form>';

break;

case 5;
echo "<h1>Pagar servicios </h1><br>";

echo "<p>Seleccione el servicio:</p>";

echo '<form method="POST">';

echo '<input type="radio" name="servicio" value="Agua">Agua<br>';
echo '<input type="radio" name="servicio" value="Luz">Luz<br>';
echo '<input type="radio" name="servicio" value="Internet">Internet<br>';
echo '<input type="radio" name="servicio" value="Teléfono">Teléfono<br>';

echo '<br>';

echo 'Número de referencia:';
echo '<input type="number" name="nReferencia"><br>';

echo '<br>';

echo 'Monto de pago:';
echo '<input type="number" name="montoS" placeholder"Q.0.00"><br>';

echo '<br><br>';

echo '<button type="submit"> Pagar servicio</button>';
echo '<button action="index.html" type="submit"> Regresar </button>';
echo '</form>';

break;

}

?>
<style>
    
    h1{
        color: #f1b10e;
        font-size: 90px;
        font-family:Georgia, 'Times New Roman', Times, serif;
        text-align:center;
    }
    body{
        background-color:#05054c;
        color:white;
        font-size:40px;
    }
    p{
        color:white;
        font-size:50px;
    }
    button{
        font-size:40px;
        background-color: #7272d6;
        color: #05054c;
        font-family:Georgia, 'Times New Roman', Times, serif;
        margin-left:400px;
    }
    input{
        background-color:white;
        font-size:40px;
    }
</style>