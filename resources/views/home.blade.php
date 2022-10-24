@include('layouts.navbarheader')





<div class="z-30 relative items-center justify-center w-full h-full overflow-auto">
<div class="inset-0 h-screen bg-cover bg-center"
    style="
    background-image:
    url('https://news.america-digital.com/wp-content/uploads/2019/12/Conoce-las-102-empresas-están-impulsando-el-desarrollo-de-las-Smart-Cities_-America-Digital.jpg');"
>
</div>
<div class="absolute inset-0 z-20 flex items-center justify-center h-screen w-full bg-sky-600 bg-opacity-75"></div>
<div class="absolute inset-0  z-30  flex flex-col items-center justify-center">
    <div class="shadow-2xl rounded-lg w-4/5 h-96 bg-cover bg-center"
        style="
        background-image:
        url('https://news.america-digital.com/wp-content/uploads/2019/12/Conoce-las-102-empresas-están-impulsando-el-desarrollo-de-las-Smart-Cities_-America-Digital.jpg');">

        <div class="grid grid-cols-12 gap-1">
            <div class="relative my-6 px-8 col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xxl:col-span-7">
                <div class="border-l-4 border-white py-32 px-5 mx-2 absolute left-0">
                    <p class="italic text-white text-xl md:text-4xl lg:text-7xl uppercase text-center  font-semibold">
                        Ven movilizate, y siente la seguridad de caminar por las calles
                    </p>
                </div>
                <div class="text-white font-semibold text-xl mb-4">Iluminamos el Futuro por un Mañana Mejor</div>
                <div class="absolute border-white border-t-4 bottom-0 py-1 px-4 w-4/5"></div>
            </div>
            <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                <div class="relative bg-blue-700 h-full md:h-96 w-full bg-opacity-50 rounded-tr-lg rounded-br-lg">
                    <div class="p-8">
                        <p class="text-white text-2xl md:text-sm lg:text-2xl mb-4">
                            Experimenta y siente las tecnologias de postes inteligentes en las calles de la ciudad.
                        </p>
                        <div class="bottom-0 absolute p-2 right-0">
                            <button class="opacity-75 bg-gray-100 hover:bg-pink-900 hover:text-white text-sm font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                 <a href="{{ route('login') }}">Ingresar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<section
        class="flex-col w-full h-[500px] bg-cover bg-fixed bg-center flex justify-center items-center"
        style="background-image: url(https://img.freepik.com/vector-premium/cruce-panorama-dibujos-animados-gran-ciudad-moderna_88272-2667.jpg?w=1380);
        ">
        <h1 class="text-gray-800 text-5xl font-semibold mt-20 mb-10">
            Bienvenido a SmartSunshine
        </h1>

        {{-- <span class="text-center font-bold my-20 text-white/90">


            <div class=" bg-blue-700 h-full md:h-96 w-full bg-opacity-50 rounded-tr-lg rounded-br-lg">
                <div class="p-8">
                    <p class="text-white text-2xl md:text-sm lg:text-2xl mb-4">
                        Experimenta y siente las tecnologias de postes inteligentes en las calles de la ciudad.
                    </p>


                </div>
            </div>


        </span> --}}


        <div class="container mx-auto mt-10 mb-10 lg:mb-40 lg:px-20">

            <div class="relative w-full lg:-mt-96 lg:w-3/6 p-8 ml-auto bg-blue-700 rounded-2xl z-50">
                <div class="flex flex-col text-white">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24"><path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z"/></svg>
                    </div>
                    <p class="text-white my-5 px-2">

                        Siente y movilizate por la ciudad de forma consciente y automatizada, con la ayuda de nuestros postes inligentes, entregamos un servicio para informar, detectar, registrar, y alertar sobre hechos que ocurran en los entornos publicos por los que transitas.
                    </p>

                </div>
            </div>
        </div>


    </section>




    <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Conoce las Funciones de Nuestro Sistema</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://www.calatayud.es/admin/resources/noticias/fotos/6180/1080x1920/WhatsApp_Image_2020-09-16_at_11.06_.32_.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Detectamos y Registramos
                    </a>

                    <br>

                    <span class="text-sm text-gray-800 dark:text-gray-800">Nuestros postes inteligentes poseen dispositivos de captura sucesos a traves de imagenes, para el apoyo de la seguridad vial.</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://static2.lasprovincias.es/www/multimedia/201710/06/media/cortadas/cruce-shibuya-tokio-k8BI-U40966758710PvF-624x385@Las%20Provincias.jpg" alt="">

                <div class="flex flex-col justify-between py-8 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Detectamos y Alertamos
                    </a>

                    <span class="text-sm text-gray-800 dark:text-gray-800">El sistema captura señales de ruido, estas señales se analizan para posteriores estudios y toma de desiciónes</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://es.digi.com/getattachment/Blog/post/Introduction-to-Smart-Transportation-Benefits/GettyImages-1207768535-1280x720.jpg?lang=en-US" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Detectamos y Informamos
                    </a>

                    <span class="text-sm text-gray-800 dark:text-gray-800">El sistema captura datos a traves de los sensores de temperatura para ser utilizados para pronosticos del clima.</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://armadaled.org/wp-content/uploads/2020/03/autopista-iluminacion-led-500x445.jpg" alt="">

                <div class="flex flex-col justify-between py-8 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Detectamos y Controlamos
                    </a>

                    <span class="text-sm text-gray-800 dark:text-gray-800">Nuestro sistema permite controlar el uso de la intensidad de la luz, para un cuidado más consiente y económico.</span>
                </div>
            </div>


        </div>
    </div>
</section>



@include('layouts.footer')
