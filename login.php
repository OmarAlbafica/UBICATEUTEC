<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
<style type="text/css">
  body{
    background: #481121;
    background-size: cover;
  }
  .login .card{
    background: rgba(0,0,0,.2);
    margin-top: 20%;
  }
  .login label{
    font-size:18px;
    color:#ccc; 
  }
  .login input{
    font-size: 18px;
  }

        
</style>
 <body>

<div class="row login">
  <div class="col s12 l4 offset-l4">
    <div class="card">
      <div class="card-action blue-grey lighten-1 white-text">
        <h3>Login</h3>
        </div>
        <div class="card-content white-text">
          <form method="post" action="validar.php">
          <div class="form-field white-text">
            <label for="username">Usuario</label>
            <input type="text" name="username"  id="username" class="white-text">
          </div><br>
            <div class="form-field white-text">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="white-text">
          </div><br>
            <div class="form-field">
            <button class="btn-large blue-grey lighten-1 white-text">Ingresar</button>
          </div><br>
  </form>
        </div>

    </div>

  </div>

</div>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
    </body>
  </html>