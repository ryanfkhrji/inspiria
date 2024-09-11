<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inspiria. | MyList</title>

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

  <!-- Section start -->
  <section class="mt-10">
    <div class="container m-auto">
      <div class="pt-20 md:pt-28">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-center border text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">
                  Judul
                </th>
                <th scope="col" class="px-6 py-3">
                  Gambar
                </th>
                <th scope="col" class="px-6 py-3">
                  Author
                </th>
                <th scope="col" class="px-6 py-3">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @isset($data)
              @foreach($data as $d)
              <tr class="bg-white border-b">
                <td class="px-6 py-4">
                  {{ $d->judul }}
                </td>
                <td class="px-6 py-4 flex justify-center">
                  <img src="{{ asset('/img/koleksi/'.$d->gambar) }}" alt="Inspiria" width="100px">
                </td>
                <td>
                  {{$d->author}}
                </td>
                <td class="px-6 py-4">
                  <div class="flex justify-center">
                    <form action="/mylist/edit/{{$d->id}}">
                      @csrf
                      <button type="submit">
                        <a><i data-feather="edit" class="text-green-600 me-2 md:me-4"></i></a>
                      </button>
                    </form>
                    <form action="/mylist/{{$d->id}}" method="POST">
                      @method('delete')
                      @csrf
                      <button type="submit">
                        <a><i data-feather="trash-2" class="text-red-600"></i></a>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
              @endisset
            </tbody>
          </table>
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- Section end -->

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