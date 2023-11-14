<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-row justify-center items-center gap-2">

        <div class="flex flex-col justify-center text-start mx-28">
            <h1 class="font-bold text-5xl text-[#C62126] my-4">
                Estágios
            </h1>

            <p class="w-96 text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
            </p>


            <button type="submit" class="hover:bg-[#127852] rounded-full py-1 px-24 
                    bg-none border-2 border-[#127852] text-[#C62126] hover:text-zinc-50 font-bold
                    capitalize mt-10">
                Começar estágio
            </button>

            <button class="mt-8" onclick="teste()">
                <i class="fa-solid fa-chevron-down text-[#127852] text-2xl"></i>
            </button>
        </div>

        <div class="flex justify-center items-center" id="login-div" style="height: calc(100vh - 64px);">
            <img src="views/assets/estagios_foto.png" class="h-96">
        </div>

    </div>

    </div>

    <script>
        function teste() {
        window.scrollTo(0, 550)}
    </script>

</body>

</html>