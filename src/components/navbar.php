<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Beat It</title>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/ProyectoMango/src/css/index.css">

    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    .title-navbar
    {
        font-family: 'Montserrat', sans-serif;
        font-size: 150%;
    }
    *{
        font-family: 'Poppins', sans-serif;
    }
    html{
        /* overflow-x:hidden; */
    }
    .quitar-borde
    {
        border: none !important;
    }
    .borde 
    {
        border:solid;
        border-color: black;
    }
    .opciones
    {
        margin-top: 2px;
    }
    body::-webkit-scrollbar{
       
       width: 7px;
   }
   body::-webkit-scrollbar-thumb{
       background: rgb(180, 174, 174);border-radius: 20px;
   }
    .sin-barra{
        text-decoration: none;
    }
  .input-wrapper {
    position: relative;
    width: 271px;
  }

  .input {
    box-sizing: border-box;
    color: #191919;
    padding: 15px 15px 15px 35px;
    width: 100%;
    border-radius: 10px;
  }


  .input-icon {
    color: #191919;
    position: absolute;
    width: 19pt;
    height: 18pt;
    left: 6pt;
    top: 49%;
    transform: translateY(-50%);
  }

  .input-icon.password {
    left: unset;
    right: 12px;
  }

  .bg-nav{
    background-color: #0E2C40
  }
  .ingresar{
    background-color: #EFBC75;
    color: white !important;
  }
  .ingresar:hover{
    background-color: #C08530 !important;
  }
  .nav-link:hover{
    color: #EFBC75 !important;
  }

    </style>

</head>

 <body>
<!--<nav class="navbar navbar-expand-lg bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand title-navbar text-white" href="http://localhost/ProyectoMango/">Beat It</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Tracks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Servicio al cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Carrito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Conviertete en BeatMaker</a>
        </li>
      </ul>
      
      <form class="d-flex" style="margin-right: 10pt" role="search">
      <div class="input-wrapper">
        <input style="height: 29pt" type="search" class="input" placeholder="Buscar">
            <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
            </svg>
      </div>
        
      </form>
        <a class="btn btn-outline-dark ingresar col-md-1 " href="http://localhost/ProyectoMango/src/views/auth/login.php" type="button">Ingresar</a>
 
        

    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-sm navbar-dark bg-nav">
    <div class="container">
    <a class="navbar-brand title-navbar text-white" href="http://localhost/ProyectoMango/">Beat It</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" href="#" aria-current="page">Tracks <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="http://localhost/ProyectoMango/src/views/Nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Servicio al Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Carrito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Conviertete en BeatMaker</a>
        </li>
      </ul>
      <form class="d-flex my-2 my-lg-0">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
