<?php 

session_start();

if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = array();
}

if(isset($_GET['task_name'])){
    array_push($_SESSION['tasks'], $_GET['task_name']);
    unset($_GET['task_name']);
}

if(isset($_GET['clear'])){
    unset($_SESSION['tasks']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" 
rel="stylesheet"> 
    <title>Organiza 2.0</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <h1>Organiza</h1>
        </header>
        <div class="two_header">
        <div id="nome"></div>
            <section class="relogio">
                <div class="display">
                    00:00:00
                </div>
            </section>
        </div>
        <section class="form">
            <form action="" method="get">
            <label for="task_name">Digite sua tarefa</label>
                <input type="text" name="task_name" placeholder="Tarefa">
                <button type="submit">Adicionar</button>
            </form>
        </section>
        <section class="separador">
        </section>
        <section class="list-tasks">
            <?php 
            
            if(isset($_SESSION['tasks'])){
                echo '<ul>';
                
                foreach($_SESSION['tasks'] as $key => $task){
                    echo "<li>$task</li>";
                }

                echo'</ul>';
            }
            
            ?>

            <form action="" method="get">
                <input type="hidden" name="clear" value="clear">
                <button type="submit">Limpar</button>
            </form>
        </section>
        <footer class="footer">
            <p>by Nanderson Matheus Reis</p>
        </footer>
    </main>

    <script src="./assets/js/time.js"></script>
</body>
</html>