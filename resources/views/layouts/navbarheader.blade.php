<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image" content="http://tailwindcomponents.com/storage/1092/temp29316.png?v=2022-10-24 04:42:30" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/simple-responsive-navigation-bar/landing" />
    <meta property="og:title" content="Simple Responsive Navigation Bar by chandrashekhar" />
    <meta property="og:description" content="Simple Responsive Navigation Bar" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Simple Responsive Navigation Bar by chandrashekhar" />
    <meta name="twitter:description" content="Simple Responsive Navigation Bar" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/footer-5/landing" />
    <meta property="og:title" content="Footer by Creative Tim" />
    <meta property="og:description" content="Footer" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Footer by Creative Tim" />
    <meta name="twitter:description" content="Footer" />
    <meta name="twitter:image" content="http://tailwindcomponents.com/storage/4873/conversions/temp80811-ogimage.jpg?v=2022-10-24 05:53:02" />


    <meta property="og:url" content="https://tailwindcomponents.com/component/info-card-forest/landing" />
    <meta property="og:title" content="Info Card - Forest by safwanAzman" />
    <meta property="og:description" content="semoga bermanfaat untuk semua" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Info Card - Forest by safwanAzman" />
    <meta name="twitter:description" content="semoga bermanfaat untuk semua" />
    <meta name="twitter:image" content="http://tailwindcomponents.com/storage/4807/conversions/temp48122-ogimage.jpg?v=2022-10-24 06:49:21" />

    <meta name="twitter:image" content="http://tailwindcomponents.com/storage/1092/temp29316.png?v=2022-10-24 04:42:30" />

    <title>Smartsunshine </title>

            <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-500">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />

<style>
  html,
body {
  font-family: "Rubik", sans-serif;
}

/* navigation
 - show navigation always on the large screen devices with (min-width:1024)
*/

@media (min-width: 1024px) {
  .top-navbar {
    display: inline-flex !important;
  }
</style>
<nav class="flex items-center bg-gray-900 p-3 flex-wrap">
      <a href="/" class="p-2 mr-4 inline-flex items-center">
        <div class="flex justify-center items-center ml-5">
    <img src="img/intento.png"" alt="logo" class="w-8 mx-10">

  </div>
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >SMART SUNSHINE</span
        >
      </a>
      <button
        class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
        data-target="#navigation"
      >
        <i class="material-icons">menu</i>
      </button>
      <div
        class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
      >
        <div
          class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto"
        >
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>QUIENES SOMOS</span>
          </a>
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>SISTEMA</span>
          </a>
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>CONTACTO</span>
          </a>
          <a
            href="{{ route('login') }}"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>LOGIN</span>
          </a>

        </div>
      </div>
    </nav>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
  $(".nav-toggler").each(function(_, navToggler) {
    var target = $(navToggler).data("target");
    $(navToggler).on("click", function() {
      $(target).animate({
        height: "toggle"
      });
    });
  });
});

</script>
