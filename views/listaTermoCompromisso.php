<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Termo de Compromisso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/favicons.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
    <h1 class="font-bold text-4xl text-vermelho py-4 flex items-center gap-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
            <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
            <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
        </svg>
        Termo de compromisso
    </h1>

        <a href="termoCompromisso.php" class="bg-verde-1 rounded-full p-2 hover:bg-zinc-50
                     text-zinc-50 flex items-center justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out
                     mb-2 mr-8 self-end transition duration-300 ease-in-out">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>

        </a>

        <div class="relative overflow-x-auto max-w-11/12 border-gray-200 border-1 border-x border-y rounded-xl">
            <table class="max-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 capitalize w-min">ID</th>
                        <th class="px-6 py-3 capitalize w-min">Arquivo</th>
                        <th class="px-6 py-3 capitalize w-min">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($termoCompromisso as $termo) {
                        echo '<tr class="p-1 w-min">';
                        echo '<td class="p-1 w-min">' . $termo->getId() . '</td>';
                        echo '<td class="p-1 w-min"><a href="uploads/' . $termo->getUrl() . '" target="_blank">Clique aqui para abrir</a></td>';
                        echo '<td class="p-1 w-min">';

                        echo "<a href='termoCompromisso.php?id=" .  $termo->getId() . "' class=' bg-verde-1 rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirTermoCompromisso.php?id=" .  $termo->getId() . "' class=' bg-vermelho rounded-md py-1 px-4 hover:bg-zinc-50
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