<!DOCTYPE html 5>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/links.php'); ?>
</head>

<body class="mb-4 scroll-smooth">

    <?php
    include('views/includes/menu.php');
    ?>

    <div class="flex flex-row justify-center items-center gap-2 h-screen">

        <div class="flex flex-col justify-center text-start w-6/12">
            <sapn class="font-bold 2xl:text-6xl xl:text-4xl text-vermelho my-4 capitalize 
            2xl:w-6/12 xl:w-8/12">
                Começe um estágio, descubra novas Oportunidades
            </sapn>

            <p class="2xl:w-8/12 xl:w-9/12 2xl:text-xl xl:text-lg text-neutral-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
            </p>

            <a <?php echo isset($_SESSION['usuario']) ? 'href="estagioAluno.php"' : 'href="login.php"' ?>>
                <button type="submit" class="bg-verde-1 rounded-full py-2 px-16
                    hover:bg-white border-2 border-verde-1 hover:text-vermelho text-zinc-50 font-bold
                    capitalize mt-10 w-fit self-start transition duration-300 ease-in-out flex items-center
                    gap-x-1">
                    <?php if (isset($_SESSION['usuario'])) {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      ';
                        echo 'Começar estágio';
                    } else {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z" clip-rule="evenodd" />
                      </svg>
                      ';
                        echo 'Fazer Login';
                    }
                    ?>
                </button>
            </a>

            <!-- <button class="mt-8 outline-none text-verde-1 mx-auto" onclick="teste()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                </svg>
            </button> -->
        </div>

        <div class="flex justify-center items-center" id="login-div">
            <img src="views/assets/estagios_foto.png" class="2xl:h-[32rem] xl:h-96 lg:h-[28rem]">
        </div>

    </div>

    <div class="grid grid-cols-3 justify-items-center gap-4">

        <a href="">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out">
           <div class="bg-emerald-400 w-available flex items-center justify-center">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-28 h-28 fill-emerald-800">
                    <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z" clip-rule="evenodd" />
                    <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                </svg>
                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                        <stop id="stop1" stop-color="rgba(134, 239, 172, 1)" offset="0%"></stop>
                        <stop id="stop2" stop-color="rgba(34, 197, 94, 1)" offset="100%"></stop>
                    </linearGradient>
                    </defs>
                    <path fill="url(#sw-gradient)" d="M24.8,-27.6C32.5,-23.1,39.4,-15.6,41.2,-7.1C43,1.5,39.6,11.2,33.7,17.8C27.9,24.4,19.7,28,11.3,31.1C2.8,34.2,-5.8,36.9,-13.2,34.8C-20.6,32.7,-26.7,25.9,-30.1,18.2C-33.4,10.6,-34,2.3,-33.1,-6.4C-32.3,-15,-29.9,-23.9,-24.1,-28.7C-18.3,-33.6,-9.2,-34.4,-0.3,-34C8.5,-33.6,17.1,-32.1,24.8,-27.6Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>
                </svg>
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Estágios</h5>
                <!-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of
                     2021 so far, in reverse chronological order.</p> -->
            </div>
        </div>
        </a>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Alunos</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Professores</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Empresas</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Supervisores</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Cursos</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Áreas</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm w-56 bg-white border border-gray-200 rounded-lg shadow ">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Cidades</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>

    <div class="flex justify-center items-center gap-x-20">
        <img src="views/assets/img-placeholder-1.png" class="h-56">

        <div class="flex flex-col">
            <h1 class="font-bold text-4xl text-vermelho my-4">
                Aprendizado
            </h1>

            <p class="w-96 2xl:text-xl xl:text-lg text-neutral-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center gap-x-20 mt-10">
        <div class="flex flex-col">
            <h1 class="font-bold text-4xl text-vermelho my-4">
                Oportunidades
            </h1>

            <p class="w-96 2xl:text-xl xl:text-lg text-neutral-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
            </p>
        </div>

        <img src="views/assets/img-placeholder-2.png" class="h-56">
    </div>

    </div>

    <script>
        function teste() {
            window.scrollTo(0, 550)
        }
    </script>

</body>

</html>