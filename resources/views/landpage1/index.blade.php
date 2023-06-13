<!DOCTYPE html>

<html lang="en">
  <head>
  

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://www.dafontfree.net/embed/YnJpdGFubmljLWJvbGQtcmVndWxhciZkYXRhLzEzL2IvNjQ1MzAvQlJJVEFOSUMuVFRG" rel="stylesheet" type="text/css"/>
    <title>
      DISYSCO - Digital Systems Consulting
    </title>
    <link rel="icon" href="logoicon.ico"/>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding AZUL #04b5d9  NARANJA #f77320 -->
    <style>
      .gradient {
        background: linear-gradient(90deg, #04b5d9 0%, #AEF8FF  100%);
      }
      #header {
      background-color: rgba(255, 255, 255, 0.8);
      }

      .slider {
         width: 90%;
        margin: 80px auto ; 
      }
       .slick-slide {
        margin: 0px 20px;
      } 
      .slick-slide img {
        width: 100%;
        
      }
      .slick-prev:before,
      .slick-next:before {
        color: black;
        position: absolute;
        z-index: 1;
      }
        .regular img {
        width: 1200px auto;
        height: 300px ;
      }  

     /*  .container {
  display: flex;
  justify-content: flex-end;
}
       */
       /* Estilos para el botón */
  .btn {
    background-color: #f77320;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
  }
  
  /* Estilos para los campos de entrada */
  input[type="text"],
  input[type="email"],
  input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  /* Estilos para las etiquetas de los campos de entrada */
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  input[type="text"], input[type="email"], input[type="tel"] {
  color: black;
}

.image-zoom {
  transition: transform 0.3s ease-in-out;
}

.image-zoom:hover {
  transform: scale(1.1);
}

.center-button {
  display: block;
  margin-left: 45px;
  margin-right: auto;
}



    </style>
  
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white ">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              
          <img class="h-20 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005" src="logo disysco r.PNG" />
        
            </svg>
            <!-- DISYSCO -->
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-2">
            
             <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="https://wa.link/4sx8d7" target="_blanck">¡Haz tus cotizaciones!</a>
            </li>
            
          </ul>
          
          <button 
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            onclick="window.open('https://wa.link/vp5rxt', '_blank')" style="background-color: #f7630c; color: #fff;";>
            WHATSAPP
          </button>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <div class="pt-24 ">
<div class="flex flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="flex flex-col w-full md:w-1/3 justify-center items-start text-center md:text-center md:pr-16 animate__animated animate__fadeInLeft">
    <!-- <p class="uppercase tracking-loose w-full text-2xl">PARA CUALQUIER REQUERIMIENTO</p>-->
    <h1 class="my-4 text-6xl font-bold " style="text-transform: uppercase; line-height: 150%;">
      <span style="font-size: 140%;">S</span><span style="font-size: 115%;">eguridad <br />en</span> <span style="font-size: 115%;">Todo</span> <span style="font-size: 140%;">L</span><span style="font-size: 115%;">ugar</span>
    </h1>
    
    <br />

    <div class="flex justify-center">
  <button class="center-button mx-2 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none 
  focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.open('https://disysco.com.mx/','_blank')" >¡CONÓCENOS!</button>
  <button class="center-button mx-2 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none 
  focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='#form'">¡REGÍSTRATE!</button>
</div>

  </div>

  <!--Right Col-->
 
  <div class="w-full md:w-2/3">
    <!-- Aquí va tu imagen -->
    <img class="w-full md:w-3/3 lg:w2/2 xl:w-5/5" src="security.png" />
  </div>
</div>
</div>


    <section class="bg-white border-b py-8" >
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">

        <div class="w-full  md:w-1/3 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom"  >

        
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow" >
            
            <a  class="flex flex-wrap no-underline hover:no-underline ">
              
              <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2rem; color: #163d5a;">
              SISTEMAS DE VIDEOVIGILANCIA 
              <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
              </div>
              <p class="text-gray-800 text-base px-6 mb-5 text-justify">
              <br/>
              🟠 Vigila y protege tu hogar o negocio con nuestras cámaras de seguridad.
              <br/>
              🟠 Detecta actividades sospechosas, registra incidentes y previene delitos.
              <br/>
              🟠 Transmite en vivo o graba imágenes para supervisar tu propiedad en tiempo real.
              <br/>
              🟠 Integra las cámaras con sistemas de seguridad adicionales para una protección completa.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6" >
            <div class="text-center">

            <img class="h-56 fill-current inline image-zoom" src="sistemv.png">

            </div>
            <div class="text-center">
            <br/>
              <button 
                id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                onclick="window.open('https://wa.link/9b4uzc','_blanck')" style="background-color: #f7630c; color: #fff;";>
                WHATSAPP
              </button>
            </div>
          </div>
        </div>

        

        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom"  >
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a  class="flex flex-wrap no-underline hover:no-underline">
              
              <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2rem; color: #163d5a;">
                GPS
                <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
              </div>
              <p class="text-gray-800 text-base px-6 mb-5 text-justify">
              <br/>
              <br/>
              🟠 Ahorre tiempo y dinero con nuestros sistemas de rastreo GPS.
              <br />
              🟠 Rastreo y seguimiento satelital GPS en tiempo real de su flota o flotilla.
              <br />
              🟠 Maximice la eficiencia de sus operaciones con nuestra avanzada tecnología de seguimiento satelital.
              </p>
              
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">

              <img class="h-80 fill-current inline image-zoom" src="gpscam.png">

            </div>
            <div class="text-center">
            <br/>
              <button 
                id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow  focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                onclick="window.open('https://wa.link/xyg41e','_blanck')" style="background-color: #f7630c; color: #fff;";>
                WHATSAPP
              </button>
            </div>
          </div>
        </div>
          <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom" >
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a  class="flex flex-wrap no-underline hover:no-underline">      
      <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2rem; color: #163d5a;">
        CERCOS ELECTRIFICADOS
        <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
      </div>
      <p class="text-gray-800 text-base px-6 mb-5 text-justify">
      <br/>
      🟠 Los cercos eléctricos pueden activarse de manera permanente para funcionar las 24 horas y tener una protección continua sin esfuerzo. 
      <br/>
      🟠 Disuade a los intrusos con su mera presencia, manteniendo a salvo a personas e instalaciones.
      <br/>
      🟠 Protege tu perímetro con nuestra valla electrificada.
    </a>
  </div> 
        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="text-center">
            
            <img class="h-56 fill-current inline image-zoom" src="cercos-electricos.jpg">

            </div>
            <div class="text-center">
            <br/>
              <button 
                id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                onclick="window.open('https://wa.link/0gw29g','_blanck')" style="background-color: #f7630c; color: #fff;";>
                WHATSAPP
              </button>
            </div>
          </div> 
        </div>
      </div>
    </section>

    

    <section id="form" class="container mx-auto text-center py-6 mb-12">

      <div class="pt-24">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!--Left Col-->
    <div  class="flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left md:pr-16 animate__animated animate__fadeInLeft">
   
      <div class="container mx-auto">
        <h1 class="leading-normal text-3xl mb-8 font-bold" >Contacto</h1>
        <form method="post" action="{{ url('landseguridad')}}" id="agregar"  enctype="multipart/form-data">
          @csrf
          <div class="form-group flex flex-col text-left">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>
          <div class="form-group flex flex-col text-left">
              <label for="email">Correo</label>
              <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group flex flex-col text-left">
              <label for="telefono">Teléfono</label>
              <input type="tel" name="telefono" id="telefono" class="form-control" required>
          </div>
          
          <div class="form-group flex flex-col text-left">
              <label for="asunto">Asunto</label>
              <input type="text" name="asunto" id="asunto" class="form-control" required>
          </div>
          <button type="submit" value="save"  class="btn btn-primary shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >Enviar</button>
          
        </form>
      </div> 
    </div>

    <!--Right Col-->
    <div class="w-full md:w-1/2 animate__animated animate__fadeInRight">
      
    <img class="h-24 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005" src="logo disysco r.PNG" />
    <h3 class="my-4 text-2xl leading-tight text-center" style="color: #163d5a;"> 
        Atención y Ventas Telefónicas
        <br/>
        <i class="fas fa-phone mr-2" style="color: #163d5a;"> +52 722 934 6686</i>
        <br/>
        <i class="fas fa-phone mr-2" style="color: #163d5a;"> +52 722 943 6687</i>
      </h3>

    </div>
  </div>
</div>

    </section>
    <!--Footer-->
    <footer class="bg-white ">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">             
              <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <img class="h-12 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005" src="logo disysco r.PNG" />
              </svg>             
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://api.whatsapp.com/send?phone=7294988003&text=Hola,%20requiero%20informaci%C3%B3n%20de%20un%20producto/servicio." class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Ventas</a>
              </li>
            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://wa.link/4c2qrz" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Ayuda</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://wa.link/4c2qrz" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Soporte</a>
              </li>
              
            </ul>
          </div>

          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Redes Sociales</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.facebook.com/disyscomexico/" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://instagram.com/disyscomx?igshid=MzRlODBiNWFlZA==" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Instagram</a>
              </li>
             
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Empresa</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://disysco.com.mx/" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Pagina Web</a>
              </li>
              
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://maps.app.goo.gl/V5mCdnoZk1gCsEbX6" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Ubicación</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by freepik - www.freepik.com</a> -->
    </footer>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
