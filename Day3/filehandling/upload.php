<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $targetDir = "uploads/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 077, true);
        }

        $filename = basename($_FILES['myfile']['name']);
        $targetfilePath = $targetDir . $filename;
        $filetype = pathinfo($targetfilePath, PATHINFO_EXTENSION);

        $allowedtypes = array("png", "jpg", "jpeg", "pdf", "txt", "gif");

        if (in_array(strtolower($filetype), $allowedtypes)) {

            if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfilePath)) {
                echo "The file " . htmlspecialchars($filename) . " has been uploaded successfully ";
            } else {
                echo "Sorry there wan an error";
            }
        } else {
            echo "Sorry these files are nor allowed";
        }
    }

    ?>

</body>

</html>