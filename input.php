<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset style="width: 400px; height: 250px; background-color:antiquewhite">
            <legend style="color:grey">Fill the input with your Name down below</legend>
            
            <label for="input-field" style="color:red">Input Section :</label>
            <br><br>
            <input type="text" id="input-field" name="input">
            
            <button type="submit" style="background-color:aqua">Submit</button>
            <br><br><br>
            <div>
                <?php
                if (isset($_POST['input'])){
                    echo '<h4><p style="color: grey">Name added: </p></h4><h1 style="color: green">' . $_POST['input'] . '</h1>';
                }
                ?>
            </div>
        </fieldset>
    </form>
</body>
</html>
