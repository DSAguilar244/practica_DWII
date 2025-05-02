<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <?php include "common/header.php"; ?>

    <main class="pt-16">
    <div
            class="relative h-full overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-1 before:transform before:-translate-x-1/2">
                <div class="relative pb-[110px] pt-[150px] dark:bg-dark lg:pt-[170px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 lg:mb-0">
              <h2 class="mb-5 text-3xl font-bold leading-[1.208] text-dark dark:text-white lg:text-[38px] xl:text-[40px]">
                Proyecto de prueba para PHP. Sí, PHP puro, sin framworks...
              </h2>
              <p class="dark:text-dark-6 mb-8 max-w-[485px] text-base text-body-color">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at egestas tortor. Morbi sed odio id purus pellentesque iaculis
                nulla facilisi.
              </p>

              <p class="mb-5 text-base font-medium text-dark dark:text-white">
                Es solo un proyecto random que ha sido creado para usarse como entorno de pruebas.
              </p>

              <form class="mb-7 flex max-w-[455px] flex-wrap">
                <input type="email" class="dark:border-dark-3 dark:bg-dark-2 placeholder:text-dark-6 mb-3 mr-3 h-[52px] w-full rounded-md border border-stroke bg-white px-5 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:focus:border-primary sm:max-w-[220px] md:max-w-[315px] lg:max-w-[250px] xl:max-w-[300px]" placeholder="Saludame!">
                <button class="hover:bg-blue-dark mb-3 h-[52px] rounded-md bg-primary px-7 text-base font-medium text-white transition">
                  Saluda
                </button>
              </form>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/2">
            <div class="-mx-2 flex flex-wrap sm:-mx-4">
              <div class="w-1/2 px-2 sm:px-4">
                <div class="mb-4 h-[256px] sm:mb-8 sm:h-[442px] lg:h-[332px] xl:h-[442px]">
                  <img src="/assets/gato_1.gif" alt="hero image" class="h-full w-full object-cover object-center">
                </div>
              </div>
              <div class="w-1/2 px-2 sm:px-4">
                <div class="mb-4 h-[120px] sm:mb-8 sm:h-[205px] lg:h-[150px] xl:h-[205px]">
                  <img src="/assets/gato_2.gif" alt="hero image" class="h-full w-full object-cover object-center">
                </div>
                <div class="mb-4 h-[120px] sm:mb-8 sm:h-[205px] lg:h-[150px] xl:h-[205px]">
                  <img src="/assets/gato_3.jpeg" alt="hero image" class="h-full w-full object-cover object-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </main>

    <?php include "common/footer.php"; ?>
</body>

</html>