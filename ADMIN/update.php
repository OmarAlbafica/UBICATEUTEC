
 <?php
 include("sqlupdate.php");
?>
<meta charset="UTF-8">
    <title>Modificar Sitio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{
        background-color: #5D0A28;
             }
    
        .wrapper{
            color:white;
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Modificar sitio</h2>
                    </div>
                    <p>Moficar sitios.</p>

                   
                    <form enctype="multipart/form-data" action="" method="POST">
                        
                        <div class="form-group">
                            <label>Nombre Sitio</label>
                            <input type="text" name="sitio" class="form-control" value="<?php echo $row['sitio'];?>" >
                           
                        </div>
                        <div class="form-group">
                            <label>Tipo Sitio</label>
                            <input type="text" cols="5" name="tipositio" class="form-control" value="<?php echo $row['tipositio']?>">
                            
                        </div>
                        <div class="form-group" align="left" value="">
                            <label>Historia</label>
                            <textarea  name="historia"  class="md-textarea form-control"  wrap="hard soft" >
                              <?php echo $row2['historia']?>
                            </textarea>
                            
                                                    </div>
                        <div class="form-group ">
                            <label>Año</label>
                            <input type="text" name="anio_creacion"  class="form-control"value="<?php echo $row2['anio_creacion']?>"></input>
                         </div>

                        <div class="form-group ">
                            <label>Imagen</label><br>
                             <input id="file_url" type="file" name="img" class="form-control">
                         </div>

                        <div class="form-group">
                            <label>QR</label><br>    
                             
                          <input id="file_url" type="file" name="imgqr" class="form-control">
                        </div>




                        <input type="hidden" name="id" value=""/>

                        <input type="submit" name="enviar2" class="btn btn-primary" value="Modificar sitio">


                        <a href="indexCrudAdm.php" class="btn btn-default">Cancelar</a>
                    </form>





                </div>
            </div>        
        </div>
    </div>
</body>
</html>