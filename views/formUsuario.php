<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Formulário de Usuário</title>
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center pl-16 items-start gap-2">

        <nav class="flex my-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-gray-600 
                    hover:text-vermelho-500">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Início
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="usuarios.php" class="ms-1 text-sm font-medium text-gray-600 
                        hover:text-vermelho-500 md:ms-2">Usuários</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Formulário</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="font-bold text-4xl text-vermelho-500 pb-4 flex items-center gap-x-2">
            <?php echo isset($_GET['id']) ? 'Editar' : 'Adicionar' ?> usuário
        </h1>

        <form action="salvarUsuario.php" method="post">

            <fieldset class="flex flex-col items-center p-10 w-[40rem]">
                <input type="hidden" name="id" value='<?php echo $usuario->getId(); ?>'>

                <div>
                    <label for="nome" class="label">Nome</label>
                    <div class="relative">
                        <input type="text" id="nome" name="nome" value='<?php echo $usuario->getNome(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                            </svg>

                        </div>
                    </div>
                </div>

                <div>
                    <label for="login" class="label">Login</label>

                    <div class="relative">
                        <input type="text" id="login" name="login" value='<?php echo $usuario->getLogin(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                            </svg>

                        </div>

                    </div>
                </div>

                <div>
                    <label for="senha" class="label">Senha</label>

                    <div class="relative">
                        <input type="password" id="senha" name="senha" value="" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>

                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                <a href="usuarios.php" class="btn outlined">
                    Cancelar
                </a>

                <button type="submit" class="btn primary">
                    Salvar
                </button>
            </div>

        </form>

</body>

</html>