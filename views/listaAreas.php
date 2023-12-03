<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Areas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd" />
            </svg>
            Areas
        </h1>

        <div class="flex items-center gap-x-4 justify-start w-6/12 mb-4">

            <a href="area.php" class="bg-verde-1 rounded-full p-2 hover:bg-zinc-50
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

        <div class="relative overflow-x-auto max-w-11/12 border-gray-200 border rounded-md rounded-xl">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50 text-neutral-700">
                    <tr class="border-1 border-neutral-200 border-b even:bg-zinc-50">
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Id</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">
                            <div class="flex items-center gap-x-2">
                                <a <?php
                                    echo (!isset($_GET['descrescente'])) ? "href='areas.php?descrescente'" : "href='areas.php'";
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
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-sm">
                    <?php

                    if (isset($_GET['descrescente'])) rsort($areas);

                    foreach ($areas as $area) {
                        echo '<tr class="border-1 border-neutral-200 border-b even:bg-zinc-50">';
                        echo '<td class="pl-1 pr-3 w-fit">' . $area->getId() . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . $area->getNome() . '</td>';
                        echo '<td class="border-y-[1px]  px-4 flex flex-col">';

                        echo "<a href='Area.php?id=" . $area->getId() . "'class=' bg-verde-1 rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirArea.php?id=" . $area->getId() . "' class=' bg-vermelho rounded-md py-1 px-4 hover:bg-zinc-50
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