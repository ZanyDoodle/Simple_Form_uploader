<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Uploader</title>
    <link rel="stylesheet" href="container/style.css">
</head>
<body>
    <div class="container">
    <h2>Adds Account</h2>
    <form action="process_form.php" method="post" enctype="multipart/form-data">
        <input type="text" id="name" name="name" placeholder="Name/Username/Email" required>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{11}" placeholder="Mobile Number" required>
        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,.txt" required>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
