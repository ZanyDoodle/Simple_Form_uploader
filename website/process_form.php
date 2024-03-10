<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="container/style.css">
</head>
<body>
    <div class="container">
        <h2>Form Submission Result</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $name = $_POST["name"];
            $mobile = $_POST["mobile"];
            $file_name = $_FILES["file"]["name"];
            $file_tmp = $_FILES["file"]["tmp_name"];
            $upload_dir = "uploads/";
            $target_file = $upload_dir . basename($file_name);
            $data = "Name/Username/Email: $name\nMobile Number: $mobile\nUploaded File: $file_name\n\n";
            $txt_file = "form/data.txt";
            $erroruploading = "There was an error uploading your file.";
            $successform = "Form saved successfully.";
            $errorform ="Data Already Exists.";
            $unbleupload ="Unable to save form data.";
            $success = "green";
            $error = "red";

            if (file_exists($txt_file) && strpos(file_get_contents($txt_file), $data) !== false)
            {
                echo "<p style='color:$error; text-align: center;'>$errorform</p>";
            } 
            else 
            {
            if (move_uploaded_file($file_tmp, $target_file)) 
            {
                
                $txt_fp = fopen($txt_file, "a"); 
                if ($txt_fp) 
                {
                    fwrite($txt_fp, $data);
                    fclose($txt_fp);
                    echo "<p style='color:$success; text-align: center;'>$successform</p>";
                } 
                else 
                {
                    echo "<p style='color:$error; text-align: center;'>$unbleupload</p>";
                }
            } 
            else 
            {
                echo "<p style='color:$error; text-align: center;'>$erroruploading</p>";
            
            }
        
        }
        
    }
        ?>
        
    </div>
</body>
</html>
