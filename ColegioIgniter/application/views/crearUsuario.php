<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


  
    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nombre Estudiante:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Apellido Estudiante:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
          </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Nombre del padre de Familia:</label>
          <div class="col-sm-10"> 
            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Apellido del padre de familia:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Correo del padre de Familia:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Dirección:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Telefono:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          </div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Aceptar</button>
          </div>
        </div>
      </form>
<script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>