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
        background: linear-gradient(90deg, #1F47B4 0%, #F55C1D 100%);
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

 /* Estilos para pantallas grandes */
 @media (min-width: 768px) {
    p {
      font-size: 2xl; /* Tamaño de fuente para pantallas grandes */
    }
  }

  /* Estilos para dispositivos móviles */
  @media (max-width: 50px) {
    p {
      font-size: lg; /* Tamaño de fuente ajustado para dispositivos móviles */
    }
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
            
             <li class="mr-3">
              
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="https://wa.link/vp5rxt" target="_blanck">¡Haz tus cotizaciones!</a>
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
<!-- PRUEBA FORM -->

<div class="pt-24 bg-white">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!-- Left Col -->
    <div class="flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left md:pr-16 animate__animated animate__fadeInLeft">
      <!-- <p class="uppercase tracking-loose w-full text-2xl">PARA CUALQUIER REQUERIMIENTO</p> -->
      <h1 class="my-4 text-7xl  font-bold leading-tight " style="color: #163d5a;">
        DISEÑA TU MARCA
      </h1>
      <p class="leading-normal text-lg md:text-2xl mb-8 animate__animated animate__fadeIn " style="color: #000000;">
      🟠 En DISYSCO nos especializamos desde el desarrollo de una marca hasta el desarrollo completo del área de marketing en cualquier empresa o negocio.
        <br/><br/>
      🟠 Así mismo creamos y desarrollamos campañas de publicidad en los distintos medios digitales, desde el diseño, gestión de respuesta hasta un completo manejo de community manager.
      </p>
     
      <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none 
      focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.open('https://disysco.com.mx/', '_blank')" style="background-color: #f7630c; color: #fff;">
        ¡CONOCENOS!
      </button>
      <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none 
      focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="window.location.href='#form'" style="background-color: #f7630c; color: #fff;">
        ¡REGISTRATE!
      </button>

      <br />
      <br />
      <br />
      
    </div>
    <!-- Right Col -->
    <div class="w-full md:w-1/2">
      <div class="container mx-auto animate__animated animate__fadeInRight">
        <!-- <h1 class="leading-normal text-3xl mb-8 font-bold" >Contacto</h1> -->
        <img class="h-auto" src="logomark.png" />
      </div>
    </div>
    
  </div>
  
</div>

<section>
  
</section>
<section >
  <br/>
  <br/>
  
  <div class="relative -mt-12 lg:-mt-24 animate__animated animate__fadeIn">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)">
          <linearGradient id="grad" gradientTransform="rotate(90)">
            <stop offset="5%" stop-color="#ED7514" />
            <stop offset="95%" stop-color="#163D5A" />
          </linearGradient>
          <path fill="url(#grad)" d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,104.708498 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </div>
</section>


<!-- slider -->
<!-- <section class="bg-white border-b py-8">
    <section class="regular slider">
    <div>
    <a href="https://disysco.com.mx/contacto/" target="_blank">
      <img  src="registro de marca.jpg">
    </a>
    </div>
    <div>
      <img src="servicios.jpg">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
  </section>
  </section>


  <script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
  
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
    autoplaySpeed: 3000,
    fade: true, // Agregar esta línea para habilitar la animación de fundido
    cssEase: 'linear' // Agregar esta línea para definir la curva de la animación
      });
  
    });
</script> -->


    <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        
        <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom">
      <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
      <br/>
        <a  class="flex flex-wrap no-underline hover:no-underline">
          <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2.5rem; color: #163d5a;">
            MARKETING
            <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
          </div>
          <p class="text-gray-800 text-base px-6 mb-5 text-justify" >
            <br/>
            En Disysco nos dedicamos desde la elaboración de un plan de marketing hasta la completa creación del área de marketing dentro de tu empresa o negocio, enfocándonos en la creación de objetivos y estrategias del área 
            para una maximización de branding, ventas y servicio al cliente para mantener a tu empresa o negocio a la vanguardia del mercado y sus necesidades. 
            <br/>
          </p>
        </a>
      </div>
      <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
        <div class="text-center">
          <img class="h-80 fill-current inline image-zoom" src="mkt.png">
        </div>
        <div class="text-center">
        <br/>
          <button 
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
             onclick="window.open('https://wa.link/urn1e2', '_blank')"style="background-color: #f7630c; color: #fff;";>
            WHATSAPP
          </button>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom">
      <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
      <br/>
        <a class="flex flex-wrap no-underline hover:no-underline">
          <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2.5rem; color: #163d5a;">
            MARKETING DIGITAL
            <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
          </div>
          <p class="text-gray-800 text-base px-6 mb-5 text-justify">
            <br/>
            En Disysco desarrollamos desde la creación de una marca hasta el desarrollo completo del área de marketing digital dentro de tu empresa o negocio, así mismo nos especializamos en la creación de campañas de 
            publicidad en los distintos medios digitales, elaborando el diseño de contenidos, gestión de respuesta, hasta un completo manejo de community manager.
            <br />
            <br />
          </p>
        </a>
      </div>
      <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
        <div class="flex items-center justify-center">
          <img class="h-80 fill-current inline image-zoom" src="Marketing Digital.png">
        </div>
        <div class="text-center">
          <br/>
          <button 
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            onclick="window.open('https://wa.link/wqaowb','_blanck')" style="background-color: #f7630c; color: #fff;";>
            WHATSAPP
          </button>
        </div>
      </div>
    </div>
        <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
          <br/>
            <a  class="flex flex-wrap no-underline hover:no-underline">
              
              <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2.5rem; color: #163d5a;">
              DESARROLLO WEB Y APPS
              <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
              </div>
              <p class="text-gray-800 text-base px-6 mb-5 text-justify">
              <br/>
              
Ahora en Disysco te ayudamos en la creación de tu página web donde desarrollamos desde host mini a un empresarial, plantillas y diseño web. Activación inmediata, cuentas de e-mail personalizadas 
con nombre de dominio, confiabilidad y disponibilidad de tu página web del 99.95 %.  
              <br />
              Desarrollo de sistemas y aplicaciones personalizados y tu alcance.
              <br />
              </p>             
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <img class="h-80 fill-current inline image-zoom" src="DISEÑO WEB.png">
            </div>
            <div class="text-center">
            <br/>
            <button 
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            onclick="window.open('https://wa.link/8hatrs','_blanck')" style="background-color: #f7630c; color: #fff;";>
            WHATSAPP
          </button>
            </div>
          </div>
        </div>

        <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink animate__animated animate__fadeIn image-zoom">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <br/>
                <a class="flex flex-wrap no-underline hover:no-underline">     
                
      <div class="w-full font-bold text-xl text-gray-800 px-6 text-center" style="font-size: 2.5rem; color: #163d5a;">
        FACTURACIÓN ELECTRÓNICA
        <div class="w-full mb-4">
          <br/>
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
      </div>
      <p class="text-gray-800 text-base px-6 mb-5 text-justify">
      <br/>
      Conoce nuestra Facturación electrónica donde ponemos a punto una plataforma de facturación electrónica, que le permitirá generar cualquier comprobante fiscal CFDI: 
        <br/>
        🟠 Factura 
        <br/>
        🟠 Comprobantes de pago 
        <br/>
        🟠 Recibos
        <br/>
        🟠 Carta Porte
        <br/>
        🟠 Honorarios
        <br/>
        🟠 Nómina (Versión 3.3 y 4.0) 
<br/>
Desde cualquier dispositivo con acceso a internet.
      </p>
    </a>
  </div> 
        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="text-center">
            
            <img class="h-60 fill-current inline image-zoom" src="Facturacion.png">

            </div>
            <div class="text-center">
            <br/>
            <button 
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-blue-500 text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            onclick="window.open('https://wa.link/vwbisg','_blanck')" style="background-color: #f7630c; color: #fff;";>
            WHATSAPP
          </button>
            </div>
          </div> 
        </div>
      </div>
    </section>

    <section class="bg-white border-b py-8 ">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" style="color: #163d5a;">
        ¿POR QUÉ NOSOTROS?
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div  class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <div class="w-5/6 sm:w-1/2 p-6 ">
             <!-- <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              ¿Por qué elegirnos?
            </h3> --> 
            <p class="text-gray-600 mb-8 text-justify">
            Nos especializamos en el desarrollo de soluciones digitales, manteniéndonos a la vanguardia gracias a la constante capacitación de nuestros profesionales, logrando que tu empresa tenga la mejor atención y conocimiento para solucionar las diferentes adversidades que el mercado actual exige. 
              <br />
              <br />
              Estamos comprometidos contigo para que tu empresa o negocio siga creciendo y este preparado para las nuevas tendencias del mercado y el comportamiento del cliente.
            </p>
          </div>
          
          <div class="w-full sm:w-1/2 p-6">
          <img class="h-64 fill-current inline image-zoom" src="marketing.png">
          </div>
        </div>                  
        </div>
      </div>
    </section>
    
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <!-- <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg> -->
    <section class="container mx-auto text-center py-6 mb-12">

      <div class="pt-24">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!--Left Col-->
    <div id="form" class="flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left md:pr-16 animate__animated animate__fadeInLeft">
   
      <div class="container mx-auto">
        <h1 class="leading-normal text-3xl mb-8 font-bold" >Contacto</h1>
        <form method="post" action="{{ url('landmarketing')}}" id="agregar"  enctype="multipart/form-data">
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
          <button type="submit" value="save" onclick="mostrarMensaje()" class="btn btn-primary shadow focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >Enviar</button>
          <div id="success-message" class="hidden bg-green-200 text-green-800 p-2 rounded my-4">
    Se envió correctamente.
</div>
        </form>
      </div> 
    </div>

    <script>
    function mostrarMensaje() {
        var successMessage = document.getElementById('success-message');
        successMessage.classList.remove('hidden');
        setTimeout(function() {
            successMessage.classList.add('hidden');
        }, 3000); // La duración en milisegundos antes de que el mensaje desaparezca (en este caso, 3 segundos)
    }
</script>


    <!--Right Col-->
    <div class="w-full md:w-1/2 animate__animated animate__fadeInRight">
      
    <img class="h-24 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005" src="logo disysco r.PNG" />
    <h3 class="my-4 text-2xl leading-tight text-center">
        Atención y Ventas Telefónicas
        <br/>
        <i class="fas fa-phone mr-2"> +52 722 934 6686</i>
        <br/>
        <i class="fas fa-phone mr-2"> +52 722 943 6687</i>
      </h3>

    </div>
  </div>
</div>

    </section>
    <!--Footer-->
    <footer class="bg-white">
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
                <a href="https://wa.link/axb1y4" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Ventas</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://wa.link/4c2qrz" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Ayuda</a>
              </li>
              
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://wa.link/lon9to" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blanck">Soporte</a>
              </li>
              
            </ul>
          </div>

          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Redes Sociales</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.facebook.com/disyscomexico/" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blank">Facebook</a>
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
                <a href="https://maps.app.goo.gl/V5mCdnoZk1gCsEbX6" class="no-underline hover:underline text-gray-800 hover:text-blue-500" target="_blank">Ubicación</a>
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
