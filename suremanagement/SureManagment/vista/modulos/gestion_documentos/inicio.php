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
            <form id="sar" method="post" enctype="multipart/form-data">
                <input name="docc" id="arr" type="file" style="display:none">
                <input name="propietario" id="propietario" type="hidden" style="display: none;">
                <input name="fecha" type="date" id="datearch" style="display: none;" >
                <input id="enviar" type="submit" style="display: none;">
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
            <p id="carga">Quejeso</p>
            <br><br><br>
            <!-- Seleccion de otro propietario -->
            <form id="cpro">
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


        <div id="contenido" class="contenido">
            <div class="inicio">
                <h3>archivos</h3>
            </div>
            <hr>
            <!--Informacion de archivo y descargar-->

            <!-- a -->



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
                    $('#sele').html("<option selected value='fff'>seleccionar propietario</option>"+data)
                }
                })
            //Validacion de subir documento
            var sar = document.getElementById("sar")


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

                    document.getElementById("propietario").value =document.getElementById("sele").value


                    jQuery.ajax({
                    url: "doc1.php",
                    data: $("#cpro").serialize(),
                    type: "POST",
                    success:function(data){
                        $('#nombre').html(data)
                    }
                    })

                    jQuery.ajax({
                    url: "doc2.php",
                    data: $("#cpro").serialize(),
                    type: "POST",
                    success:function(data){
                        $('#contenido').html(/*Entrada de Documentos a descargar*/'<div class="inicio"><h3>archivos</h3></div><hr>'+data)
                    }
                    })

                })
            


            sar.addEventListener('submit',function sub1(event){
            var arc = document.getElementById("arr").value
            event.preventDefault()
            if(arc == ""){
                document.getElementById("carga").innerHTML="Debe seleccionar un archivo para subir"
            }else{

            jQuery.ajax({
                url: "content.php",
                data: $("#sar").serialize(),
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                    $('#carga').html(data)
                },
                error:function(data) 
                {}  
            })

            }
            
            })





            })

        </script>
        <div id="cars"></div>
</body>
</html>