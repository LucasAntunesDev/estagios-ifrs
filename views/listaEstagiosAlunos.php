<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Estágios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body class="min-w-screen max-w-full">

    <?php include('views/includes/menu.php') ?>
    <?php
        echo'<pre>';
        var_dump($estagiosAlunos);
        echo'</pre>';
    ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
            </svg>

            Estágios
        </h1>

        <a href="estagioAluno.php" class="bg-[#127852] rounded-full p-2 hover:bg-zinc-50
                     text-zinc-50 flex items-center justify-center border-2 border-[#127852] hover:text-[#127852]
                     mb-2 mr-8 self-end transition duration-300 ease-in-out">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>

        </a>

        <div class="relative overflow-x-auto border-gray-200 border-1 border-x border-y rounded-xl
        2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <!-- <th class="px-6 py-3 capitalize ">id </th> -->
                        <th class="table-cell px-6 py-3 capitalize ">aluno </th>
                        <th class="table-cell px-6 py-3 capitalize ">empresa</th>
                        <th class="table-cell px-6 py-3 capitalize ">carga horária</th>
                        <th class="table-cell px-6 py-3 capitalize ">coordenador</th>
                        <th class="table-cell px-6 py-3 capitalize ">tipo de processo</th>
                        <th class="table-cell px-6 py-3 capitalize ">encaminhamentos</th>
                        <th class="table-cell px-6 py-3 capitalize">situação</th>
                        <th class="table-cell px-6 py-3 capitalize ">início</th>
                        <th class="table-cell px-6 py-3 capitalize ">previsão de fim</th>
                        <th class="table-cell px-6 py-3 capitalize ">orientador</th>
                        <th class="table-cell px-6 py-3 capitalize ">coorientador</th>
                        <th class="table-cell px-6 py-3 capitalize ">supervisor</th>
                        <th class="table-cell px-6 py-3 capitalize ">data de fim</th>
                        <th class="table-cell px-6 py-3 capitalize ">área</th>
                        <th class="table-cell px-6 py-3 capitalize ">id avaliação empresa</th>
                        <th class="table-cell px-6 py-3 capitalize ">id termo de compromisso</th>
                        <th class="table-cell px-6 py-3 capitalize ">id plano de atividades</th>
                        <th class="table-cell px-6 py-3 capitalize ">id autoavaliação</th>
                        <th class="table-cell px-6 py-3 capitalize ">TCC</th>
                        <th class="table-cell px-6 py-3 capitalize ">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    foreach ($estagiosAlunos as $estagioAluno) {
                        echo '<tr class="border-1 border-gray-200 border-b">';
                        // echo '<td class="p-1 table-cell">' . $estagioAluno->getId() . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeAluno() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdAluno() .
                            ' </span>
                            </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeEmpresa() . '
                            <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdEmpresa() .
                            ' </span>
                        </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getCargaHoraria() . ' horas </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeCoordenador() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdCoordenador() .
                            ' </span>
                        </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getTipoProcessoEstagio() . '</td>';
                        echo '<td class="p-1 table-cell">
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getNumeroEncaminhamentos() .
                            '</sapn>
                            </td>';
                        echo '<td class="p-1 w-max capitalize">
                            <span class="';
                        switch ($estagioAluno->getSituacaoEstagio()) {
                            case 'em andamento':
                                echo 'bg-yellow-100 hover:bg-yellow-200 text-yellow-800';
                                break;
                            case 'finalizado':
                                echo 'bg-emerald-100 hover:bg-emerald-200 text-emerald-700';
                                break;
                            default:
                                echo 'bg-red-100 hover:bg-red-200 text-red-700';
                                break;
                        }
                        echo ' text-sm font-medium py-1 px-2 rounded-md inline-flex items-center w-max
                        hover:cursor-pointer transition duration-300 ease-in-out">' .
                            // hover:cursor-pointer transition duration-300 ease-in-out font-semibold">' . 
                            $estagioAluno->getSituacaoEstagio() .
                            '</span>
                        </td>';
                        echo '<td class="p-1 table-cell">' . date('d/m/Y', strtotime($estagioAluno->getDataInicio())) . '</td>';
                        echo '<td class="p-1 table-cell">' . date('d/m/Y', strtotime($estagioAluno->getPrevisaoFim())) . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeOrientador() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdOrientador() .
                            ' </span>
                            </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeCoorientador() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdCoorientador() .
                            ' </span>
                        </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeSupervisor() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdSupervisor() .
                            ' </span>
                        </td>';
                        echo '<td class="p-1 table-cell">' . date('d/m/Y', strtotime($estagioAluno->getDataFim())) . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getNomeArea() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdArea() .
                            ' </span>
                        </td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getUrlAvaliacaoEmpresa() . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getUrlTermoCompromisso() . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getUrlPlanoAtividades() . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getUrlAutoavaliacao() . '</td>';
                        echo '<td class="p-1 table-cell">' . $estagioAluno->getUrlTcc() . '</td>';
                        echo '<td class="p-1 table-cell">';

                        echo "<a href='estagioAluno.php?id=" . $estagioAluno->getId() . "' class=' bg-[#127852] rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#127852] hover:text-[#127852] transition duration-300 ease-in-out'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirEstagioAluno.php?id=" . $estagioAluno->getId() . "' class=' bg-vermelho rounded-md py-1 px-4 hover:bg-zinc-50
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