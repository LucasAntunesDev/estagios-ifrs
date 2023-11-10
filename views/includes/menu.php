<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="flex flex-row justify-between items-center px-12 shadow-md gap-x-4 
h-16 bg-[#127852] text-zinc-50 border-b-[3px] border-[#517174]">

<img src="views/assets/IFRS W.png" alt="Logo do IFRS" class="h-10">

<ul class="flex flex-row gap-x-4">

    <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
        <a href="livros.php">
            <i class="fa-solid fa-book"></i>
            Livros
        </a>
    </li>
    
    <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
        <i class="fa-solid fa-graduation-cap"></i>
        <a href="alunos.php">Alunos</a>
    </li>

    <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
        <i class="fa-solid fa-circle-user"></i>
        <a href="usuarios.php">Usuarios</a>
    </li>

    <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
        <i class="fa-solid fa-list-check"></i>
        <a href="retiradas.php">Retiradas</a>
    </li>
    
    <li class="w-fit flex hover:text-red-600 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <a href="logout.php">Sair</a>
    </li>
</ul>

<?php 
    echo isset($_SESSION['usuario']) ? "<div class='flex justify-center items-center gap-x-2'><i class='fa-solid fa-circle-user text-xl'></i> <span class='font-bold text-zinc-50 hover:text-zinc-200'>" .$_SESSION['usuario']->getNome() ."</span></div>" : 
    "<div class='flex justify-center items-center gap-x-2'><a href='login.php' class='font-bold hover:text-zinc-200'><i class='fa-solid fa-circle-user text-xl'></i> Identifique-se</a></div>" 
?>

</div>