<?php
    if(isset($_FILES['image'])){
    

        $name= $_FILES['image']['name'];
        $size=$_FILES['image']['size'];
        $tmp=$_FILES['image']['tmp_name'];
        $type=$_FILES['image']['type'];

        if(move_uploaded_file($tmp, "upload-image/" . $name)){
            echo "Image uploaded successfully";
        }else{
            echo "Could not uploaded";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"/><br><br>
        <input type="submit">
    </form>
</body>
</html>