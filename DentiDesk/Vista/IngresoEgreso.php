<?php
include('header.php');

?>

<div class="container" style="text-align:center">
  <div class="row justify-content-md-center" >
        <div class="col-sm-12" style="padding-top: 20px;">
             <h2>Agregar Ingresos o Egresos</h2>
        </div>
        <div class="col-sm-3" style="padding-top: 20px;">
        <input type="number" class="form-control" id="year" name="year" placeholder="Ingrese año" >
        </div>
        <div class="col-sm-3" style="padding-top: 20px;">
        <select class="form-control" id="month" name="month">
            <option value="0" selected>Seleccione Mes</option>
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
        </div>
        
        <div class="col-sm-3" style="padding-top: 20px;">
        <select class="form-control" id="tipo" name="tipo">
            <option value="0" selected>Seleccione Ingreso/Egreso</option>
            <option value="1">Ingreso</option>
            <option value="2">Egreso</option>
        </select>
        </div>
        <div class="col-sm-3" style="padding-top: 20px;">
        <input type="number" class="form-control" id="monto" name="monto" placeholder="Monto">
        </div>
        <div class="col-sm-6" style="padding-top: 20px;">
        <input type="button" value="Guardar" class="btn-success btn-sm" onclick="insertarData()">
        </div>
        
    </div>
  </div>