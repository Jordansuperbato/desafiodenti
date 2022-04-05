<?php
include('../../Modelo/conexion_db.php');

$month=$_POST['month'];
$year=$_POST['year'];
$tipo=$_POST['tipo'];
$monto=$_POST['monto'];

/*reemplazo caracteres especiales*/

$monto = str_replace('+', '', $monto);
$monto = str_replace('-', '', $monto);
/*asigno signo negativo en caso de ser un egreso*/
if($tipo=="1"){

$total=$monto;

}else{

$total="-".$monto;

}

$sql = "insert into totales values (default,'$month','$year',$total);";

$respuesta=array();

$resultado=pg_query($conn,$sql);

if ($resultado) 
{

$respuesta['status']=1;     

}else{
        
$respuesta['status']=0;   
   
}
  echo json_encode($respuesta); 
  
?>