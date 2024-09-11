<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inspiria. | Buat</title>

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
                <button id="dropDown" class="text-[16px] text-primary py-3 mx-5 flex">{{$name}} <i data-feather="chevron-down" class="text-primary"></i></button>
                <!-- Dropdown Menu -->
                <div id="menuDropdown" class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="/mylist" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MyList</a>
                    </li>
                    <li>
                      <a href="/masuk" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
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

  <!-- Section Jelajahi start -->
  <section class="mt-10">
    <div class="container">
      <div class="flex items-center justify-center">
        <div class="pt-20 md:pt-28 w-full md:w-1/2">
          <form action="/mylist" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">
              <span class="block font-normal mb-1 text-primary after:content-['*'] after:text-pink-500 after:ms-0.5">Judul</span>
              <input type="text" name="judul" id="title" placeholder="Masukan Judul" class="px-3 py-4 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-secondary bg-transparent mb-5" />
            </label>
            <label for="file-img">
              <span class="block font-normal mb-1 text-primary after:content-['*'] after:text-pink-500 after:ms-0.5">Gambar</span>
              <input type="file" name="gambar" id="file-img" class="block" />
              <!-- <div class="box-img w-48 h-48 border border-secondary mt-4"></div> -->
            </label>
            <button class="px-6 bg-secondary text-white mt-10 mb-8 py-3 rounded" type="submit">Simpan</button>
            <a href="/home-page" class="px-6 bg-primary text-white mt-10 mb-8 py-3 rounded">Batal</a>
          </form>
        </div>
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