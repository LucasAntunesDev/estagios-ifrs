<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Formulário de Estágio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/favicons.php');?>
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] my-4">
            <i class="fa-solid fa-circle-user"></i>
            Formulário de Estágio
        </h1>
        <a href="estagiosAlunos.php" class="text-gray-900 font-bold hover:text-gray-700">Voltar para a listagem</a>

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
                    <label for="empresa_numero_convenio" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Empresa</label>
                    <input type="text" id="empresa_numero_convenio" name="empresa_numero_convenio" value='<?php echo $estagioAluno->getEmpresaNumeroConvenio(); ?>' class="rounded-md 
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

                <!-- <div> -->
                    <!-- <label for="rg" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Encaminhamentos</label> -->
                    <input type="hidden" id="rg" name="rg" value='<?php echo $estagioAluno->getEncaminhamentos(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                <!-- </div> -->

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

                <div>
                    <label for="id_orientador" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Orientador</label>
                    <input type="number" id="id_orientador" name="id_orientador" value=" <?php echo $estagioAluno->getIdOrientador(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="id_coorientador" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Coorientador</label>
                    <input type="number" id="id_coorientador" name="id_coorientador" value='<?php echo $estagioAluno->getIdCoorientador(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <div>
                    <label for="id_supervisor" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Supervisor</label>
                    <input type="number" id="id_supervisor" name="id_supervisor" value=" <?php echo $estagioAluno->getIdSupervisor(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <input type="hidden" name="id_curso" value='<?php echo $estagioAluno->getDataFim(); ?>'>
                <!-- <input type="hidden" id="id_curso" name="id_curso" value=" <?php //echo $estagioAluno->getIdCurso(); ?>"> -->
                <!-- <div>
                    <label for="id_curso" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Curso</label>
                    <input type="number" id="id_curso" name="id_curso" value=" <?php //echo $estagioAluno->getIdCurso(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div> -->

                <div>
                    <label for="id_area" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Área</label>
                    <input type="text" id="id_area" name="id_area" value=" <?php echo $estagioAluno->getIdArea(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>

                <input type="text" id="id_area" name="id_area" value=" <?php echo $estagioAluno->getAvaliacaoEmpresa(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">
                </div>
                <input type="text" id="id_termo_compromisso" name="id_termo_compromisso" value=" <?php echo $estagioAluno->getIdTermoCompromisso(); ?>">
                <input type="text" id="id_plano_atividades" name="id_plano_atividades" value=" <?php echo $estagioAluno->getIdPlanoAtividades(); ?>">
                <input type="text" id="id_autoavaliacao" name="id_autoavaliacao" value=" <?php echo $estagioAluno->getIdAutoavaliacao(); ?>">
                <input type="text" id="id_tcc" name="id_tcc" value=" <?php echo $estagioAluno->getIdTCC(); ?>">
              
                <button type="submit" class="bg-emerald-600 rounded-full py-1 px-24 hover:bg-emerald-800 text-zinc-50 flex items-center mt-4">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                        Salvar
                    </button>
                
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