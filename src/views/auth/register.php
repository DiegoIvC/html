<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/ProyectoMango/src/views/css/register.css">

    <div class="sidenav">
         <div class="login-main-text">
            <h2>Registrate<br> Ahora!</h2>
            <p>Llena los siguientes campos y crea una cuenta gratuita:</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="../scripts/register.php" method="POST">
                <div class="container">
                  <div class="form-group">
                     <label>Nombre de usuario</label>
                     <input type="text" class="form-control" name="nombre" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Correo Electronico</label>
                     <input type="text" class="form-control" name="correo" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Contraseña</label>
                     <input type="password" class="form-control" name="contrasena" placeholder="Password">
                  </div> <br>
                  <button type="submit" class="btn btn-black">Registrarse</button>
                  <a href="http://localhost/ProyectoMango/src/views/auth/login.php" class="btn register">Ya tengo una cuenta</a>
                </div>
               </form>
            </div>
         </div>
      </div>