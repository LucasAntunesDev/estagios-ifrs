<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Gerenciar Aluno</title>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="alunos.php" class="ms-1 text-sm font-medium text-gray-600 
                        hover:text-vermelho-500 md:ms-2">Alunos</a>
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

        <h1 class="flex gap-x-3 items-center font-bold text-4xl text-vermelho-500 mb-4">
            <?php echo isset($_GET['id']) ? 'Editar' : 'Adicionar' ?> aluno
        </h1>

        <form action="salvarAluno.php" method="post">
            <fieldset class="py-12 px-8 bg-zinc-100/50 border-zinc-400/10 border-[1px] rounded-lg mb-8">

                <h2 class="text-base font-semibold leading-7 text-verde-500">Informações pessoais</h2>

                <input type="hidden" name="id" value='<?php echo $aluno->getId(); ?>'>

                <div class="flex flex-col justify-center items-baseline gap-2">

                    <div class="flex gap-x-4 w-available">
                        <div class="w-available">
                            <label for="nome" class="label">Nome</label>

                            <div class="relative">
                                <input type="text" id="nome" name="nome" value='<?php echo $aluno->getNome(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="data_nascimento" class="label">Data de
                                Nascimento</label>

                            <div class="relative">

                                <input type="date" id="data_nascimento" name="data_nascimento" value=" <?php echo $aluno->getDataNascimento(); ?>" class="rounded-md 
                    border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xm="numberano_tuermlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-x-4 w-available">
                        <div class="w-available">
                            <label for="cpf" class="label">CPF (apenas
                                números)</label>

                            <div class="relative">

                                <input type="number" name="cpf" maxlength="11" minlength="11" id="cpf" value="<?php echo $aluno->getCPF(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm2.25 8.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 3a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="w-available">
                            <label for="rg" class="label">RG</label>

                            <div class="relative">
                                <input type="text" id="rg" name="rg" value='<?php echo $aluno->getRG(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                        <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm2.25 8.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 3a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>

            <fieldset class="py-12 px-8 bg-zinc-100/50 border-zinc-400/10 border-[1px] rounded-lg mb-8">

                <h2 class="text-base font-semibold leading-7 text-verde-500">Informações de contato</h2>

                <div class="flex gap-x-4 w-available">

                    <div class="w-available">
                        <label for="telefone" class="label">Telefone (apenas
                            números)</label>

                        <div class="relative">
                            <input type="number" id="telefone" name="telefone" value='<?php echo $aluno->getTelefone(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-available">
                        <label for="email" class="label">Email</label>

                        <div class="relative">
                            <input type="email" id="email" name="email" value='<?php echo $aluno->getEmail(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="flex gap-x-4 w-available">
                    <div class="w-available">
                        <label for="endereco" class="label">Endereço</label>

                        <div class="relative">
                            <input type="text" id="endereco" name="endereco" value=" <?php echo $aluno->getEndereco(); ?>" class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div class="w-available">
                        <label for="id_cidade" class="label">Cidade</label>

                        <div class="relative">
                            <select id="id_cidade" name="id_cidade" value="id_cidade" class="rounded-md 
                    border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800 w-available">
                                <?php
                                foreach ($cidades as $cidade) {
                                    $selected = ($cidade->getId() == $aluno->getIdCidade()) ? "selected" : "";
                                    echo "<option value='" . $cidade->getId() . "' " . $selected . "> " . $cidade->getNome() . "</option>";
                                }
                                ?>
                            </select>
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>

            <fieldset class="py-12 px-8 bg-zinc-100/50 border-zinc-400/10 border-[1px] rounded-lg">

                <h2 class="text-base font-semibold leading-7 text-verde-500">Informações escolares</h2>

                <div class="flex gap-x-4">

                    <div>
                        <label for="matricula" class="label">Matricula</label>

                        <div class="relative">
                            <input type="number" id="matricula" name="matricula" value='<?php echo $aluno->getMatricula(); ?>' class="rounded-md 
                border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path fill-rule="evenodd" d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="ano_turma" class="label">Ano</label>

                        <div class="relative">
                            <ul class="items-center w-full text-sm font-medium text-neutral-900 bg-white border border-neutral-200 rounded-lg sm:flex  hover:cursor-pointer">
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="1" type="radio" value="1" name="ano_turma" class="w-4 h-4 text-verde-500                                          bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500 
                                          hover:cursor-pointer" <?php echo $aluno->getAnoTurma() == "1" ? "checked" : '' ?> >

                                        <label for="1" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            1º
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="2" type="radio" value="2" name="ano_turma" class="w-4 h-4 text-verde-500
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500 hover:cursor-pointer" <?php echo $aluno->getAnoTurma() == "2" ? "checked" : '' ?>>

                                        <label for="2" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            2º
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="3" type="radio" value="3" name="ano_turma" class="w-4 h-4 text-verde-500
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-400 focus:ring-2 accent-verde-500 hover:cursor-pointer" <?php echo $aluno->getAnoTurma() == "3" ? "checked" : '' ?> >

                                        <label for="3" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            3º
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>

                    <div>
                        <label for="id_curso" class="label">Curso</label>

                        <div class="relative">
                            <select id="id_curso" name="id_curso" value="id_curso" class="rounded-md 
                    border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-400 outline-none text-zinc-800">
                                <?php
                                foreach ($cursos as $curso) {
                                    $selected = ($curso->getId() == $aluno->getIdCurso()) ? "selected" : "";
                                    echo "<option value='" . $curso->getId() . "' " . $selected . "> " . $curso->getNome() . "</option>";
                                }
                                ?>
                            </select>
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                                    <path fill-rule="evenodd" d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                <a href="alunos.php" class="btn outlined">
                    Cancelar
                </a>

                <button type="submit" class="btn primary">
                    Salvar
                </button>
            </div>

        </form>


        <?php include_once('views/includes/footer.php') ?>

</body>

</html>