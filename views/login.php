<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include_once('includes/menu.php'); ?>

    <div class="flex flex-row">
        <div class="flex flex-col justify-center items-center gap-2  w-[50vw]" id="login-div">
            <style>
                #login-div {
                    height: calc(100vh - 64px);
                }
            </style>

            <!-- <div class="w-[-webkit-fill-available]"> -->
            <h1 class="font-bold text-5xl text-[#C62126] my-4">
                Login
            </h1>

            <img src="views/assets/estagios_foto.png" class="h-96">
            <!-- </div> -->
        </div>

        <div class="flex justify-center items-center">
            <form action="fazerLogin.php" method="POST" class="bg-[#F6FAF8] flex flex-col justify-center 
            items-center gap-2 py-20 rounded-xl px-32">

                <fieldset class="flex flex-col 
                justify-center items-center gap-y-8 ">

                    <div>
                        <label for="login" class="block text-sm font-medium leading-6 text-[#127852] 
                        mb-2">Login</label>
                        <input type="text" name="login" id="login" class="rounded-md border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset 
                        ring-gray-500 focus:ring-2 focus:ring-inset
                        focus:ring-[#C62126] outline-none text-zinc-800">
                    </div>

                    <div>
                        <label for="senha" class="block text-sm font-medium leading-6 text-[#127852]
                        mb-2">Senha</label>
                        <input type="password" name="senha" id="senha" " class=" rounded-md border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 focus:ring-2 focus:ring-inset focus:ring-[#C62126] outline-none text-zinc-800">
                    </div>
                    <button type="submit" class="bg-[#127852] rounded-full py-1 px-24 
                    hover:bg-zinc-50 border-2 border-[#127852] hover:text-[#C62126] text-zinc-50 font-bold">
                        Entrar
                    </button>
                </fieldset>

            </form>

        </div>

    </div>

    </div>

</body>

</html>