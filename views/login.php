<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include_once('includes/favicons.php'); ?>
</head>

<body>

    <?php include_once('includes/menu.php'); ?>

    <div class="flex flex-row">


        <div class="flex justify-center items-center w-[65%]">
            <!-- <form action="fazerLogin.php" method="POST" class="bg-[#F6FAF8] flex flex-col justify-center  -->
            <form action="fazerLogin.php" method="POST" class="flex flex-col justify-center 
            items-center gap-2 py-20 rounded-xl px-2">

                <fieldset class="flex flex-col 
                justify-center items-center gap-y-8 ">
                    <h1 class="font-bold text-5xl text-[#C62126] my-4">
                        Login
                    </h1>

                    <div>
                        <label for="login" class="block text-sm font-medium leading-6 text-[#127852] 
                        mb-2">Login</label>

                        <div class="relative">
                            <input type="text" name="login" id="login" class="rounded-md border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset 
                        ring-[#127852] focus:ring-2 focus:ring-inset
                        focus:ring-[#C62126] outline-none text-zinc-800">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                    </div>

                    <div>
                        <label for="senha" class="block text-sm font-medium leading-6 text-[#127852]
                        mb-2">Senha</label>

                        <div class="relative">
                            <input type="password" name="senha" id="senha" " class=" rounded-md border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-[#127852] focus:ring-2 focus:ring-inset focus:ring-[#C62126] outline-none text-zinc-800">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                                </svg>


                            </div>
                        </div>
                    </div>

                    <button type="submit" class="bg-[#127852] rounded-full py-1 px-24 
                    hover:bg-zinc-50 border-2 border-[#127852] hover:text-[#C62126] text-zinc-50 font-bold">
                        Entrar
                    </button>
                </fieldset>

            </form>

        </div>

        <div class="flex flex-col justify-center items-center gap-2" id="login-div">
            <style>
                #login-div {
                    height: calc(100vh - 64px);
                }
            </style>

            <!-- <div class="w-[-webkit-fill-available]"> -->

            <img src="views/assets/estagios_foto.png" class="h-96">
            <!-- </div> -->
        </div>
    </div>

    </div>

</body>

</html>