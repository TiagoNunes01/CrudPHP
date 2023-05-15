<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD PHP</title>
</head>
<body class="container mt-5">

    <?php include('message.php'); ?>
    <div >
        <h4>Detalhes do aluno
            <a href="student-create.php" class="btn btn-primary">Adicionar Aluno</a>
        </h4>
    </div>
    <div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Curso</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $student)
                        {
                            ?>
                            <tr>
                                <td><?= $student['id']; ?></td>
                                <td><?= $student['name']; ?></td>
                                <td><?= $student['email']; ?></td>
                                <td><?= $student['phone']; ?></td>
                                <td><?= $student['course']; ?></td>
                                <td>
                                    <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-primary ">Visualizar</a>
                                    <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success ">Editar</a>
                                    <form action="code.php" method="POST" >
                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "<h5> Nenhum aluno cadastrado </h5>";
                    }
                ?>
                
            </tbody>
        </table>

    </div>                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>