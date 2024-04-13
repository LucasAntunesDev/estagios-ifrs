<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Alunos</title>
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <div class="flex justify-around items-center gap-2">

            <div class="flex justify-start items-center gap-x-12">

                <h1 class="font-bold text-3xl text-vermelho-500 py-4 flex items-center gap-x-2">
                    Alunos
                </h1>

                <div class="relative">
                    <input id="pesquisa-input" placeholder="Procurar" type="text" class="rounded-full 
                    border-0 py-1.5 pr-10 pl-10 outline-none hover:bg-slate-100
                bg-slate-50">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-600">
                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>


            </div>

            <a href="aluno.php" class="bg-verde-500 rounded-md py-1 px-4 focus:bg-slate-50
            text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-500 
            focus:text-verde-500 focus:border-verde-500 transition duration-300 ease-in-out
            hover:bg-verde-600 hover:border-verde-600 self-baseline">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                </svg>

                Adicionar aluno
            </a>

        </div>

        <div class="relative overflow-x-auto rounded-xl 2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12">
            <table class="table-auto text-gray-600 font-medium">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-verde-500 bg-slate-50">
                    <tr class="even:bg-slate-50">
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap *:w-fit *:capitalize *:pl-2 *:pr-6 *:py-3 *:whitespace-nowrap" scope="col"">
                        <div class=" flex items-center gap-x-2">
                            <a <?php
                                echo (!isset($_GET['descrescente'])) ? "href='alunos.php?descrescente'" : "href='alunos.php'";
                                ?> class="hover:text-gray-600">

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
                            Nome
        </div>
        </th>

        <th scope="col"">Matrícula</th>
                        <th scope=" col"">Data de nasc.</th>
        <th scope="col"" >
        <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
            <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
            </svg>
        </th>
        <th scope=" col"">CPF</th>
        <th scope=" col"">RG</th>
        <th scope=" col"">
        <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd" />
            </svg>
        </th>
        <th scope=" col"">
            <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
            </svg>

        </th>
        <th scope=" col"">Turma</th>
        <th scope=" col"">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path d="M14.916 2.404a.75.75 0 0 1-.32 1.011l-.596.31V17a1 1 0 0 1-1 1h-2.26a.75.75 0 0 1-.75-.75v-3.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.5a.75.75 0 0 1-.75.75h-3.5a.75.75 0 0 1 0-1.5H2V9.957a.75.75 0 0 1-.596-1.372L2 8.275V5.75a.75.75 0 0 1 1.5 0v1.745l10.404-5.41a.75.75 0 0 1 1.012.319ZM15.861 8.57a.75.75 0 0 1 .736-.025l1.999 1.04A.75.75 0 0 1 18 10.957V16.5h.25a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1-.75-.75V9.21a.75.75 0 0 1 .361-.64Z" />
            </svg>
        </th>
        <th scope=" col"">Ações</th>
        </tr>
        </thead>

        <tbody class=" text-sm bg-neutral-50/40">
            <?php

            if (isset($_GET['descrescente']))
                rsort($alunos);

            foreach ($alunos as $aluno) {
                echo '<tr class="even:bg-slate-50">';
                echo '<td class="pl-2 pr-1 w-fit">
                <div class="flex items-center">
                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">' .
                    $aluno->getId() .
                    ' </span>
                ' . $aluno->getNome() . '
                </div>
                </td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $aluno->getMatricula() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . date('d/m/Y', strtotime($aluno->getDataNascimento())) . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $aluno->getEmail() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap cpf" scope="col">' . $aluno->getCPF() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $aluno->getRG() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $aluno->getEndereco() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap phone_with_ddd" scope="col">' . $aluno->getTelefone() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col"><span class="flex items-center w-max">' . $aluno->getAnoTurma() . 'º ' . $aluno->getNomeCurso() . '</span></td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $aluno->getNomeCidade() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                    $aluno->getIdCidade() .
                    ' </span>
                        </td>';
                echo '<td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2">';

                echo "<a href='Aluno.php?id=" . $aluno->getId() . "' class='bg-verde-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-500 focus:text-verde-500 focus:border-verde-500 transition duration-300 ease-in-out
                        hover:bg-verde-600 hover:border-verde-600'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                                <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                            </svg>
                        </a>";
                echo "<a href='excluirAluno.php?id=" . $aluno->getId() . "' class='bg-vermelho-500 rounded-full py-1 px-4 focus:bg-slate-50
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