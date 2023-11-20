<!DOCTYPE html 5>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/favicons.php');?>
</head>

<body class="mb-4">

    <?php
    include('views/includes/menu.php');
    ?>

    <div class="flex flex-row justify-center items-center gap-2 bg-[url('assets/teste-fundo.png')]">

        <div class="flex flex-col justify-center text-start w-6/12">
            <sapn class="font-bold 2xl:text-5xl xl:text-4xl text-[#C62126] my-4 capitalize 
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

            <a href="estagioAluno.php">
                <button type="submit" class="hover:bg-[#127852] rounded-full py-2 px-16
                    bg-none border-2 border-[#127852] text-[#C62126] hover:text-zinc-50 font-bold
                    capitalize mt-10 w-fit mx-auto">
                    Começar estágio
                </button>
            </a>

            <button class="mt-8" onclick="teste()">
                <i class="fa-solid fa-chevron-down text-[#127852] text-2xl"></i>
            </button>
        </div>

        <div class="flex justify-center items-center" id="login-div" style="height: calc(100vh - 64px);">
            <img src="views/assets/estagios_foto.png" class="2xl:h-[32rem] xl:h-96">
        </div>

    </div>

    <div class="flex justify-center items-center gap-x-20">
        <img src="views/assets/img-placeholder-1.png" class="h-56">

        <div class="flex flex-col">
            <h1 class="font-bold text-4xl text-[#C62126] my-4">
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
            <h1 class="font-bold text-4xl text-[#C62126] my-4">
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