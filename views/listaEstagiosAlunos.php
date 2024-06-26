<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Estágios</title>
    <?php include('views/includes/links.php'); ?>
</head>

<body class="min-w-screen max-w-full">

    <?php
    include('views/includes/menu.php'); ?>

    <div class="flex justify-around items-center gap-2">

        <div class="flex items-center gap-x-12">

            <h1 class="font-bold text-3xl text-vermelho-500 py-4 flex items-center gap-x-2">
                Estágios
            </h1>

            <div class="relative">
                <input id="pesquisa-input" placeholder="Procurar" type="text" class="rounded-full 
                border-0 py-1.5 pr-10 pl-10 outline-none hover:bg-slate-100
                  bg-slate-50">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-600">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>

            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="flex rounded-md items-center bg-zinc-100 py-1 px-4  " type="button">
                <!-- Situação -->
                <?php
                if (isset($_GET['nao_iniciado'])) echo 'Não iniciado';
                else if (isset($_GET['em_andamento'])) echo 'Em andamento';
                else if (isset($_GET['finalizado'])) echo 'Finalizados';
                else echo 'Todos';

                ?>
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"></path>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y rounded-lg shadow " style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(724px, 124px);" data-popper-placement="bottom">
                <ul class="py-2 text-sm font-bold text-zinc-600" aria-labelledby="dropdownCheckboxButton">

                    <li class="hover:bg-slate-50 rounded-md py-2 px-4 mx-2">
                        <a href="estagiosAlunos.php" class="flex items-center gap-x-2 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
                            </svg>
                            Limpar Filtros
                        </a>
                    </li>

                    <li class="hover:bg-slate-50 rounded-md py-2 px-4 mx-2">
                        <a href="estagiosAlunos.php?nao_iniciado" class="flex items-center gap-x-2 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-vermelho-500">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd"></path>
                            </svg>

                            Não Iniciado
                        </a>
                    </li>

                    <li class="hover:bg-slate-50 rounded-md py-2 px-4 mx-2">
                        <a href="estagiosAlunos.php?em_andamento" class="flex items-center gap-x-2 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-300">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>

                            Em andamento
                        </a>
                    </li>

                    <li class="hover:bg-slate-50 rounded-md py-2 px-4 mx-2">
                        <a href="estagiosAlunos.php?finalizado" class="flex items-center gap-x-2 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-green-400">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                            </svg>

                            Finalizado
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <a href="estagioAluno.php" class="bg-verde-500 rounded-md py-1 px-4 focus:bg-slate-50
        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-500 
        focus:text-verde-500 focus:border-verde-500 transition duration-300 ease-in-out
        hover:bg-verde-600 hover:border-verde-600 self-baseline">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
            </svg>

            Adicionar estágio
        </a>

    </div>

    </div>

    <div class="relative overflow-x-auto 2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12 
        rounded-xl mx-auto">
        <table class="table-auto text-zinc-600 font-medium">
            <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-verde-500 bg-slate-50">
                <tr class="table-row *:w-fit *:capitalize *:pl-2 *:pr-6 *:py-3 *:whitespace-nowrap">
                    <th class="w-fit capitalize pl-2 pr-6 py-2">
                        <div class="flex items-center gap-x-2">
                            <a <?php
                                echo (!isset($_GET['descrescente'])) ? "href='estagiosAlunos.php?descrescente'" : "href='estagiosAlunos.php'";
                                ?> class="hover:">

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
                            <!-- aluno -->
                        </div>
                    </th>
                    <th scope="col">empresa</th>
                    <th scope="col">área</th>
                    <th scope="col">coordenador</th>
                    <th scope="col">tipo de processo</th>
                    <!-- <th scope="col">encaminhamentos</th> -->
                    <!-- <th scope="col">situação</th> -->
                    <th scope="col">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z" clip-rule="evenodd" />
                        </svg>
                    </th>
                    <!-- <th scope="col">previsão de fim</th> -->
                    <th scope="col">orientador</th>
                    <th scope="col">coorientador</th>
                    <th scope="col">supervisor</th>
                    <!-- <th scope="col">data de fim</th> -->
                    <th scope="col">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z" clip-rule="evenodd" />
                        </svg>
                    </th>
                    <!-- <th scope="col">plano de atividades</th>
                    <th scope="col">avaliação empresa</th>
                    <th scope="col">autoavaliação</th>
                    <th scope="col">TCC</th> -->
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody class="text-sm bg-neutral-50/40">
                <?php

                if (isset($_GET['descrescente']))
                    rsort($estagiosAlunos);

                // if (isset($_GET['finalizado'])) $estagiosAlunos = $estagiosFinalizados;
                // else if (isset($_GET['nao_iniciado'])) $estagiosAlunos = $estagiosNaoIniciados;
                // else if (isset($_GET['em_andamento'])) $estagiosAlunos = $estagiosEmAndamento;

                switch (true) {
                    case isset($_GET['finalizado']):
                        $estagiosAlunos = $estagiosFinalizados;
                        break;
                    case isset($_GET['nao_iniciado']):
                        $estagiosAlunos = $estagiosNaoIniciados;
                        break;
                    case isset($_GET['em_andamento']):
                        $estagiosAlunos = $estagiosEmAndamento;
                        break;
                    default:
                        '';
                }

                foreach ($estagiosAlunos as $estagioAluno) {
                    echo '<tr class="even:bg-slate-50">';
                    echo '<td class="pl-2 w-fit py-5 whitespace-nowrap pr-8">
                                <div class="flex items-center gap-x-2">
                                    <span class="bg-sky-300 py-1 px-2 rounded-md hover:bg-sky-400 text-sky-800 select-none
                                    hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm h-fit mx-2">' .
                        $estagioAluno->getIdAluno() .
                        ' </span>
                                <div class="inline-flex flex-col">
                                <span>' . $estagioAluno->getNomeAluno() . '</span>
                                <span class="text-xs text-zinc-500">' . $estagioAluno->getCargaHoraria() . ' horas</span>
                                <span class="text-xs text-zinc-500">' . $estagioAluno->getNumeroEncaminhamentos() . ' encaminhamentos</span>
                            

                        </div>
                                <span class="text-sm font-medium py-1 px-2 rounded-md inline-flex items-center w-max
                                hover:cursor-pointer transition duration-300 ease-in-out">';

                    switch ($estagioAluno->getSituacaoEstagio()) {
                        case 'Não Iniciado':
                            echo '<button data-tooltip-target="tooltip-nao-inicado" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 fill-red-600">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                                    </svg>
                                 </button>
                            
                            <div id="tooltip-nao-inicado" role="tooltip" class="absolute z-10 invisible inline-block 
                            px-3 py-2 text-sm font-medium border border-zinc-200 rounded-lg shadow-sm opacity-0 tooltip">
                                Não Iniciado
                            </div>';
                            break;
                        case 'Finalizado':
                            echo '<button data-tooltip-target=".tooltip-finalizado" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="size-5 fill-emerald-600">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>   
                            </button>

                            <div role="tooltip" class="tooltip-finalizado absolute z-10 invisible inline-block 
                            px-3 py-2 text-sm font-medium border border-zinc-200 rounded-lg shadow-sm opacity-0 tooltip">
                                Finalizado
                            </div>';
                            break;
                        default:
                            echo '<button data-tooltip-target=".tooltip-em-andamento" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 fill-yellow-400">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                    </svg>
                                 </button>
                            
                            <div  role="tooltip" class="tooltip-em-andamento absolute z-10 invisible inline-block 
                            px-3 py-2 text-sm font-medium border border-zinc-200 rounded-lg shadow-sm opacity-0 tooltip">
                                Em Andamento
                            </div>';
                            break;
                    }
                    '</span>
                                </div>
                            </td>';

                    // echo '<td class="p-1 w-max capitalize">

                    //     </td>';

                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $estagioAluno->getNomeEmpresa() . '
                            <span class="bg-sky-300 py-1 px-2 rounded-md hover:bg-sky-400 text-sky-800 select-none
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm h-fit">' .
                        $estagioAluno->getIdEmpresa() .
                        ' </span>
                        </td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col"> 
                            <button data-tooltip-target=".tooltip-area" type="button">
                                ' . $estagioAluno->getNomeArea() . '
                                </button>
                            
                            <div id="tooltip-area" role="tooltip" class="absolute z-10 invisible inline-block tooltip-area
                            px-3 py-2 text-sm font-medium border border-zinc-200 rounded-lg shadow-sm opacity-0 tooltip">
                                ' . $estagioAluno->getIdArea() . '
                            </div>    
                    </td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $estagioAluno->getNomeCoordenador() . '
                        <span class="bg-sky-300 py-1 px-2 rounded-md hover:bg-sky-400 text-sky-800 select-none
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm h-fit">' .
                        $estagioAluno->getIdCoordenador() .
                        ' </span>
                        </td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $estagioAluno->getTipoProcessoEstagio() . '</td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap">' . date('d/m/Y', strtotime($estagioAluno->getDataInicio())) .
                        ' até ';
                    echo ($estagioAluno->getSituacaoEstagio() == 'Finalizado') ? date('d/m/Y', strtotime($estagioAluno->getDataFim()))
                        :
                        date('d/m/Y', strtotime($estagioAluno->getPrevisaoFim())) . '
                                <br><span class="py-1 px-2 rounded-md border border-zinc-200 select-none">Previsão</span>
                            ';
                    '</td>';
                    // echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap">' . date('d/m/Y', strtotime($estagioAluno->getPrevisaoFim())) . '</td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap">' . $estagioAluno->getNomeOrientador() . '
                                <span class="bg-sky-300 py-1 px-2 rounded-md hover:bg-sky-400 text-sky-800 select-none
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm h-fit">' .
                        $estagioAluno->getIdOrientador() .
                        ' </span>
                            </td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $estagioAluno->getNomeCoorientador() . '
                                <span class="bg-sky-300 py-1 px-2 rounded-md hover:bg-sky-400 text-sky-800 select-none
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm h-fit">' .
                        $estagioAluno->getIdCoorientador() .
                        ' </span>
                        </td>';
                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $estagioAluno->getNomeSupervisor() . '
                        <span class="bg-sky-300 py-1 px-2 rounded-md hover:bg-sky-400 text-sky-800 select-none
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm h-fit">' .
                        $estagioAluno->getIdSupervisor() .
                        ' </span>
                        </td>';

                    echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap">';

                    if ($estagioAluno->getUrlTermoCompromisso())
                        echo '<a target="_blank" href="uploads/' . $estagioAluno->getUrlTermoCompromisso() . '"
                        class="py-1 px-2 rounded-lg border border-zinc-200 select-none hover:bg-zinc-100
                        transition duration-300 ease-in-out flex gap-x-1 mb-2">';
                    if ($estagioAluno->getUrlTermoCompromisso())
                        echo "
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='size-5 fill-zinc-400'>
                            <path fill-rule='evenodd' d='M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z' clip-rule='evenodd' />
                        </svg>

                        Termo de compromisso 
                        </a>";

                    if ($estagioAluno->getUrlPlanoAtividades())
                        echo '<a target="_blank" href="uploads/' . $estagioAluno->getUrlPlanoAtividades() . '"
                    class="py-1 px-2 rounded-lg border border-zinc-200 select-none hover:bg-zinc-100
                    transition duration-300 ease-in-out flex gap-x-1 mb-2">';
                    if ($estagioAluno->getUrlPlanoAtividades())
                        echo "
                         <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='size-5 fill-zinc-400'>
                            <path fill-rule='evenodd' d='M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z' clip-rule='evenodd' />
                        </svg>

                        Plano de atividades
                    </a>";

                    if ($estagioAluno->getUrlAvaliacaoEmpresa())
                        echo '<a target="_blank" href="uploads/' . $estagioAluno->getUrlAvaliacaoEmpresa() . '"
                    class="py-1 px-2 rounded-lg border border-zinc-200 select-none hover:bg-zinc-100
                    transition duration-300 ease-in-out flex gap-x-1 mb-2">';
                    if ($estagioAluno->getUrlAvaliacaoEmpresa())
                        echo "
                         <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='size-5 fill-zinc-400'>
                            <path fill-rule='evenodd' d='M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z' clip-rule='evenodd' />
                        </svg>
                       


                        Avaliação da empresa
                    </a>";

                    if ($estagioAluno->getUrlAutoavaliacao())
                        echo '<a target="_blank" href="uploads/' . $estagioAluno->getUrlAutoavaliacao() . '"
                    class="py-1 px-2 rounded-lg border border-zinc-200 select-none hover:bg-zinc-100
                    transition duration-300 ease-in-out flex gap-x-1 mb-2">';
                    if ($estagioAluno->getUrlAutoavaliacao())
                        echo "
                         <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='size-5 fill-zinc-400'>
                            <path fill-rule='evenodd' d='M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z' clip-rule='evenodd' />
                        </svg>

                        Autoavaliação
                    </a>";

                    if ($estagioAluno->getUrlTCC())
                        echo '<a target="_blank" href="uploads/' . $estagioAluno->getUrlTCC() . '"
                    class="py-1 px-2 rounded-lg border border-zinc-200 select-none hover:bg-zinc-100
                    transition duration-300 ease-in-out flex gap-x-1 mb-2">';
                    if ($estagioAluno->getUrlTCC())
                        echo "
                         <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='size-5 fill-zinc-400'>
                            <path fill-rule='evenodd' d='M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z' clip-rule='evenodd' />
                        </svg>

                        TCC
                    </a>";

                    "</td>";

                    echo '<td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2" scope="col">';

                    echo "<a href='estagioAluno.php?id=" . $estagioAluno->getId() . "' class='bg-verde-500 rounded-full py-1 px-4 focus:bg-slate-50
                    text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-500 focus:text-verde-500 focus:border-verde-500 transition duration-300 ease-in-out
                    hover:bg-verde-600 hover:border-verde-600'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                        </svg>
                    </a>";

                    echo "<a href='excluirEstagioAluno.php?id=" . $estagioAluno->getId() . "' class='bg-vermelho-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-vermelho-500 focus:text-vermelho-500 focus:border-vermelho-500 transition duration-300 ease-in-out
                        hover:bg-vermelho-3 hover:border-vermelho-3'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path fill-rule='evenodd' d='M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z' clip-rule='evenodd' />
                        </svg>
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