<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<!--
https://www.w3schools.com/php/php_file_upload.asp

php.ini - ben beállítani, Nem lehet előttük a # karakter
    file_uploads = On
    upload_tmp_dir = "C:\xampp\tmp"

Ha feltöltésnél hibaüzenetet kapunk érdemes ellenőrizni:
    upload_max_filesize = 8M
    post_max_size = 8M
    max_file_uploads = 50

hasznos:
    session.upload_progress.enabled = On
    session.upload_progress.cleanup = On
-->
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Fájl feltöltése szerverre</title>
    </head>
    <body>
        <header>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <!-- enctype = "multipart/form-data". Megadja, hogy milyen tartalomtípust kell használni az űrlap elküldésekor -->
                <!-- method = "post" beállítása is nélkülözhetetlen, ha nem csak szöveget akarunk tküldeni a szerver felé -->
                <label for="file" >Válassza ki a feltölteni kívánt fájlt! </label>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <!-- Az <input> tag type = "file" attribútuma a beviteli mezőt fájlválasztó vezérlőként mutatja, a "Browse..."/"Tallózás..." gombbal a bemeneti vezérlő mellett-->
                <button type="submit" name="submit" value="true">Fájl feltöltése</button>
            </form>
        </header>
        <div>
            <h2>Eddigi feltöltések</h2>
            <ul>
                <li><a href="images/">Képek</a></li>
                <li><a href="uploads/">Nem kép</a></li>
            </ul>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
