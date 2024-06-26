<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Gerenciar Estágio</title>
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center pl-16 items-start gap-2">

        <nav class="flex my-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-gray-600 
                    hover:text-vermelho-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Início
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-neutral-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="estagiosAlunos.php" class="ms-1 text-sm font-medium text-gray-600 
                        hover:text-vermelho-500 md:ms-2">Estágios</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-neutral-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-neutral-500 md:ms-2">Formulário</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="font-bold text-4xl text-vermelho-500 mb-4">
            <?php echo isset($_GET['id']) ? 'Editar' : 'Adicionar' ?> estágio
        </h1>

        <form action="salvarEstagioAluno.php" method="post" class="flex flex-col  gap-2" enctype=multipart/form-data>
            <fieldset class="py-12 px-8 bg-zinc-100/50 border-zinc-400/10 border-[1px] rounded-lg mb-8">

                <h2 class="text-base font-semibold leading-7 text-verde-500">Informações básicas</h2>

                <input type="hidden" name="id" value='<?php echo $estagioAluno->getId(); ?>'>

                <div class="flex flex-col justify-center items-baseline gap-2">

                    <div class="w-available">
                        <label for="id_aluno" class="label">Aluno</label>
                        <div class="relative ">
                            <select id="id_aluno" name="id_aluno" value="id_aluno" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-72 pr-10">
                                <?php
                                if (isset($_GET['id'])) {
                                    foreach ($alunos as $aluno) {
                                        $selected = ($aluno->getId() == $estagioAluno->getIdAluno()) ? "selected" : "";
                                        echo "<option value='" . $aluno->getId() . "' " . $selected . "> " . $aluno->getNome() . "</option>";
                                    }
                                } else {
                                    foreach ($alunosSemEstagio as $alunoSemEstagio) {
                                        $selected = ($alunoSemEstagio->getId() == $estagioAluno->getIdAluno()) ? "selected" : "";
                                        echo "<option value='" . $alunoSemEstagio->getId() . "' " . $selected . "> " . $alunoSemEstagio->getNome() . "</option>";
                                    }
                                }
                                ?>
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-x-4">

                        <div>
                            <label for="id_empresa" class="label">Empresa</label>

                            <div class="relative">
                                <select id="id_empresa" name="id_empresa" value="id_empresa" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300  bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                    <?php
                                    foreach ($empresas as $empresa) {
                                        $selected = ($empresa->getId() == $estagioAluno->getIdEmpresa()) ? "selected" : "";
                                        echo "<option value='" . $empresa->getId() . "' " . $selected . "> " . $empresa->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path fill-rule="evenodd" d="M4 16.5v-13h-.25a.75.75 0 010-1.5h12.5a.75.75 0 010 1.5H16v13h.25a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H4zm3-11a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM7.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM11 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="data_inicio" class="label">Data de Início</label>
                            <input type="date" id="data_inicio" name="data_inicio" value='<?php echo $estagioAluno->getDataInicio(); ?>' class="rounded-md border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300 focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                        </div>

                        <div>
                            <label for="carga_horaria" class="label">Carga horária</label>
                            <div class="rounded-md border-0 py-1.5  ring-1 ring-inset ring-neutral-300 focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                <input type="text" id="carga_horaria" name="carga_horaria" value="<?php echo $estagioAluno->getCargaHoraria(); ?>" maxlength="3" pattern="[0-9]{3}" class="w-12 ml-2 mr-2 border-r border-r-neutral-200 outline-none invalid:text-vermelho-500">
                                <span class="pr-2">horas</span>
                            </div>

                        </div>

                    </div>

                    <div class="flex gap-x-4">
                        <div>
                            <label for="tipo_processo_estagio" class="label">Tipo de Processo</label>

                            <ul class="items-center w-full text-sm font-medium text-neutral-900 bg-white border border-neutral-200 rounded-lg sm:flex  hover:cursor-pointer">
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="processo_fisico" type="radio" value="Físico" name="tipo_processo_estagio" <?php echo $estagioAluno->getTipoProcessoEstagio() == "Físico" ? "checked" : '' ?> class="w-4 h-4 text-verde-500
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500 
                                          hover:cursor-pointer">

                                        <label for="processo_fisico" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Físico
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="processo_digital" type="radio" value="Digital" name="tipo_processo_estagio" <?php echo $estagioAluno->getTipoProcessoEstagio() == "Digital" ? "checked" : '' ?> class="w-4 h-4 text-verde-500
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500
                                           hover:cursor-pointer">

                                        <label for="processo_digital" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Digital
                                        </label>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div>
                            <label for="id_area" class="label">Area</label>

                            <div class="relative">
                                <select id="id_area" name="id_area" value="id_area" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                    <?php
                                    foreach ($areas as $area) {
                                        $selected = ($area->getId() == $estagioAluno->getIdArea()) ? "selected" : "";
                                        echo "<option value='" . $area->getId() . "' " . $selected . "> " . $area->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="situacao_estagio" class="label">Situação</label>

                            <ul class="items-center w-full text-sm font-medium text-neutral-900 bg-white border border-neutral-200 rounded-lg sm:flex  hover:cursor-pointer">
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="em_andamento" type="radio" value="em andamento" name="situacao_estagio" class="w-4 h-4 text-verde-500 <?php echo $estagioAluno->getSituacaoEstagio() == "Em andamento" ? "checked" : '' ?>
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500 
                                          hover:cursor-pointer">

                                        <label for="em_andamento" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Em andamento
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="nao_inciado" type="radio" value="não iniciado" name="situacao_estagio"  <?php echo $estagioAluno->getSituacaoEstagio() == "não iniciado" ? "checked" : '' ?> class="w-4 h-4 text-verde-500
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500
                                           hover:cursor-pointer">

                                        <label for="nao_inciado" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Não Iniciado
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="finalizado" type="radio" value="finalizado" name="situacao_estagio"  <?php echo $estagioAluno->getSituacaoEstagio() == "finalizado" ? "checked" : '' ?> class="w-4 h-4 text-verde-500
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500
                                           hover:cursor-pointer">

                                        <label for="finalizado" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Finalizado
                                        </label>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

            </fieldset>


            <input type="hidden" id="numero_encaminhamentos" name="numero_encaminhamentos" value='<?php echo $estagioAluno->getNumeroEncaminhamentos(); ?>'>

            <input type="hidden" id="previsao_fim" name="previsao_fim" value='<?php echo $estagioAluno->getPrevisaoFim(); ?>'>

            <fieldset class="py-12 px-8 bg-zinc-100/50 border-zinc-400/10 border-[1px] rounded-lg">

                <h2 class="text-base font-semibold leading-7 text-verde-500">Documentos</h2>

                <div class="flex gap-x-4 w-available">
                    <div>
                        <div>
                            <label for="id_coordenador" class="label">Coordenador</label>

                            <div class="relative">
                                <select id="id_coordenador" name="id_coordenador" value="id_coordenador" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                    <?php
                                    foreach ($coordenadores as $coordenador) {
                                        $selected = ($coordenador->getId() == $estagioAluno->getIdCoordenador()) ? "selected" : "";
                                        echo "<option value='" . $coordenador->getId() . "' " . $selected . "> " . $coordenador->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="id_orientador" class="label">Orientador</label>

                        <div class="relative">
                            <select id="id_orientador" name="id_orientador" value="id_orientador" class="rounded-md 
                                border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                <?php
                                foreach ($orientadores as $orientador) {
                                    $selected = ($orientador->getId() == $estagioAluno->getIdOrientador()) ? "selected" : "";
                                    echo "<option value='" . $orientador->getId() . "' " . $selected . "> " . $orientador->getNome() . "</option>";
                                }
                                ?>
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="id_coorientador" class="label">Coorientador</label>

                        <div class="relative">
                            <select id="id_coorientador" name="id_coorientador" value="id_coorientador" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                <?php
                                foreach ($coorientadores as $coorientador) {
                                    $selected = ($coorientador->getId() == $estagioAluno->getIdCoorientador()) ? "selected" : "";
                                    echo "<option value='" . $coorientador->getId() . "' " . $selected . "> " . $coorientador->getNome() . "</option>";
                                }
                                ?>
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="id_supervisor" class="label">Supervisor</label>

                        <div class="relative">
                            <select id="id_supervisor" name="id_supervisor" value="id_supervisor" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                <?php
                                foreach ($supervisores as $supervisor) {
                                    $selected = ($supervisor->getId() == $estagioAluno->getIdSupervisor()) ? "selected" : "";
                                    echo "<option value='" . $supervisor->getId() . "' " . $selected . "> " . $supervisor->getNome() . "</option>";
                                }
                                ?>
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>

                            </div>
                        </div>

                    </div>

                    <input type="hidden" id="data_fim" name="data_fim" value="<?php echo $estagioAluno->getDataFim(); ?>">

                </div>

                <div class="flex gap-x-4">

                    <div>
                        <label for="url_termo_compromisso" class="label">Termo Compromisso</label>
                        <input type="file" id="url_termo_compromisso" name="url_termo_compromisso" accept="application/pdf" value='<?php echo $estagioAluno->getUrlTermoCompromisso(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                    </div>

                    <input type="hidden" name="url_plano_atividades" value='<?php echo $estagioAluno->getUrlPlanoAtividades(); ?>'>
                    <div>
                        <label for="url_plano_atividades" class="label">Plano Atividades</label>
                        <input type="file" id="url_plano_atividades" name="url_plano_atividades" accept="application/pdf" value='<?php echo $estagioAluno->getUrlPlanoAtividades(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                    </div>

                </div>

                <div class="flex gap-x-4">

                    <input type="hidden" name="url_avaliacao_empresa" value='<?php echo $estagioAluno->getUrlAvaliacaoEmpresa(); ?>'>
                    <div>
                        <label for="url_avaliacao_empresa" class="label">Avaliação Empresa</label>
                        <input type="file" id="url_avaliacao_empresa" name="url_avaliacao_empresa" accept="application/pdf" value='<?php echo $estagioAluno->getUrlAvaliacaoEmpresa(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                    </div>

                    <input type="hidden" name="url_autoavaliacao" value='<?php echo $estagioAluno->getUrlAutoavaliacao(); ?>'>
                    <div>
                        <label for="url_autoavaliacao" class="label">Autoavaliação</label>
                        <input type="file" id="url_autoavaliacao" name="url_autoavaliacao" accept="application/pdf" value='<?php echo $estagioAluno->getUrlAutoavaliacao(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                    </div>

                </div>

                <div class="flex gap-x-4">

                    <input type="hidden" name="url_tcc" value='<?php echo $estagioAluno->getUrlTcc(); ?>'>
                    <div>
                        <label for="url_tcc" class="label">TCC</label>
                        <input type="file" id="url_tcc" name="url_tcc" accept="application/pdf" value='<?php echo $estagioAluno->getUrlTcc(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                    </div>

                </div>

    </div>

    </div>
    </fieldset>

    <div class="flex items-center gap-x-2 justify-center">
        <a href="estagiosAlunos.php" class="btn outlined">
            Cancelar
        </a>

        <button type="submit" class="btn primary">
            Salvar
        </button>
    </div>

    </form>

    </form>
    </div>

    <?php include_once('views/includes/footer.php') ?>

</body>

</html>