function consultarfecha(){
  var year = document.getElementById('year').value;
  var month = document.getElementById('month').value;

  if(month=="0"){

    $("#month").focus();
    toastr.error("No ha seleccionado el mes correspondiete","Aviso");
        return false;
  }
  if(year==""){

    $("#year").focus();
    toastr.error("No ha ingresado año","Aviso");
        return false;
  }
  var param = 
    {
      year: year,
      month:month
    }

    $.ajax({

      type:'POST',
  
      url: "../Controlador/ajax/consultartotal.php",
  
      data: param,
  
      success:function(data){
       
          var datos = JSON.parse(data);
        
          if(datos.status===1){
           
              toastr.success("Datos encontrados","Exito");
              $("#informacion").text('La suma Total es : '+ datos.total);             
            }
          if(datos.status===0){      
          
            toastr.error("Para el Año y Fecha Consultada no se encuentran registros","Error");
            $("#informacion").text(''); 
          }
          
         
    
          
          }
        
        });

}

function insertarData(){

  var year = document.getElementById('year').value;
  var month = document.getElementById('month').value;
  var tipo = document.getElementById('tipo').value;
  var monto = document.getElementById('monto').value;

  if(month=="0"){

    $("#month").focus();
    toastr.error("No ha seleccionado el mes correspondiete","Aviso");
        return false;
  }
  if(year==""){

    $("#year").focus();
    toastr.error("No ha ingresado año","Aviso");
        return false;
  }
  if(tipo=="0"){

    $("#tipo").focus();
    toastr.error("No ha seleccionado si es Ingreso o Egreso","Aviso");
        return false;
  }
  if(monto==""){

    $("#monto").focus();
    toastr.error("No ha ingresado un monto","Aviso");
        return false;
  }

  var param = {
    year: year,
    month:month,
    tipo:tipo,
    monto: monto
  
  };

  $.ajax({

    type:'POST',

    url: "../Controlador/ajax/GuardarTransaccion.php",

    data: param,

    success:function(data){
     
        var datos = JSON.parse(data);
      
        if(datos.status===1){
         
            toastr.success("Al guardar la transaccion","Exito");
                    
          }
        if(datos.status===0){      
        
          toastr.error("Al guardar la transaccion","Error");
      
        }
        
        
        }
      
      });
    
    

}

