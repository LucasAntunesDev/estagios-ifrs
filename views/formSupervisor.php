<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Supervisor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] my-4">
            <i class="fa-solid fa-circle-user"></i>
            Formulário de Supervisor
        </h1>
        <a href="supervisores.php" class="text-gray-900 font-bold hover:text-gray-700">Voltar para a listagem</a>

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-gray-900 font-bold text-center text-xl">Dados do Supervisor</legend>

            <form action="salvarSupervisor.php" method="post" class="flex flex-col justify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $supervisor->getId(); ?>'>

                <div>
                    <label for="nome" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Nome</label>
                    <input type="text" id="nome" name="nome" value='<?php echo $supervisor->getNome(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="telefone" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Telefone</label>
                    <input type="number" id="telefone" name="telefone" value=" <?php echo $supervisor->getTelefone(); ?>" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Email</label>
                    <input type="email" id="email" name="email" value='<?php echo $supervisor->getEmail(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="empresa_numero_convenio" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Número convênio</label>
                    <input type="number" id="empresa_numero_convenio" name="empresa_numero_convenio" value=" <?php echo $supervisor->getEmpresa_numero_convenio(); ?>" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Cargo</label>
                    <input type="number" id="cargo" name="cargo" value=" <?php echo $supervisor->getCargo(); ?>" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <button type="submit" class="bg-emerald-600 rounded-full py-1 px-24 hover:bg-emerald-800 text-zinc-50 flex items-center mt-4">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                        Salvar
                    </button>
            </form>
        </fieldset>

        </form>
    </div>

</body>

</html>