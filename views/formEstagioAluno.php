<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Formulário de Estágio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/favicons.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] my-4">
            <i class="fa-solid fa-circle-user"></i>
            Formulário de Estágio
        </h1>

        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-neutral-700 
                    hover:text-[#C62126]">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Início
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" 
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                            stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="estagiosAlunos.php" class="ms-1 text-sm font-medium text-neutral-700 
                        hover:text-[#C62126] md:ms-2">Estágios</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Formulário</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- <a href="estagiosAlunos.php" class="text-gray-900 font-bold hover:text-neutral-700">Voltar para a listagem</a> -->

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-gray-900 font-bold text-center text-xl">Dados do usuário</legend>

            <form action="salvarEstagioAluno.php" method="post" class="flex flex-col justify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $estagioAluno->getId(); ?>'>
                <div>
                    <label for="id_aluno" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Id do Aluno</label>
                    <input type="number" id="id_aluno" name="id_aluno" value='<?php echo $estagioAluno->getIdAluno(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="eid_empresa" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Empresa</label>
                    <input type="text" id="id_empresa" name="id_empresa" value='<?php echo $estagioAluno->getIdEmpresa(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="carga_horaria" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Carga Horaria</label>
                    <input type="number" id="carga_horaria" name="carga_horaria" value=" <?php echo $estagioAluno->getCargaHoraria(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="id_coordenador" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Coordenador</label>
                    <input type="number" id="id_coordenador" name="id_coordenador" value='<?php echo $estagioAluno->getIdCoordenador(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="tipo_processo_estagio" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Tipo de Processo</label>
                    <input type="text" id="tipo_processo_estagio" name="tipo_processo_estagio" value=" <?php echo $estagioAluno->getTipoProcessoEstagio(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="numero_encaminhamentos" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Número de Encaminhamentos</label>
                    <input type="text" id="numero_encaminhamentos" name="numero_encaminhamentos" value='<?php echo $estagioAluno->getNumeroEncaminhamentos(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="situacao_estagio" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Situação</label>
                    <input type="text" id="situacao_estagio" name="situacao_estagio" value=" <?php echo $estagioAluno->getSituacaoEstagio(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="data_inicio" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Data de Início</label>
                    <input type="date" id="data_inicio" name="data_inicio" value='<?php echo $estagioAluno->getDataInicio(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <input type="hidden" id="previsao_fim" name="previsao_fim" value='<?php echo $estagioAluno->getPrevisaoFim(); ?>'>

                <div>
                    <label for="id_orientador" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Orientador</label>
                    <input type="number" id="id_orientador" name="id_orientador" value=" <?php echo $estagioAluno->getIdOrientador(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="id_coorientador" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Coorientador</label>
                    <input type="number" id="id_coorientador" name="id_coorientador" value=' <?php echo $estagioAluno->getIdCoorientador(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="id_supervisor" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Supervisor</label>
                    <input type="number" id="id_supervisor" name="id_supervisor" value=" <?php echo $estagioAluno->getIdSupervisor(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <input type="hidden" id="data_fim" name="data_fim" value="<?php echo $estagioAluno->getDataFim(); ?>">

                <div>
                    <label for="id_area" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Área</label>
                    <input type="text" id="id_area" name="id_area" value=" <?php echo $estagioAluno->getIdArea(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <input type="hidden" id="id_avaliacao_empresa" name="id_avaliacao_empresa" value=" <?php echo $estagioAluno->getIdAvaliacaoEmpresa(); ?>">
                <input type="hidden" id="id_termo_compromisso" name="id_termo_compromisso" value=" <?php echo $estagioAluno->getIdTermoCompromisso(); ?>">
                <input type="hidden" id="id_plano_atividades" name="id_plano_atividades" value=" <?php echo $estagioAluno->getIdPlanoAtividades(); ?>">
                <input type="hidden" id="id_autoavaliacao" name="id_autoavaliacao" value=" <?php echo $estagioAluno->getIdAutoavaliacao(); ?>">
                <input type="hidden" id="id_tcc" name="id_tcc" value=" <?php echo $estagioAluno->getIdTCC(); ?>">

                <button type="submit" class="bg-emerald-600 rounded-full py-1 px-24 hover:bg-emerald-800 text-zinc-50 flex items-center mt-4">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    Salvar
                </button>
    </div>

    </div>




    <!-- <div> -->
    <!-- <label for="id_curso" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Avaliação da empresa</label> -->
    <!-- </div> -->

    <!-- <div> -->
    <!-- <label for="id_curso" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Termo de Compromisso</label> -->
    <!-- </div> -->

    <!-- <div> -->
    <!-- <label for="id_curso" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Plano de Atividades</label> -->
    <!-- </div> -->

    <!-- <div> -->
    <!-- <label for="id_curso" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Autoavaliação</label> -->
    <!-- </div> -->

    <!-- <div> -->
    <!-- <label for="id_curso" class="block text-sm font-medium leading-6 text-gray-900 mb-2">TCC</label> -->
    <!-- </div> -->

    <!-- <div> -->

    </form>
    </fieldset>

    </form>
    </div>

</body>

</html>