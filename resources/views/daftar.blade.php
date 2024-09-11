<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inspiria. | Daftar</title>

  <!-- tailwindcss -->
  <link rel="stylesheet" href="./css/style.css" />
  @vite('resources/css/app.css')

  <!-- googlefont -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <!-- Hero Section start -->
  <section id="beranda" class="bg-bgGreen">
    <div class="container m-auto">
      <div class="pt-4">
        <a href="/" class="w-11 h-11 mr-3 rounded-lg flex items-center justify-center bg-secondary ms-2 md:ms-6">
          <i data-feather="arrow-left" class="text-white"></i>
        </a>
      </div>
      <div class="flex w-full h-screen">
        <div class="w-full flex items-center justify-start lg:w-1/2 px-2 md:px-6">
          <div class="bg-white px-6 w-full rounded-sm">
            <div class="py-8">
              <h1 class="text-center text-xl text-primary">Selamat Datang Di <span class="font-bold">Inspiria<span class="text-secondary">.</span></span></h1>
              <p class="text-center text-sm pt-1">Dapatkan Ide - ide Baru Untuk Dicoba</p>
            </div>
            <div class="w-full">
              <div>
                <form action="/daftar" method="POST">
                  @csrf
                  <label for="email">
                    <span class="block font-normal mb-1 text-primary after:content-['*'] after:text-pink-500 after:ms-0.5">Email</span>
                    <input type="email" name="email" id="email" placeholder="Masukan email" class="px-3 py-4 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-secondary invalid:text-pink-700 invalid:focus:ring-pink-700 peer bg-transparent" />
                    <p class="text-sm mt-2 mb-2 text-pink-700 invisible peer-invalid:visible">Email tidak valid</p>
                  </label>
                  <label for="name">
                    <span class="block font-normal mb-1 text-primary after:content-['*'] after:text-pink-500 after:ms-0.5">Nama Lengkap</span>
                    <input type="name" name="name" id="name" placeholder="Masukan nama lengkap" class="px-3 py-4 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-secondary invalid:text-pink-700 invalid:focus:ring-pink-700 peer bg-transparent mb-8" />
                  </label>
                  <label for="password">
                    <span class="block font-normal mb-1 text-primary after:content-['*'] after:text-pink-500 after:ms-0.5">Kata Sandi</span>
                    <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi" class="px-3 py-4 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-secondary invalid:text-pink-700 invalid:focus:ring-pink-700 peer bg-transparent" />
                  </label>
                  <button class="w-full bg-secondary text-white mt-10 mb-8 py-4 rounded">Daftar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden lg:flex justify-center items-center w-1/2">
          <img src="./assets/img/img-login.png" alt="Inspiria">
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- Javascript -->
  <script src="./js/script.js"></script>

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>