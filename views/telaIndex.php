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

<body class="scroll-smooth">

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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-28 fill-emerald-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                </svg>
            </button> -->
        </div>

        <div class="flex justify-center items-center" id="login-div">
            <img src="views/assets/estagios_foto.png" class="2xl:h-[32rem] xl:h-96 lg:h-[28rem]">
        </div>

    </div>

    <!-- <div class="flex justify-center mb-8">
        <span class="font-bold 2xl:text-6xl xl:text-4xl text-vermelho my-4 capitalize 
                2xl:w-6/12 xl:w-8/12 text-center">
            Gerenciar
        </span>
    </div> -->

    <!-- <div class="grid grid-cols-4 justify-items-center gap-8 my-20">

    <a href="estagiosAlunos.php">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out ">
           <div class="w-available flex items-center justify-center">
          <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-28 h-28 fill-emerald-800">
                    <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z" clip-rule="evenodd" />
                    <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                </svg>
          </div>
                
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Estágios</h5>
                
            </div>
        </div>
        </a>

    <a href="alunos.php">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out ">
           <div class="w-available flex items-center justify-center">
          <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 fill-emerald-800">
            <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
            <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
            <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
        </svg>

          </div>
                
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Alunos</h5>
                
            </div>
        </div>
        </a>

    <a href="professores.php">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out ">
           <div class="w-available flex items-center justify-center">
          <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512" class="w-28 h-28 fill-emerald-800">
              <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z"/></svg>
          </div>
                
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Professores</h5>
                
            </div>
        </div>
        </a>

    <a href="empresas.php">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out ">
           <div class="w-available flex items-center justify-center">
          <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 fill-emerald-800">
            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
        </svg>

          </div>
                
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Empresas</h5>
                
            </div>
        </div>
        </a>

    <a href="supervisores.php">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out ">
           <div class="w-available flex items-center justify-center">
          <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 fill-emerald-800">
            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
            <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
        </svg>

          </div>
                
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Supervisores</h5>
                
            </div>
        </div>
        </a>

    <a href="cursos.php">
        <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
        transition duration-300 ease-in-out ">
           <div class="w-available flex items-center justify-center">
          <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
             <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" class="w-28 h-28 fill-emerald-800">
                 <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
          </div>
                
           </div>

            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Cursos</h5>
            </div>
        </div>
        </a>

        <a href="areas.php">
            <div class="max-w-sm w-56 bg-white border border-zinc-300 rounded-lg flex flex-col justify-center items-center h-56 hover:bg-zinc-50
            transition duration-300 ease-in-out">
               <div class="w-available flex items-center justify-center">
              <div class="bg-emerald-300 w-available flex justify-center items-center py-4 rounded-md">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-28 h-28 fill-emerald-800">
                <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd" />
            </svg>
    
              </div>
                    
               </div>
    
                <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-neutral-700 dark:text-white">Áreas</h5>
                </div>
            </div>
            </a>
    </div> -->

    <div class="flex flex-col justify-center items-center gap-y-10">

        <div class="flex justify-center items-center gap-x-20">
            <img src="views/assets/img-placeholder-3.png" class="h-80 rounded-md">

            <div class="flex flex-col w-3/5">
                <sapn class="font-bold text-4xl text-vermelho my-4">
                    Aprendizado
                </sapn>

                <p class="w-4/5 2xl:text-lg xl:text-md text-neutral-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis facilisis sodales sapien, eget finibus purus solli
                    citudin a. Donec volutpat sem in urna ornare vulputate.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis facilisis sodales sapien, eget finibus purus solli
                    citudin a. Donec volutpat sem in urna ornare vulputate.
                </p>
            </div>
        </div>

        <div class="flex justify-center items-center gap-x-20">
            <div class="flex flex-col w-3/5">
                <sapn class="font-bold text-4xl text-vermelho my-4">
                    Oportunidades
                </sapn>

                <p class="w-4/5 2xl:text-lg xl:text-md text-neutral-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis facilisis sodales sapien, eget finibus purus solli
                    citudin a. Donec volutpat sem in urna ornare vulputate.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <img src="views/assets/img-placeholder-4.png" class="h-80 rounded-md">
        </div>
    </div>

    </div>

    <?php include_once('views/includes/footer.php')?>
</body>

</html>