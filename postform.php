<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            border-radius: 2px;
            margin: 3px;
        }
        #submit{
            width: 150px;
            background-color: greenyellow;
            
        }
    </style>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" value="" name="name" id="name">
        <label for="name">Name</label><br>
        <input type="text" name="age" id="age">
        <label for="age">Age</label><br>
        <input type="submit" name="save" value="Submit" id="submit">
    </form>
</body>
</html>