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

        <a href="area.php" class="bg-verde-1 rounded-full p-2 hover:bg-zinc-50
                     text-zinc-50 flex items-center justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out
                     mb-2 mr-8 self-end transition duration-300 ease-in-out">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>

        </a>

        <div class="relative overflow-x-auto max-w-11/12 border-gray-200 border-1 border-x border-y rounded-xl">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 capitalize w-min">Id</th>
                        <th class="px-6 py-3 capitalize w-min">Nome</th>
                        <th class="px-6 py-3 capitalize w-min">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($areas as $area) {
                        echo '<tr class="border-b">';
                        echo '<td class="p-1 w-min">' . $area->getId() . '</td>';
                        echo '<td class="p-1 w-min">' . $area->getNome() . '</td>';
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
</body>

</html>