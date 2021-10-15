<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><a href="index.php">Vissza a feltöltéshez</a></div>
        <div>
            <?php
            var_dump($_FILES);
                $target_dir = "uploads/"; //--- megadja azt a könyvtárat, ahová a fájlt elhelyezni kívánja, létező mappa a megfelelő jogosultsággal!
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //-- A $target_file megadja a feltöltendő fájl elérési útját
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                if(filter_input(INPUT_POST,"submit",FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                        $tmp_name = $_FILES["fileToUpload"]["tmp_name"]; //-- azonosító az átmeneti tárolóban
                        var_dump($tmp_name);
                        $name = $_FILES["fileToUpload"]["name"];
                        move_uploaded_file($tmp_name, "$target_dir/$name");
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
            ?>
        </div>
        <div>
            <ul>
                <li><a href="https://www.php.net/manual/en/function.mime-content-type.php" target="_blank">mime_content_type</a></li>
                <li><a href="https://www.php.net/manual/en/features.file-upload.post-method.php" target="_blank">Leírás a php.net-en</a></li>
                <li><a href="https://www.php.net/manual/en/features.file-upload.post-method.php" target="_blank">A $_FILES változóról leírás</a></li>
            </ul>
        </div>
    </body>
</html>
