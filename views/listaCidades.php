<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Cidades</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/favicons.php');?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] py-4">
            <i class="fa-solid fa-circle-user"></i>
            Cidades
        </h1>
        <a href="cidade.php" class="bg-[#127852] rounded-full
         text-zinc-50 shadow-md hover:bg-zinc-50 p-2 flex 
        items-center transition duration-300 ease-in-out mb-2"">

            <span class=" material-symbols-outlined">
            add
            </span>
            Inserir Novo Cidade

        </a>
        <!-- <div class="flex overflow-x-auto overflow-y-auto w-11/12 border-[1px] border-zinc-300 h-screen"> -->
            <table class="border-y-[1px] border-y-zinc-300 px-4">
                <thead>
                    <tr>
                        <th class="text-xl font-bold border-y-[1px] border-y-zinc-300 px-1">Id</th>
                        <th class="text-xl font-bold border-y-[1px] border-y-zinc-300 px-1">Nome</th>
                        <!-- <th class="text-xl font-bold border-y-[1px] border-y-zinc-300 px-1">Ações</th> -->
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($cidades as $cidade) {
                        echo '<tr>';
                        echo '<td class="border-y-[1px] border-y-zinc-300 px-4">' . $cidade->getId() . '</td>';
                        echo '<td class="border-y-[1px] border-y-zinc-300 px-4">' . $cidade->getNome() . '</td>';
                        echo '<td class="border-y-[1px]  px-4 flex flex-col">';

                        echo "<a href='Cidade.php?id=" . $cidade->getId() . "' class=' bg-[#127852] rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#127852] hover:text-[#127852]'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirCidade.php?id=" . $cidade->getId() . "' class=' bg-[#C62126] rounded-md py-1 px-4 hover:bg-zinc-50
                    text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#C62126] hover:text-[#C62126]'>
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
    <!-- </div> -->
</body>

</html>