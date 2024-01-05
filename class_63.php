<?php

    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tpm_name'] ?? null;
        
        //validation
        $allowFile = ['jpg', 'jpeg', 'png', 'gif','xlsx'];
        $fileExtionName = explode('.', $fileName);
        $actualFileExt = strtolower(end($fileExtionName)) ;

        if(empty($fileName)){
            $errFile = '<span style="color:red">Please select your file.</span>';
        }elseif(!in_array($actualFileExt, $allowFile)){
            $errFile = '<span style="color:red">Please select valid fiel.</span>';
        }else{
            //for directory make
            if(!is_dir('uploads')){
                mkdir('uploads');
            }
            //create new file name
            $fileNewName = str_shuffle(date('HisAfdYDyl')) . uniqid('', true). '.' . $actualFileExt;
            //upload file
            $fileupload = move_uploaded_file($fileTmpName,'uploads/' . $fileNewName );

            // upload file
            if($fileupload){
                echo '<span style="color:green">Please select valid fiel.</span>';
            }else{
                echo '<span style="color:red">Please check, something is wrong.</span>';
            }

        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 63, PHP file handling</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload" name="submit">
    </form>
    <br>

 <br>
    <?= "File name: ". $fileName ;?> <br>
    <?= "File Ext. name: ". $actualFileExt ;?>
    <?= $errFile ?? null; ?>


</body>
</html>