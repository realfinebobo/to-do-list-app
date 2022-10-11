<?php
include_once('resources/backend.php');
$toDos = fetchAll("SELECT * FROM task")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>TODO.APP</title>
</head>

<body>
    <div class="container background">
        <form action="resources/backend.php" method="POST" autocomplete="off">
            <section>
                <div class="p-5 form-group">

                    <?php
                    if (isset($_GET['message']) && $_GET['message'] == 'error') { ?>

                        <input type="text" class="form-control mb-2 text-center" name="to_do" style="margin-right: 12px; border:solid 1px red;" placeholder="This field is required" />
                        <input type="submit" value="Add Task" name="submit" class="form-control btn btn-primary w-25" style="margin:0 35%;"/>

                    <?php } else { ?>

                        <input type="text" class="form-control mb-2 text-center" name="to_do" placeholder="What do you want to do" />
                        <input type="submit" value="Add Task" name="submit" class="form-control btn btn-primary w-25" style="margin:0 35%;"/>

                    <?php } ?>

                </div>
            </section>
        </form>


        <section class="output_section">
            <table class="table table-dark table-striped rounded-bottom">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>To Do</td>
                        <td>Time Created</td>
                        <td>Click As Done</td>
                        <td>Edit To-Do</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($toDos as $toDo) {
                        $toDo_id = $toDo['id'];
                        $toDo_task = $toDo['to_do'];
                        $toDo_date = $toDo['date_time'];

                        echo "<tr>
                        <td>" . $toDo_id . "</td>
                        <td>" . $toDo_task . "</td>
                        <td>" . $toDo_date . "</td>
                        <td><button class='btn btn-success' name='done'><i class='bi bi-check2-all'></i></button></td>
                        <td><button class='btn btn-success' name='done'><i class='bi bi-pencil-square'></i></button></td>

                    </tr>";
                    }

                    ?>

                </tbody>
            </table>
        </section>
    </div>
</body>

</html>