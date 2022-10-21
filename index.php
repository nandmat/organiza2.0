<?php 

session_start();

if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = array();
}

if(isset($_GET['task_name'])){
    array_push($_SESSION['tasks'], $_GET['task_name']);
}

var_dump($_SESSION['tasks'])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" 
rel="stylesheet"> 
    <title>Tarefas</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <h1>Organiza</h1>
        </header>
        <section class="form">
            <form action="" method="get">
                <label for="task_name">Tarefa</label>
                <input type="text" name="task_name" placeholder="Tarefa">
                <button type="submit">Adicionar</button>
            </form>
        </section>
        <section class="separador">
        </section>
        <section class="list-tasks">
            <ul>
                <li>Tarefa -> 1</li>
                <li>Tarefa -> 2</li>
                <li>Tarefa -> 3</li>
            </ul>
        </section>
        <footer class="footer">
            <p>by Nanderson Matheus Reis</p>
        </footer>
    </main>

</body>
</html>