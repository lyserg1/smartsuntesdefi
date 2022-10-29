@include('layouts.navbarheader')

<div class="fixed bottom-0 left-0 right-0 z-40 px-4 py-3 text-center text-white bg-gray-800">
    This a Tailwind CSS Contact Form by MusharofChy.
    <a class="text-gray-200 underline" href="https://tailwindcomponents.com/component/fully-working-contact-form-for-tailwind-css">Component details</a>
</div>

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="https://formbold.com/s/FORM_ID" method="POST">
        <div class="mb-5">
          <label
            for="name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Nombre Completo
          </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Ingresa tu Nombre Completo"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="email"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            E-Mail
          </label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Ingresa tu E-Mail"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="subject"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Motivo
          </label>
          <input
            type="text"
            name="subject"
            id="subject"
            placeholder="Ingresa el Motivo"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="message"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Mensaje
          </label>
          <textarea
            rows="4"
            name="message"
            id="message"
            placeholder="Escribe tu mensaje"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          ></textarea>
        </div>
        <div>
          <button
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
          >
            Enviar
            <a href="/contacto">Mensaje</a>

          </button>
        </div>
      </form>
    </div>
</div>

@include('layouts.footer')
