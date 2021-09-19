<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Facturación</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
    
  <body id="bodyp">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../../../css/main.css">
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../../../css/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->    
     <header>
<!--         <h3 class="text-center text-light">Tutorial</h3>-->
         <h4 class="text-center text-light" style="background-color:#961b21;"><span style="background-color:rgba(0,0,0,0);" class="badge badge-danger">Gestion de Usuarios</span></h4> 
     </header>    
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <div style="z-index:-1; position: absolute; width: 35%; height: 45px; border-radius:30px; background-color:grey;"></div><div class="buscarbtn" style="width:100%;background-color: rgba(68, 220, 38,0); display:inline-block; border-radius: 30px; padding-left: 20px; padding-right: 1px;"><i class="fas fa-search" style="color: white;"></i>&nbsp &nbsp <input placeholder="Buscar" style=" padding-left:10px;display: inline; border-radius: 30px; margin-top: 3px;margin-bottom: 3px; width: 100%; position: relative; margin-right: 1px;" class="form-control col-md-3 light-table-filter" data-table="order-table" id="searchh" type="text"></div> <br>
                    <div class="col-lg-12">            
                          <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal" style="position:absolute;left:90%;top:-40px;">Nuevo</button>    
                    </div> 
                    <br>
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed order-table " style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Usuario</th>
                                    <th>Contraseña</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody style="font-weight:normal;font-family:arial;">
                                <?php
                                    $conn = mysqli_connect("localhost","root","","suremanagement");
                                    if ($conn -> connect_error){
                                        echo "Error en la conexion";
                                    }else{
                                        $consulta = mysqli_query($conn, "SELECT * FROM usuarios");
                                        while($reg = mysqli_fetch_array($consulta)){
                                            echo '<tr>
                                            <th>'.$reg['id_usuario'].'</th>
                                            <th>'.$reg['nombres'].'</th>
                                            <th>'.$reg['apellidos'].'</th>
                                            <th>'.$reg['usuario'].'</th>
                                            <th>'.$reg['contraseña'].'</th>
                                            <th>'.$reg['email'].'</th>
                                            <th>'.$reg['rol'].'</th>
                                            <th><div class="text-center"><div class="btn-group"><form id="fused'.$reg['id_usuario'].'"><input type="hidden" value="'.$reg['id_usuario'].'"><input type="submit" value="Editar" class="btn btn-primary btnEditar" onclick="editus'.$reg['id_usuario'].'()"></form><form id="fusel'.$reg['id_usuario'].'"><input type="hidden" value="'.$reg['id_usuario'].'"><input type="submit" value="Borrar"class="btn btn-danger btnBorrar"></div></form></div></th>
                                            </tr>';
                                            echo '<script>
                                            function editus'.$reg['id_usuario'].'(){
                                              document.getElementById("avisoeditar'.$reg['id_usuario'].'").style.display="block"
                                              document.getElementById("osccc'.$reg['id_usuario'].'").style.display="flex"
                                              document.getElementById("osccc'.$reg['id_usuario'].'").style.position="fixed"
                                            }
                                            function cedus'.$reg['id_usuario'].'(){
                                              document.getElementById("avisoeditar'.$reg['id_usuario'].'").style.display="none"
                                              document.getElementById("osccc'.$reg['id_usuario'].'").style.display="none"
                                              location.reload()
                                            }
                                            $(document).ready(function(){
                                              document.getElementById("fused'.$reg['id_usuario'].'").addEventListener("submit", e=>{     
                                              e.preventDefault()
                                              jQuery.ajax({
                                                          url: "valdel.php",
                                                          data: $("#fused'.$reg['id_usuario'].'").serialize(),
                                                          type: "POST",
                                                          success:function(data){
                                                          $("#ad").html(data);
                                                          },
                                                          error:function(){}
                                              });
                                              })
                                              })
                                            </script>';
                                        }
                                    }
                                ?>
                                </tbody>
                            <tfoot align="center">
                                <tr>
                                    <th>No.</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Usuario</th>
                                    <th>Contraseña</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th colspan="3">Acciones</th>
                                </tr>
                            </tfoot>         
                       </table>               
                    </div>
                </div>
        </div>  
    </div> 
    <style>
    table td{
        padding: 20px;
    }
    </style>
    <div id="newuser" style="display:none;position:fixed;top:0;bottom:0;left:0;right:0;"></div>
    <?php
                                    $conn = mysqli_connect("localhost","root","","suremanagement");
                                    if ($conn -> connect_error){
                                        echo "Error en la conexion";
                                    }else{
                                        $consulta = mysqli_query($conn, "SELECT * FROM usuarios");
                                        while($reg = mysqli_fetch_array($consulta)){
                                          echo '<div id="osccc'.$reg['id_usuario'].'" onclick="cedus'.$reg['id_usuario'].'()" style="display:none ;position: fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5); "></div><div id="avisoeditar'.$reg['id_usuario'].'" style="width:30%; background-color: #ffffff; padding: 20px; color:black; display:none; position: fixed; top: 0; width:50%;left: 25%; top: 15%;">
                                          <form method="post" id="formedus'.$reg['id_usuario'].'">
                                          <table align="center" class="tablaedit">
                                          <tr>
                                          <td colspan="2" align="center"> Editar Usuario</td>
                                          </tr>
                                          <hr style="width:100%; background-color: #961b21; height:2px;">
                                          <tr>
                                          <td>Nombres</td>
                                          <td><input type="text" value="'.$reg['nombres'].'" name="nombres"><input type="hidden" value="'.$reg['id_usuario'].'" name="ppp"></td>
                                          </tr>
                                          <tr>
                                          <td>Apellidos</td>
                                          <td><input type="text" value="'.$reg['apellidos'].'" name="apellidos"></td>
                                          </tr>
                                          <tr>
                                          <td>Nombre de usuario</td>
                                          <td><input type="text" value="'.$reg['usuario'].'" name="user"></td>
                                          </tr>
                                          <tr>
                                          <td>Contraseña</td>
                                          <td><input type="password" value="'.$reg['contraseña'].'" name="pass"></td>
                                          </tr>
                                          <tr>
                                          <td>Email</td>
                                          <td><input type="text" value="'.$reg['email'].'" name="correo"></td>
                                          </tr>
                                          <td>Rol</td>
                                          <!-- <td><input type="text" value="'.$reg['rol'].'" name="rol"></td> -->
                                          <td><select name="rol"><option value="admin" >admin</option><option value="empleado">empleado</option><select></td>
                                          </tr>
                                          <tr>
                                          <td align="center"><input type="submit" value="confirmar" style="width: 80%; background-color: #42b7f6 ;"></form></td>
                                          <td align="center"><form><input type="submit" value="cancelar" style="color:white;width: 60%; background-color: #961b21;" onclick="cedus'.$reg['id_usuario'].'()"></form></td>
                                          </tr>
                                          <hr style="width:93%; background-color: #961b21; height:2px;position:absolute;bottom:0;">
                                          </table>
                                          <p id="subidaed'.$reg['id_usuario'].'" style="text-align:center"></p>
                                          </div>


                                          <div id="avsdel'.$reg['id_usuario'].'" class="okok" style="">
                                          <hr style="height:2px;background-color:#961b21;">
                                          <h5> Seguro que desea eliminar el usuario: '.$reg['usuario'].' con id: '.$reg['id_usuario'].'?<h5>
                                          <form id="fusdel'.$reg['id_usuario'].'"><input type="hidden" name="deluss" value="'.$reg['id_usuario'].'"><input type="submit" value="confirmar" style=" width:30%;margin-left:15% ;background-color:#42b7f6;border:0.5px solid black;border-radius:5px;" ><input type="button" value="cancelar" id="canceldel'.$reg['id_usuario'].'" style="margin-left:10%;margin-right:15% ;background-color:#961b21;border:0.5px solid black;border-radius:5px;color:white;width:30%"></form>
                                          <hr style="height:2px;background-color:#961b21";>
                                          </div>


                                          <script type="text/javascript">
                                          $(document).ready(function(){
                                            $("#osccc'.$reg['id_usuario'].'").click(function(){
                                              location.reload();
                                            })
                                             document.getElementById("formedus'.$reg['id_usuario'].'").addEventListener("submit", e=>{     
                                                 e.preventDefault()
                                                 jQuery.ajax({
                                                             url: "actualizardataus.php",
                                                             data: $("#formedus'.$reg['id_usuario'].'").serialize(),
                                                             type: "POST",
                                                             success:function(data){
                                                             $("#subidaed'.$reg['id_usuario'].'").html(data);
                                                             },
                                                             error:function(){}
                                                 });
                                                 }) 
                                                 document.getElementById("fusel'.$reg['id_usuario'].'").addEventListener("submit", e=>{
                                                      e.preventDefault()
                                                      document.getElementById("osccc'.$reg['id_usuario'].'").style.display= "flex"
                                                      document.getElementById("avsdel'.$reg['id_usuario'].'").style.display= "block"
                                                      $("#canceldel'.$reg['id_usuario'].'").click(function(){
                                                        document.getElementById("osccc'.$reg['id_usuario'].'").style.display="none"
                                                        document.getElementById("avsdel'.$reg['id_usuario'].'").style.display="none"
                                                        location.reload()
                                                      })
                                                      document.getElementById("fusdel'.$reg['id_usuario'].'").addEventListener("submit", e=>{
                                                        e.preventDefault()
                                                        jQuery.ajax({
                                                          url: "deldata.php",
                                                          data: $("#fusdel'.$reg['id_usuario'].'").serialize(),
                                                          type: "POST",
                                                          success:function(data){
                                                            alert("Usuario '.$reg['usuario'].' Eliminado")
                                                            location.reload()
                                                          },
                                                          error:function(){}
                                                          })
                                                      })
                                                })
                                             })
                                         </script>';
                                        }
                                    }
    ?>
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">País:</label>
                <input type="text" class="form-control" id="pais">
                </div>                 
                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
<br>   
<br>
    <script>
      $(document).ready(function(){
        $("#btnNuevo").click(function(){

                                                document.getElementById("newuser").innerHTML = `<div id="transp" onclick="cedus()" style="display:none ;position: fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5);"></div><div id="avisonew" style="width:30%; background-color: white; padding: 20px; color:black; display:none; position: fixed; top: 0; width:50%;left: 25%; top: 15%;">
                                                <form method="post" id="newuserform">
                                                <table align="center" class="tablaedit">
                                                <tr>
                                                <td colspan="2" align="center"> Ingresar Usuario </td>
                                                </tr>
                                                <hr style="width:100%; background-color: #961b21; height:2px;">
                                                <tr>
                                                <td>Nombres</td>
                                                <td><input type="text" name="nombres"></td>
                                                </tr>
                                                <tr>
                                                <td>Apellidos</td>
                                                <td><input type="text" name="apellidos"></td>
                                                </tr>
                                                <tr>
                                                <td>Nombre de usuario</td>
                                                <td><input type="text" name="user"></td>
                                                </tr>
                                                <tr>
                                                <td>Contraseña</td>
                                                <td><input type="password" name="pass"></td>
                                                </tr>
                                                <tr>
                                                <td>Email</td>
                                                <td><input type="text" name="correo"></td>
                                                </tr>
                                                <td align="center"><input type="submit" value="confirmar" style="width: 80%; background-color: #42b7f6 ;"></form></td>
                                                <td align="center"><form><input type="submit" value="cancelar" style=" color:white;width: 60%; background-color: #961b21;" onclick="cedus'.$reg['id_usuario'].'()"></form></td>
                                                </tr>
                                                <hr style="width:93%; background-color: #961b21; height:2px;position:absolute;bottom:0;">
                                                </table>
                                                <p id="infonn" style="text-align:center"></p>
                                                </div>`
                                                document.getElementById("newuser").style.display="block"
                                                document.getElementById("avisonew").style.display="block"
                                                document.getElementById("transp").style.display="block"
                                                document.getElementById("transp").style.position="fixed"
                                                $(document).ready(function(){
                                                document.getElementById("newuserform").addEventListener("submit", e=>{     
                                                e.preventDefault()
                                                jQuery.ajax({
                                                          url: "newdata.php",
                                                          data: $("#newuserform").serialize(),
                                                          type: "POST",
                                                          success:function(data){
                                                          $("#infonn").html(data);
                                                          },
                                                          error:function(){}
                                              });
                                              })
                                              })
                                              $("#transp").click(function(){
                                                document.getElementById("transp").style.display="none";
                                                document.getElementById("newuser").style.display="none";
                                                location.reload()
                                              });
                                                
                                              
      })
    })
    </script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script type="text/javascript">

    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });
    })(document);
    </script>
    <style>
        .okok{
          display:none;
          position:fixed;
          z-index:1000;
          padding:50px;
          background:white;
          border:solid 0.5px black;
          border-radius:20px;
          margin-left:20%;
          margin-right:20%;
          width:60%;
          margin-top: -300px;
        }
    </style>
    <!-- Prueba con git hub -->
  </body>
</html>