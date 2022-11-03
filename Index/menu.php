<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Pagina Principal</title>
    <!--Css/Tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Iconografia-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!--References: https://tailwindui.com/components/preview-->
    <!-- Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>
<body>
    <!-- Barra de Navegacion -->
    <?php 
     //Si no se añade desde los dos puntos da error
     //para evitarlo podemos hacer un if/else con rutas posibles
     //y asi no tener conflicto con el path de xampp
      include("../EstructuraCuerpo/header.php");
    ?>
    
    <!-- Carrucel de imagenes -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              class="object-cover w-full h-max"
              src="../Imagenes/MicrosoftTeams-image (53).png"
              alt="apple watch photo"
            />
          </div>
          <div class="swiper-slide">
            <img
              class="object-cover w-full h-max"
              src="../Imagenes/MicrosoftTeams-image (54).png"
              alt="apple watch photo"
            />
          </div>
          <div class="swiper-slide">
            <img
              class="object-cover w-full h-max"
              src="../Imagenes/MicrosoftTeams-image (56).png"
              alt="apple watch photo"
            />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
  
      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper('.mySwiper', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
    

    <!-- Cuerpo -->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s flex justify-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Imagenes de la Farmacia</h2>
            <p class="sub-title pad-bt15">Estos son nuestros productos mas destacadas de la semana<br>Medicamentos.</p>
            <hr class="bottom-line">
          </div>
          <div class="grid grid-cols-3 gap-3">
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="../Imagenes/MicrosoftTeams-image (55).png" class="w-96 h-64">
                  <figcaption>
                    <h2>Parasetamol</h2>
                    <p>Este medicamento es bueno pararagahahahahah.</p>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="../Imagenes/MicrosoftTeams-image (58).png" class="w-96 h-64">
                  <figcaption>
                    <h2>Minoxidil</h2>
                    <p>Este medicamento es bueno para reforzar las defenzas.</p>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="../Imagenes/MicrosoftTeams-image (59).png" class="w-96 h-64">
                  <figcaption>
                    <h2>Vispiranguitarimicuaro</h2>
                    <p>Aqui un poco de tesco para esta receta.</p>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="../Imagenes/MicrosoftTeams-image (55).png" class="w-96 h-64">
                  <figcaption>
                    <h2>Pastillas Anticonceptivas</h2>
                    <p>cuidate mucho a,igo.</p>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="../Imagenes/MicrosoftTeams-image (58).png" class="w-96 h-64">
                  <figcaption>
                    <h2>jeringas</h2>
                    <p>son para mejorar la salud de .</p>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="../Imagenes/MicrosoftTeams-image (59).png" class="w-96 h-64">
                  <figcaption>
                    <h2>vitaminas</h2>
                    <p>para au,mnetra las defenzas de como es posible.</p>
                  </figcaption>
                </figure>
              </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Mapa -->
    <div class="embed-responsive embed-responsive-4by3 relative w-full overflow-hidden"
    style="padding-top: 75%">
      <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
      allowfullscreen=""
      data-gtm-yt-inspected-2340190_699="true"
      id="240632615" 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912.7245279069389!2d-68.1210688439411!3d-16.503412026132846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206782937445%3A0xacceb97486edb698!2sUniversidad%20del%20Valle%20-%20Campus%20Miraflores!5e0!3m2!1ses!2sbo!4v1666120952468!5m2!1ses!2sbo" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

   <br><br><br>
    <?php 
     //Si no se añade desde los dos puntos da error
     //para evitarlo podemos hacer un if/else con rutas posibles
     //y asi no tener conflicto con el path de xampp
    include("../EstructuraCuerpo/footer.php");
    ?>
    

</body>
</html>
