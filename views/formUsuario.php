<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Formulário de Usuário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/favicons.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho my-4">
            <i class="fa-solid fa-circle-user"></i>
            Formulário de Usuário
        </h1>
        <a href="usuarios.php" class="text-neutral-700 font-bold hover:text-gray-700">Voltar para a listagem</a>

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-neutral-700 font-bold text-center text-xl">Dados do usuário</legend>

            <form action="salvarUsuario.php" method="post" class="flex flex-col justify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $usuario->getId(); ?>'>

                <div>
                    <label for="nome" class="block text-sm font-medium leading-6 text-neutral-700 mb-2">Nome</label>
                    <div class="relative">
                        <input type="text" id="nome" name="nome" value='<?php echo $usuario->getNome(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-neutral-700 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                            </svg>

                        </div>
                    </div>
                </div>

                <div>
                    <label for="login" class="block text-sm font-medium leading-6 text-neutral-700 mb-2">Login</label>

                    <div class="relative">
                        <input type="text" id="login" name="login" value='<?php echo $usuario->getLogin(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-neutral-700 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                            </svg>

                        </div>

                    </div>
                </div>

                <div>
                    <label for="senha" class="block text-sm font-medium leading-6 text-neutral-700 mb-2">Senha</label>

                    <div class="relative">
                        <input type="password" id="senha" name="senha" value="" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-neutral-700 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>

                </div>

                <div>
                    <button type="submit" class="class=' bg-verde-1 rounded-md py-1 px-20 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 
                     hover:text-verde-1 transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        Salvar
                    </button>
            </form>
        </fieldset>

        </form>
    </div>

</body>

</html>