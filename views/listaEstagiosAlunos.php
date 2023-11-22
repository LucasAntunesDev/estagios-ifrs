<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Estágios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/favicons.php'); ?>
</head>

<body class="min-w-screen max-w-full">

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] py-4">
            <i class="fa-solid fa-circle-user"></i>
            Estágios
        </h1>

        <a href="estagioAluno.php" class="bg-[#127852] rounded-full p-2 hover:bg-zinc-50
                     text-zinc-50 flex items-center justify-center border-2 border-[#127852] hover:text-[#127852]
                     mb-2 mr-8 self-end transition duration-300 ease-in-out">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>

        </a>

        <div class="relative overflow-x-auto w-11/12 border-gray-200 border-1 border-x border-y rounded-xl">
            <table class="min-w-full">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 capitalize w-min">id </th>
                        <th class="px-6 py-3 capitalize w-min">id aluno </th>
                        <th class="px-6 py-3 capitalize w-min">id empresa</th>
                        <th class="px-6 py-3 capitalize w-min">carga horária</th>
                        <th class="px-6 py-3 capitalize w-min">id coordenador</th>
                        <th class="px-6 py-3 capitalize w-min">tipo de processo</th>
                        <th class="px-6 py-3 capitalize w-min">encaminhamentos</th>
                        <th class="px-6 py-3 capitalize w-min">situação</th>
                        <th class="px-6 py-3 capitalize w-min">início</th>
                        <th class="px-6 py-3 capitalize w-min">previsão de fim</th>
                        <th class="px-6 py-3 capitalize w-min">id orientador</th>
                        <th class="px-6 py-3 capitalize w-min">id coorientador</th>
                        <th class="px-6 py-3 capitalize w-min">id supervisor</th>
                        <th class="px-6 py-3 capitalize w-min">data de fim</th>
                        <th class="px-6 py-3 capitalize w-min">id da área</th>
                        <th class="px-6 py-3 capitalize w-min">id avaliação empresa</th>
                        <th class="px-6 py-3 capitalize w-min">id termo de compromisso</th>
                        <th class="px-6 py-3 capitalize w-min">id plano de atividades</th>
                        <th class="px-6 py-3 capitalize w-min">id autoavaliação</th>
                        <th class="px-6 py-3 capitalize w-min">TCC</th>
                        <th class="px-6 py-3 capitalize w-min">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
 
                    foreach ($estagiosAlunos as $estagioAluno) {
                        echo '<tr class="border-1 border-gray-200 border-b">';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getId() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getNomeAluno(). ' ' .$estagioAluno->getIdAluno() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getNomeEmpresa() . ' ' .$estagioAluno->getIdEmpresa() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getCargaHoraria() . ' horas </td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdCoordenador() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getTipoProcessoEstagio() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getNumeroEncaminhamentos() . '</td>';
                        echo '<td class="p-1 w-min capitalize">' . $estagioAluno->getSituacaoEstagio() . '</td>';
                        echo '<td class="p-1 w-min">' . date('d/m/Y', strtotime($estagioAluno->getDataInicio())) . '</td>';
                        echo '<td class="p-1 w-min">' . date('d/m/Y', strtotime($estagioAluno->getPrevisaoFim())) . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getNomeProfessor() . ' ' .$estagioAluno->getIdOrientador() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdCoorientador() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getNomeSupervisor() . ' ' .$estagioAluno->getIdSupervisor() . '</td>';
                        echo '<td class="p-1 w-min">' . date('d/m/Y', strtotime($estagioAluno->getDataFim())) . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdArea() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdAvaliacaoEmpresa() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdTermoCompromisso() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdPlanoAtividades() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdAutoavaliacao() . '</td>';
                        echo '<td class="p-1 w-min">' . $estagioAluno->getIdTCC() . '</td>';
                        echo '<td class="p-1 w-min">';

                        echo "<a href='estagioAluno.php?id=" . $estagioAluno->getIdAluno() . "' class=' bg-[#127852] rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#127852] hover:text-[#127852] transition duration-300 ease-in-out'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirEstagioAluno.php?id=" . $estagioAluno->getIdAluno() . "' class=' bg-[#C62126] rounded-md py-1 px-4 hover:bg-zinc-50
                    text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#C62126] hover:text-[#C62126] transition duration-300 ease-in-out'>
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