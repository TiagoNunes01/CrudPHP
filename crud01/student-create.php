<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Criar aluno</title>
</head>
<body>

    <div class="container mt-5">
        <?php include('message.php'); ?>

        <div>
            <h4>Adicionar aluno
                <a href="index.php" class="btn btn-danger">VOLTAR</a>
            </h4>
        </div>
        <div >

            <form action="code.php" method="POST">

                <div>
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div>
                    <label>Telefone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div>
                    <label>Curso</label>
                    <input type="text" name="course" class="form-control">
                </div>
                <div>
                    <button type="submit" name="save_student" class="btn btn-primary">Salvar Aluno</button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>