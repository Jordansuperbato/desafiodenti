<?php
include('../../Modelo/conexion_db.php');

$month=$_POST['month'];
$year=$_POST['year'];

$sql = "select sum(monto) as total from totales where anio='$year' and mes ='$month'";

$respuesta=array();

$resultado=pg_query($conn,$sql);

$data=pg_fetch_assoc($resultado);
$total=$data['total']; 

if($total==''){
      
        $respuesta['status']=0;
        $respuesta['year']=$year; 
        $respuesta['month']=$month; 

}else{
        
        $respuesta['status']=1;
        $respuesta['total']=$total; 
        $respuesta['year']=$year; 
        $respuesta['month']=$month; 

    }

    echo json_encode($respuesta); 
?>