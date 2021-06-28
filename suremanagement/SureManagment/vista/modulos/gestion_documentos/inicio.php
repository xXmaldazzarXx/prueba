<?php
  $conn = mysqli_connect("localhost","root","","suremanagement");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aaa.css">
</head>
<body>
<header>
<div class="header">
    <p  >Administracion de archivos  </p> 
</div>
</header>
        <div class="nn">
         <h2 id="nombre">Nombre de la persona</h2>
        </div>


        <div class="nvo">
            <div class="suu">
            <h2>Insertar archivo</h2>
            <form id="sar">
                <input name="archivo" id="arr" type="file" style="display:none">
                <input id="enviar" type="submit" style="display: none;">
                <input name="propietario" id="propietario" type="hidden" style="display: none;">
                <input name="fecha" type="date" id="datearch" style="display: none;" >
            </form>
            <!-- Label de archivo -->
            <label for="arr">
            <div class="btnn">
                <p>Elegir archivo 📂</p>
            </div>
            </label>
            <!-- Label de archivo -->
            <label for="enviar">
                <div class="btnn">
                    <p>Subir archivo</p>
                </div>
            </label>
            <p id="adver">aa</p>
            <br><br><br>
            <!-- Seleccion de otro propietario -->
            <form id="cpro">
            <input type="hidden" value="id del propietario">
            <h2>Cambiar propietario</h2>
            <label>
                <div align="center" class="btnn" style="width:80%;margin-left:10%;cursor:auto;">
                    <p>Seleccionar propietario:   <select id="sele" name="nprop" style="margin-left:10px;font-size:1.1em;" ><option value="a">Elija un propietario</option></select> </p>
                </div>
            </label>

            <input id="ccpro" type="submit" style="display: none;">
            </form>
            </div>
        </div>


        <div class="contenido">
            <div class="inicio">
                <h3>archivos</h3>
            </div>
            <hr>
            <!--Informacion de archivo y descargar-->
            <div class="contar">
                <div id="infoar.." class="infoar">
                    <p>Request document<br></p>
                </div>
                <div class="btndown">
                    <h3><a href="Request document" download>Descargar</a></h3>
                </div>
            </div>
            <hr class="line1" align="center">
             <!--Fin Informacion de archivo y descargar-->
             <div class="contar">
                 <div id="infoar.." class="infoar">
                 </div>
                <div class="btndown">
                    <h3>Descargar</h3>
                </div>
            </div>
            <hr class="line1" align="center">
            <!--Aqui-->
            <div class="contar">
                <div id="infoar.." class="infoar">
                </div>
               <div class="btndown">
                   <h3>Descargar</h3>
               </div>
           </div>
           <hr class="line1" align="center">
           <!--Aqui-->
           <div class="contar">
            <div id="infoar.." class="infoar">
            </div>
           <div class="btndown">
               <h3>Descargar</h3>
           </div>
       </div>
       <hr class="line1" align="center">
       <!--Aqui-->
       <div class="contar">
        <div id="infoar.." class="infoar">
        </div>
       <div class="btndown">
           <h3>Descargar</h3>
       </div>
   </div>
   <hr class="line1" align="center">
   <!--Aqui-->
   <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
<!--Aqui-->
<div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
<!--Aqui-->
<div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
<!--Aqui-->
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
  <!--Aqui-->
  <div class="contar">
    <div id="infoar.." class="infoar">
    </div>
   <div class="btndown">
       <h3>Descargar</h3>
   </div>
</div>
<hr class="line1" align="center">
        </div>
        <script>
        var hola = new Date(Date.now())
        var dia = hola.getDate()
        var mes = hola.getMonth() + 1;
        var year = hola.getFullYear()
        if( mes < 10 ){
        mes = "0"+mes+""
        }
        document.getElementById("datearch").setAttribute("value", year+`-`+mes+`-`+dia);

        $(document).ready(function(){
            //Opciones en el select
            jQuery.ajax({
                url: "options.php",
                //data: $("#cpro").serialize(),
                type: "POST",
                success:function(data){
                    $('#sele').html("<option selected value='g'>seleccionar propietario</option>"+data)
                }
                })
            //Validacion de subir documento
            var sar = document.getElementById("sar")
            sar.addEventListener('submit',function sub1(event){
            var arc = document.getElementById("arr").value
            event.preventDefault()
            if(arc == ""){
                document.getElementById("adver").innerHTML="Debe seleccionar un archivo para subir"
            }else{
            jQuery.ajax({
                url: "content.php",
                success:function(data){
                    $('#adver').html(data)
                }
            })
            }
            })

            var sar = document.getElementById("sar")
            sar.addEventListener('submit',function sub1(event){
            var arc = document.getElementById("arr").value
            event.preventDefault()
            if(arc == ""){
                document.getElementById("adver").innerHTML="Debe seleccionar un archivo para subir"
            }else{
                
            jQuery.ajax({
                url: "content.php",
                success:function(data){
                    $('#adver').html(data)
                }
            })

            }
            })


                /*var pro = document.getElementById("cpro") 
                pro.addEventListener('submit',function sub2(event){
                event.preventDefault()
                jQuery.ajax({
                url: "doc1.php",
                data: $("#cpro").serialize(),
                type: "POST",
                success:function(data){
                    $('#nombre').html(data)
                }
                })

                })*/

                $('#sele').change(function(){
                    jQuery.ajax({
                    url: "doc1.php",
                    data: $("#cpro").serialize(),
                    type: "POST",
                    success:function(data){
                        $('#nombre').html(data)
                    }
                    })

                })
            

            })

        </script>
</body>
</html>