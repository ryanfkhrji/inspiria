<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inspiria. | Temukan Ide Inspirasimu</title>

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
          <a href="#" class="font-bold block py-5 text-2xl text-primary">Inspiria<span class="text-secondary">.</span></a>
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

  <!-- Section Kategori start -->
  <section class="mt-10 pt-28">
    <div class="container">
      <div class="pb-9">
        <h2 class="text-center font-semibold text-xl">Temukan Minatmu</h2>
      </div>
      <div class="px-2 grid grid-cols-2 md:grid-cols-4 md:px-6 gap-2">
        <div class="group grid-card relative">
          <div class="grid-card-img" style="background-image: url('./assets/img/img-kat-fashion.png')">
            <p class="text-center font-semibold text-sm text-white absolute w-full py-3 bottom-0 inset-x-0 bg-secondary leading-4">Fashion</p>
          </div>
        </div>
        <div class=" group grid-card">
          <div class="grid-card-img" style="background-image: url('./assets/img/img-kat-food.png')">
            <p class="text-center font-semibold text-sm text-white absolute w-full py-3 bottom-0 inset-x-0 bg-primary lg:bg-secondary leading-4">Food</p>
          </div>
        </div>
        <div class=" group grid-card">
          <div class="grid-card-img" style="background-image: url('./assets/img/img-kat-decor.png')">
            <p class="text-center font-semibold text-sm text-white absolute w-full py-3 bottom-0 inset-x-0 bg-primary lg:bg-secondary leading-4">Decor</p>
          </div>
        </div>
        <div class=" group grid-card">
          <div class="grid-card-img" style="background-image: url('./assets/img/img-kat-illustration.png')">
            <p class="text-center font-semibold text-sm text-white absolute w-full py-3 bottom-0 inset-x-0 bg-secondary leading-4">Illustrasi</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Kategori end -->

  <!-- Section Jelajahi start -->
  <section class="mt-10">
    <div class="container">
      <div class="px-2 grid grid-cols-2 md:grid-cols-4 md:px-6 gap-2">
        <!-- card start -->
        @foreach($data as $d)
        <div class="group grid-cards">
          <img src="{{asset('/img/koleksi/'.$d->gambar)}}" alt="Inspiria">
          <p class="mt-3 font-normal md:text-lg text-sm">{{ $d->judul }}</p>
          <p class="text-secondary text-sm font-semibold">{{$d->author}}</p>
        </div>
        @endforeach
        <!-- card end -->
      </div>
    </div>
  </section>
  <!-- Section Jelajahi end -->

  <!-- Javascript -->
  <script src=" ./js/script.js">
  </script>
  @vite('resources/js/script.js')

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>