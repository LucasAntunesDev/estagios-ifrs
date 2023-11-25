<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar professor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho my-4">
            <i class="fa-solid fa-circle-user"></i>
            Gerenciar Professor
        </h1>
        <a href="professores.php" class="text-gray-900 font-bold hover:text-gray-700">Voltar para a listagem</a>

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-gray-900 font-bold text-center text-xl">Dados do Professor</legend>

            <form action="salvarprofessor.php" method="post" class="flex flex-col justify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $professor->getId(); ?>'>

                <div>
                    <label for="nome" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Nome</label>
                    <input type="text" id="nome" name="nome" value='<?php echo $professor->getNome(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Email</label>
                    <input type="email" id="email" name="email" value='<?php echo $professor->getEmail(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">
                </div>

                <div>
                    <label for="id_area" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Área</label>
                    <input type="number" id="id_area" name="id_area" value=" <?php echo $professor->getIdArea(); ?>" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">
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