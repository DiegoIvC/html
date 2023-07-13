<!DOCTYPE html>
<html lang="en">
<?php
        require('src/components/navbar.php')
?>

  <div class="container">
    <br><br><br>
    <h1 align= center class='titulo'>Bienvenido a <b>Beat It<b></h1>
    <hr>
    <p class="parrafo">
      Beat It es una pagina web donde podras comprar y descargar las mejores instrumentales de una variedad de generos musicales.
      Tambien puedes subir y vender tus propias instrumentales registrandote como Beat Maker! <a href="">Click aqui para convertirte en Beat Maker</a>
    </p>
    <hr>
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="src/img/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src/img/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src/img/29366.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
      <hr>
    <div class="text-white">Playlists recomendadas</div> <br>

    <section>
      <img src="src/img/29366.jpg"  alt="...">
      <img src="src/img/2.jpg"  alt="...">
      <img src="src/img/1.jpg"  alt="...">
      <img src="src/img/2.jpg"  alt="...">
      <img src="src/img/1.jpg"  alt="...">
      <img src="src/img/29366.jpg"  alt="...">


    </section>
    <hr>
    <div class="text-white pl_rec">Instrumentales recomendadas</div>
    <div class="container-fluid">
    <div class="row">

      <!-- Instrumentales -->
      <?php
       use MyApp\query\Select;
       use MyApp\query\Ejecuta;

       require("vendor/autoload.php");

       $objSelect = new Select();

        // mostrar las primeras 4 ordenadas de mayor a menor calificacion con sus respectivos beatmakers y calificaciones
       $cadena = "SELECT RI.imagen, RI.Instrumental, RI.fecha, RI.bm,RI.suma / RI.conteo as 'calificacion' FROM
       (SELECT instrumentales.img as 'imagen',instrumentales.nombre as 'Instrumental', instrumentales.fecha_creacion as 'fecha', usuario.nombre as 'bm', COUNT(calificacion_inst.calificacion)
         as 'conteo', sum(calificacion_inst.calificacion) as 'suma' FROM usuario join beatmaker on usuario.id_usuario=beatmaker.usuario join instrumentales
         on beatmaker.id_beatmaker = instrumentales.beatmaker join calificacion_instrumentales
         on calificacion_instrumentales.instrumentales = instrumentales.cve_inst JOIN calificacion_inst
         on calificacion_inst.cv_cal = calificacion_instrumentales.calificacion
         GROUP BY instrumentales.nombre) AS RI GROUP BY calificacion desc limit 4";
       $reg = $objSelect -> seleccionar($cadena);

       foreach($reg as $instrumentales)
       {
        ?>

<a href="" type="button" class=" col-xl-6 col-md-6 col-sm-12 mb-4 " style="text-decoration: none;">
<div>    
        <div class="card card_inst">
          <div class="card-body">
            <div class="d-flex justify-content-between p-md-1">
              <div class="d-flex flex-row">
                <div class="align-self-center">
                  <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                </div>
                
                  <div class="row">
                    <div class="col-5">
                      <img src="src/img/1.jpg" alt="" class="inst_img">
                    </div>
                    <div class="col-7">
                      <h4><?php echo $instrumentales->Instrumental ?></h4>
                      <p class="mb-0"><?php echo $instrumentales->bm ?></p>
                      <p class="mb-0"><?php echo $instrumentales->fecha ?></p>
                    </div>
                      <div class="align-self-center">
                        <h3 class=" mb-0"><?php
                          if($instrumentales->calificacion<2)
                          {
                          echo "★☆☆☆☆";
                          }
                          else if($instrumentales->calificacion<3)
                          {
                            echo "★★☆☆☆";
                          }
                          else if($instrumentales->calificacion<4)
                          {
                            echo "★★★☆☆";
                          }
                          else if($instrumentales->calificacion<5)
                          {
                            echo "★★★★☆";
                          }
                          else
                          {
                            echo "★★★★★";
                          }

                           ?></h3>
                       </div>
                   </div>
               </div>
            </div>
        </div>     
     </div>
   </div>


</a>

        <?php
       }
        ?>
</div>


</body>
<?php
        require('src/components/footer.php')
?>
<style>

  section{
    display: flex;
    width: 100%;
    height: 430px;
  }
  section img{
    width: 0px;
    flex-grow: 1;
    object-fit: cover;
    opacity: .8;
    transition: .5s ease;
  }
  section img:hover{
    cursor: crosshair;
    width: 300px;
    opacity: 1;
    filter: contrast(120%);

  }
  .carousel {

     margin-top: -6%;
     padding: 10%;

   }
  .kaisei{
      font-family: 'Kaisei Tokumin', serif;
    }
  .poppins{
      font-family: 'Poppins', sans-serif;
    }
  .titulo{

    color: white;
  }
  .parrafo{
    font-size:18px;
    color: white;
  }
  .parrafo a{
    color: white;
  }
  .parrafo a:hover{
    font-size:20px !important;
    color: white !important;
  }
  .card_inst
  {
    display: flex;
    margin-top: 15px;
    gap: 5px;
    color: white;
    background-color: black;

  }
  .pl_rec
  {
    color: white;
    margin-top: 15px;
    margin-bottom: 5px;

  }

  .inst_img
  {
    width: 110px;
    height: 110px;
    margin-left: 5px;
  }
  
</style>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<!-- cambio -->
