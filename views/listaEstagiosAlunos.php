<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Estágios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/favicons.php');?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] py-4">
            <i class="fa-solid fa-circle-user"></i>
            Alunos
        </h1>
        <a href="estagioAluno.php" class="bg-[#127852] rounded-full
         text-zinc-50 shadow-md hover:bg-zinc-50 p-2 flex 
        items-center transition duration-300 ease-in-out mb-2"">

            <span class=" material-symbols-outlined">
            add
            </span>
            Inserir Novo Aluno

        </a>

        <div class="flex overflow-x-auto overflow-y-auto w-11/12 border-[1px] border-zinc-300 h-screen">
            <table class="border-[1px] border-y-zinc-300 px-4 overflow-x-auto h-min">
                <thead>
                    <tr>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_aluno </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">empresa_numero_convenio </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">carga_horaria </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_coordenador </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">tipo_processo_estagio </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">encaminhamentos </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">situacao_estagio </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">data_inicio </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">previsao_fim </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_orientador </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_coorientador </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_supervisor </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">data_fim </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_area </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_avaliacao_empresa </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_termo_compromisso </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_plano_atividades </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">id_autoavaliacao </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">TCC </th>
                        <th class="text-xl font-bold border-[1px] border-zinc-300 px-1">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($estagiosAlunos as $estagioAluno) {
                        echo '<tr>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getId() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdAluno() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getEmpresaNumeroConvenio() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getCargaHoraria() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdCoordenador() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getTipoProcessoEstagio() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getEncaminhamentos() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getSituacaoEstagio() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getDataInicio() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getPrevisaoFim() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdOrientador() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdCoorientador() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdSupervisor() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getDataFim() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdArea() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdAvaliacaoEmpresa() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdTermoCompromisso() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdPlanoAtividades() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdAutoavaliacao() . '</td>';
                        echo '<td class="border-[1px] border-zinc-300 px-4">' . $estagioAluno->getIdTCC() . '</td>';
                        echo '<td class="border-[1px]  px-4 flex flex-col">';

                        echo "<a href='salvarEstagioAluno.php?id=" . $estagioAluno->getIdAluno() . "' class=' bg-[#127852] rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#127852] hover:text-[#127852]'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirEstagioAluno.php?id=" . $estagioAluno->getIdAluno() . "' class=' bg-[#C62126] rounded-md py-1 px-4 hover:bg-zinc-50
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

    </div>
</body>

</html>