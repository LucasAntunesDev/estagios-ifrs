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

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
            </svg>

            Estágios
        </h1>

        <div class="flex items-center gap-x-4 justify-start w-6/12 mb-4">

            <a href="estagioAluno.php" class="bg-verde-1 rounded-full p-2 hover:bg-zinc-50
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

        <div class="relative overflow-x-auto 2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <th class="table-cell capitalize px-4 py-3">
                            <div class="flex items-center gap-x-2">
                                <a <?php
                                    echo (!isset($_GET['descrescente'])) ? "href='estagiosAlunos.php?descrescente'" : "href='estagiosAlunos.php'";
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
                                aluno
                            </div>
                        </th>
                        <th class="table-cell capitalize px-4 py-3">empresa</th>
                        <th class="table-cell capitalize px-4 py-3">carga horária</th>
                        <th class="table-cell capitalize px-4 py-3">coordenador</th>
                        <th class="table-cell capitalize px-4 py-3">tipo de processo</th>
                        <th class="table-cell capitalize px-4 py-3">encaminhamentos</th>
                        <th class="table-cell capitalize px-4 py-3">situação</th>
                        <th class="table-cell capitalize px-4 py-3">início</th>
                        <th class="table-cell capitalize px-4 py-3">previsão de fim</th>
                        <th class="table-cell capitalize px-4 py-3">orientador</th>
                        <th class="table-cell capitalize px-4 py-3">coorientador</th>
                        <th class="table-cell capitalize px-4 py-3">supervisor</th>
                        <th class="table-cell capitalize px-4 py-3">data de fim</th>
                        <th class="table-cell capitalize px-4 py-3">área</th>
                        <th class="table-cell capitalize px-4 py-3">termo de compromisso</th>
                        <th class="table-cell capitalize px-4 py-3">plano de atividades</th>
                        <th class="table-cell capitalize px-4 py-3">avaliação empresa</th>
                        <th class="table-cell capitalize px-4 py-3">autoavaliação</th>
                        <th class="table-cell capitalize px-4 py-3">TCC</th>
                        <th class="table-cell capitalize px-4 py-3">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-sm">
                    <?php

                    if (isset($_GET['descrescente'])) rsort($estagiosAlunos);

                    foreach ($estagiosAlunos as $estagioAluno) {
                        echo '<tr class="border-1 border-neutral-200 border-b hover:bg-zinc-50 hover:cursor-pointer">';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeAluno() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdAluno() .
                            ' </span>
                            </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeEmpresa() . '
                            <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdEmpresa() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getCargaHoraria() . ' horas </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeCoordenador() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdCoordenador() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getTipoProcessoEstagio() . '</td>';
                        echo '<td class="pl-2 pr-1 table-cell">
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getNumeroEncaminhamentos() .
                            '</sapn>
                            </td>';
                        echo '<td class="p-1 w-max capitalize">
                            <span class="';
                        switch ($estagioAluno->getSituacaoEstagio()) {
                            case 'Não iniciado':
                                echo 'bg-red-100 hover:bg-red-200 text-red-700';
                                break;
                            case 'Finalizado':
                                echo 'bg-emerald-100 hover:bg-emerald-200 text-emerald-700';
                                break;
                            default:
                                echo 'bg-yellow-100 hover:bg-yellow-200 text-yellow-800';
                                break;
                        }
                        echo ' text-sm font-medium py-1 px-2 rounded-md inline-flex items-center w-max
                        hover:cursor-pointer transition duration-300 ease-in-out">' .
                            $estagioAluno->getSituacaoEstagio() .
                            '</span>
                        </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . date('d/m/Y', strtotime($estagioAluno->getDataInicio())) . '</td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . date('d/m/Y', strtotime($estagioAluno->getPrevisaoFim())) . '</td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeOrientador() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdOrientador() .
                            ' </span>
                            </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeCoorientador() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdCoorientador() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeSupervisor() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdSupervisor() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . date('d/m/Y', strtotime($estagioAluno->getDataFim())) . '</td>';
                        echo '<td class="pl-2 pr-1 table-cell">' . $estagioAluno->getNomeArea() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdArea() .
                            ' </span>
                        </td>';

                        echo '<td class="pl-2 pr-1 table-cell">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlTermoCompromisso() . '">';
                        if ($estagioAluno->getUrlTermoCompromisso()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 table-cell">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlPlanoAtividades() . '">';
                        if ($estagioAluno->getUrlPlanoAtividades()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 table-cell">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlAvaliacaoEmpresa() . '">';
                        if ($estagioAluno->getUrlAvaliacaoEmpresa()) echo "Clique para baixar
                        </a>
                        </td>'";


                        echo '<td class="pl-2 pr-1 table-cell">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlAutoavaliacao() . '">';
                        if ($estagioAluno->getUrlAutoavaliacao()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 table-cell">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlTcc() . '">';
                        if ($estagioAluno->getUrlTcc()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 table-cell">';

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

    <?php include_once('views/includes/footer.php') ?>

</body>

</html>