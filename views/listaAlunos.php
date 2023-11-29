<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Alunos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
            </svg>
            Alunos
        </h1>

        <a href="aluno.php" class="bg-verde-1 rounded-full p-2 hover:bg-zinc-50
                     text-zinc-50 flex items-center justify-center border-2 border-verde-1 hover:text-verde-1
                     mb-2 mr-8 self-end transition duration-300 ease-in-out">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>

        </a>

        <div class="relative overflow-x-auto border-gray-200 border-1 rounded-md border-gray-200 border-1 border-x border-y rounded-xl
        2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 capitalize w-min">Matrícula</th>
                        <th class="px-6 py-3 capitalize w-min">Nome</th>
                        <th class="px-6 py-3 capitalize w-min">Data de nascimento</th>
                        <th class="px-6 py-3 capitalize w-min">Email</th>
                        <th class="px-6 py-3 capitalize w-min">CPF</th>
                        <th class="px-6 py-3 capitalize w-min">RG</th>
                        <th class="px-6 py-3 capitalize w-min">Endereco</th>
                        <th class="px-6 py-3 capitalize w-min">Telefone</th>
                        <th class="px-6 py-3 capitalize w-min">Turma</th>
                        <th class="px-6 py-3 capitalize w-min">Cidade</th>
                        <th class="px-6 py-3 capitalize w-min">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    foreach ($alunos as $aluno) {
                        echo '<tr class="border-b">';
                        echo '<td class="p-1 w-min">' . $aluno->getMatricula() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getNome() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $aluno->getId() .
                            ' </span>
                            </td>';
                        echo '<td class="p-1 w-min">' . date('d/m/Y', strtotime($aluno->getDataNascimento())) . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getEmail() . '</td>';
                        echo '<td class="p-1 w-min cpf">' . $aluno->getCPF() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getRG() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getEndereco() . '</td>';
                        echo '<td class="p-1 w-min phone_with_ddd">' . $aluno->getTelefone() . '</td>';
                        echo '<td class="p-1 w-min"><span class="flex items-center w-max">' . $aluno->getAnoTurma() . 'º ' . $aluno->getNomeCurso() . '</span></td>';
                        echo '<td class="p-1 w-min">' . $aluno->getNomeCidade() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                                $aluno->getIdCidade() .
                            ' </span>
                        </td>';
                        echo '<td class=" px-4 flex flex-col">';

                        echo "<a href='Aluno.php?id=" . $aluno->getId() . "' class=' bg-verde-1 rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 hover:text-verde-1 transition duration-300 ease-in-out'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirAluno.php?id=" . $aluno->getId() . "' class=' bg-vermelho rounded-md py-1 px-4 hover:bg-zinc-50
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