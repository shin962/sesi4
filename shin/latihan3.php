<?php
    $path = "upgambar/";
    if(isset($_POST["upload"])){
        print_r($_FILES);
        if($_FILES["flGAMBAR"]["error"]==0){
            $flname = $path . basename ($_FILES["flGAMBAR"]["name"]);
            move_uploaded_file($_FILES["flGAMBAR"]["tmp_name"], $flname);
        }
    }
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php
if(isset($_POST["upload"])){
    echo "<img src='".$flname."'>";
}
?>
<br>
    <form action="latihan3.php" method="POST" enctype="multipart/form-data">
        <div>
            Upload Gambar<br>
            <input type="file" name="flGAMBAR">
        </div>
<br>
        <div>
            <input type="hidden" name="upload" value="ok">
            <button type="submit">Upload</button>
        </div>
    </form>
</body>
</html>