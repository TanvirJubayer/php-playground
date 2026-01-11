<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="task">
        <button>Add Task</button>
    </form>
</body>
</html>
    <?php
        // echo $_POST['task'] ?? '';

        // echo "you added:" . $_POST["task"] ?? '';

        // echo "You typed: " . ($_POST['task'] ?? '');

        // if (isset($_POST['task'])){
        //     echo "you typed: " . $_POST['task'];
        // }

        if (isset($_POST['task'])){
            echo '<h4><p style="color: red">You added:</p></h4><h1 style="color: green">' . $_POST['task'] . '</h1>';

            // echo "<p style=\"color:red\">You added: </p>" . $_POST['task'];

        }
