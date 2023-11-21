<?php if(isset($_SESSION['usuario'])) header('location:index.php'); ?>

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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
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

            <img src="views/assets/estagios_foto.png" class="2xl:h-[32rem] xl:h-96">
            <!-- </div> -->
        </div>
    </div>

    </div>

</body>

</html>