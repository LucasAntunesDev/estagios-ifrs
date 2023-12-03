<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Supervisores</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
            </svg>
            Supervisores
        </h1>

        <div class="flex items-center gap-x-4 justify-start w-6/12 mb-4">

            <a href="supervisor.php" class="bg-verde-1 rounded-full p-2 hover:bg-zinc-50
         text-zinc-50 flex items-center justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out
         mb-2 mr-8 self-end">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
            </a>

            <div class="relative">
                <input id="pesquisa-input" placeholder="Procurar" type="text" class="rounded-md 
    border-0 py-1.5 pr-60 pl-10  ring-1 ring-inset ring-gray-500 
    focus:ring-2 focus:ring-inset focus:ring-vermelho outline-none text-zinc-800">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

        </div>

        <div class="relative overflow-x-auto border-gray-200 border-1 border-1 border-x border-y rounded-xl">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 capitalize w-min">Id</th>
                        <th class="px-6 py-3 capitalize w-min">
                            <div class="flex items-center gap-x-2">
                                <a <?php
                                    echo (!isset($_GET['descrescente'])) ? "href='Supervisores.php?descrescente'" : "href='Supervisores.php'";
                                    ?> class="hover:text-neutral-700">

                                    <?php
                                    if (isset($_GET['descrescente'])) {
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                 <path fill-rule="evenodd" d="M10 5a.75.75 0 01.75.75v6.638l1.96-2.158a.75.75 0 111.08 1.04l-3.25 3.5a.75.75 0 01-1.08 0l-3.25-3.5a.75.75 0 111.08-1.04l1.96 2.158V5.75A.75.75 0 0110 5z" clip-rule="evenodd" />
                                            </svg>';
                                    } else {
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z" clip-rule="evenodd" />
                                            </svg>';
                                    }
                                    ?>
                                </a>
                                Nome
                            </div>
                        </th>
                        <th class="px-6 py-3 capitalize w-min">Telefone</th>
                        <th class="px-6 py-3 capitalize w-min">Email</th>
                        <th class="px-6 py-3 capitalize w-min">Empresa</th>
                        <th class="px-6 py-3 capitalize w-min">Cargo</th>
                        <th class="px-6 py-3 capitalize w-min">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    if (isset($_GET['descrescente'])) rsort($supervisores);   

                    foreach ($supervisores as $supervisor) {
                        echo '<tr class="border-b">';
                        echo '<td class="p-1 w-min">' . $supervisor->getId() . '</td>';
                        echo '<td class="p-1 w-min">' . $supervisor->getNome() . '</td>';
                        echo '<td class="p-1 w-min">' . $supervisor->getTelefone() . '</td>';
                        echo '<td class="p-1 w-min">' . $supervisor->getEmail() . '</td>';
                        echo '<td class="p-1 w-min">' . $supervisor->getIdEmpresa() . '</td>';
                        echo '<td class="p-1 w-min">' . $supervisor->getCargo() . '</td>';
                        echo '<td class=" px-4 flex flex-col">';

                        echo "<a href='supervisor.php?id=" . $supervisor->getId() . "' class=' bg-verde-1 rounded-md py-1 px-4 hover:bg-zinc-50
                        text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirsupervisor.php?id=" . $supervisor->getId() . "' class='bg-vermelho rounded-md py-1 px-4 hover:bg-zinc-50
                        text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-vermelho hover:text-vermelho transition duration-300 ease-in-out'>
                        Excluir
                        <span class='material-symbols-outlined'>delete</span>
                        </a>";

                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include_once('views/includes/footer.php') ?>
</body>

</html>