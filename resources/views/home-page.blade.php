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
                <a href="/home-page" class="text-[16px] text-primary py-3 mx-5 flex">Beranda</a>
              </li>
              <li class="group">
                <a href="/buat" class="text-[16px] text-primary py-3 mx-5 flex">Buat</a>
              </li>
              <li class="group relative">
                <button id="dropDown" class="text-[16px] text-primary py-3 mx-5 flex">{{$nama}} <i data-feather="chevron-down" class="text-primary"></i></button>
                <!-- Dropdown Menu -->
                <div id="menuDropdown" class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="/mylist" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MyList</a>
                    </li>
                    <li>
                      <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</button>
                        <!-- <a type="submit" class=" block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a> -->
                      </form>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  </header>
  <!-- Header end -->

  <!-- Section Search start -->
  <section class="pt-28">
    <div class="container flex justify-center items-center">
      <form action="/cari" class="w-full lg:mx-0 lg:w-full justify-center lg:px-0 flex">
        <div class="w-full lg:mx-0 lg:w-1/2 lg:px-0 flex">
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          @if (request('judul'))
          <input type="hidden" name="judul" value="{{ request('judul') }}">
          @endif
          <input type="search" name="cari" value="{{request('cari')}}" id="search" placeholder="Cari Inspirasimu..." class="px-3 py-4 border shadow w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-secondary bg-transparent" />
          <button type="submit" class="px-4 py-4 mr-3 flex items-center justify-center bg-secondary shadow"><i data-feather="search" class="text-white"></i></button>
        </div>
      </form>
    </div>
  </section>
  <!-- Section Search end -->

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