<footer class="relative bg-gray-900 pt-8 pb-6">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap text-left lg:text-left">
        <div class="w-full lg:w-6/12 px-4">
          <h4 class="text-3xl fonat-semibold text-white">SMART SUNSHINE</h4>
          <h5 class="text-lg mt-0 mb-2 text-white">
            Conoce mas sobre nuestro proyecto en nuestras redes.
          </h5>
          <div class="mt-6 lg:mb-0 mb-6">
            <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
              <span class="block uppercase text-white text-sm font-semibold mb-2">Información de Contacto</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-white  font-semibold block pb-2 text-sm">Celular: +56995125627</a>
                </li>
                <li>
                  <a class="text-white font-semibold block pb-2 text-sm">Correo: technoinvest@gmail.com</a>
                </li>

              </ul>
            </div>
            <div class="w-full lg:w-4/12 px-4">
              <span class="block uppercase text-white text-sm font-semibold mb-2">Horario de Atención</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-white font-semibold block pb-2 text-sm">Lunes a Viernes 8:00 am a 6:00 pm</a>
                </li>

                <li>
                  <a class="text-white font-semibold block pb-2 text-sm">Dirección: Avenida Providencia - Noviembre de Anibal Letelier</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-blueGray-300">
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
          <div class="text-sm text-white font-semibold py-1">
            Copyright © <span id="get-current-year">2022</span><a href="https://www.creative-tim.com/product/notus-js" class="text-white hover:text-white" target="_blank">
            <a href="https://www.creative-tim.com?ref=njs-profile" class="text-white hover:text-white">Techno Invest</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>



<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'https://source.unsplash.com/1600x900/?beach',
                'https://source.unsplash.com/1600x900/?cat',
                'https://source.unsplash.com/1600x900/?dog',
                'https://source.unsplash.com/1600x900/?lego',
                'https://source.unsplash.com/1600x900/?textures&patterns'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length){
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>
</body>
</html>
