<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inspiria. | Temukan Inspirasimu</title>

  <!-- tailwindcss -->
  <link rel="stylesheet" href="./css/style.css" />
  @vite('resources/css/app.css')

  <!-- googlefont -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <!-- Header start -->
  <header class="bg-bgCream absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container m-auto">
      <div class="flex items-center justify-between relative">
        <div class="px-2 md:px-6">
          <a href="/" class="font-bold block py-5 text-2xl text-primary">Inspiria<span class="text-secondary">.</span></a>
        </div>

        <div class="flex items-center px-2 md:px-6">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class=" hidden absolute mx-1 py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:flex lg:static lg:bg-bgCream lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="/" class="text-[16px] text-primary py-3 mx-5 flex">Beranda</a>
              </li>
              <li class="group">
                <a href="/jelajahi" class="text-[16px] text-primary py-3 mx-5 flex">Jelajahi</a>
              </li>
            </ul>
            <div class="flex items-center md:mt-4 lg:mt-0">
              <button class="border-primary border-2 text-primary py-2 px-4 rounded mx-5"><a href="/masuk">Masuk</a></button>
              <button class="bg-secondary text-white py-2.5 px-4 rounded"><a href="/daftar">Daftar</a></button>
            </div>
          </nav>
        </div>
      </div>
  </header>
  <!-- Header end -->

  <!-- Hero Section start -->
  <section id="beranda" class="pt-36 pb-28 bg-bgCream">
    <div class="container m-auto">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2">
          <h1 class="font-bold text-primary text-xl lg:text-[28px]">Temukan <span class="text-secondary">Inspirasimu</span> Dengan
            <br>Inspiria<span class="text-secondary">.</span>
          </h1>
          <p class="lg:pt-8 py-4 text-sm lg:text-[16px] tracking-wide"><span class="font-bold">Inspiria<span class="text-secondary">.</span></span> merupakan website untuk mencari ide, inspirasi dengan kategori Fashion, Food, Decor, Illustration dan anda dapat berkontribusi dengan mengupload karya anda disini.</p>
          <button class="bg-secondary text-white py-3 px-4 rounded lg:mt-6 mt-2 lg:text-[16px] text-sm"><a href="/daftar">Gabung Sekarang</a></button>
        </div>
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2">
          <div class="relative flex lg:justify-end justify-center mt-10 lg:mt-0">
            <img src="./assets/img/img-heroo.png" alt="Inspiria">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- Hero Section Food start -->
  <section class="pt-36 pb-28 bg-bgPurple">
    <div class="container m-auto">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2">
          <div class="relative flex lg:justify-start justify-center">
            <img src="./assets/img/img-food.png" alt="Inspiria">
          </div>
        </div>
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2 mt-10 lg:mt-0">
          <h1 class="font-bold text-primary text-xl lg:text-[28px]">Temukan Ide Menu <span class="text-secondary">Makan</span> Untukmu</h1>
          <p class="lg:pt-8 py-4 text-sm lg:text-[16px] tracking-wide"><span class="font-bold">Inspiria<span class="text-secondary">.</span></span> dapat membantu anda menemukan menu makanan favorit anda disetiap harinya.</p>
          <button class="bg-secondary text-white py-3 px-4 rounded lg:mt-6 mt-2 lg:text-[16px] text-sm"><a href="/jelajahi">Jelajahi</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section Food end -->

  <!-- Hero Section Fashion start -->
  <section class="pt-36 pb-28 bg-white">
    <div class="container m-auto">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2">
          <h1 class="font-bold text-primary text-xl lg:text-[28px]">Temukan Ide <span class="text-secondary">Fasion</span> Impianmu</h1>
          <p class="lg:pt-8 py-4 text-sm lg:text-[16px] tracking-wide"><span class="font-bold">Inspiria<span class="text-secondary">.</span></span> dapat membantu anda menemukan ide fashion yang sedang trending saat ini.</p>
          <button class="bg-secondary text-white py-3 px-4 rounded lg:mt-6 mt-2 lg:text-[16px] text-sm"><a href="/jelajahi">Jelajahi</a></button>
        </div>
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2">
          <div class="relative flex lg:justify-end justify-center mt-10 lg:mt-0">
            <img src="./assets/img/img-fashion.png" alt="Inspiria">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section Fashion end -->

  <!-- Hero Section Decor start -->
  <section class="pt-36 pb-28 bg-bgGreen">
    <div class="container m-auto">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2">
          <div class="relative flex lg:justify-start justify-center">
            <img src="./assets/img/img-decor.png" alt="Inspiria">
          </div>
        </div>
        <div class="w-full self-center px-2 md:px-6 lg:w-1/2 mt-10 lg:mt-0">
          <h1 class="font-bold text-primary text-xl lg:text-[28px]">Temukan Ide <span class="text-secondary">Decor</span> Rumahmu</h1>
          <p class="lg:pt-8 py-4 text-sm lg:text-[16px] tracking-wide"><span class="font-bold">Inspiria<span class="text-secondary">.</span></span> dapat membantu anda menemukan ide decor rumah impianmu.</p>
          <button class="bg-secondary text-white py-3 px-4 rounded lg:mt-6 mt-2 lg:text-[16px] text-sm"><a href="/jelajahi">Jelajahi</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section Decor end -->

  <!-- Footer start -->
  <footer class="pt-8 pb-4 bg-bgYellow">
    <div class="conatiner m-auto">
      <div class="flex items-center justify-center">
        <p class="text-xs font-normal text-primary">&copy; 2024 <span class="font-bold">Inspiria<span class="text-secondary">.</span></span> | Temukan Inpirasimu Disini.</p>
      </div>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Javascript -->
  <script src="../js/script.js"></script>
  @vite('resources/js/script.js')

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>