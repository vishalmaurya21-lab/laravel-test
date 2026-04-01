<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //     include "demo.txt";
    //     $filename=fopen("demo.txt","r");
    //     if($filename){
    //         echo " file opend successfully.";
    //         fclose($filename);
    //     }
    ?>
    <!-- READING PARTIALLY -->
    <?php
    // $filename="demo.txt";
    // $handle=fopen($filename,"r");
    // $contents=fread($handle,filesize($filename));
    // fclose($handle);
    // echo $contents;
    ?>
    <!-- File read by line -->
    <?php
    // $handle=fopen("demo.txt","r");
    // while(!feof($handle)){
    //     $line=fgets($handle);
    //     echo $line."<br>";
    // }
    // fclose($handle);
    ?>
    <!-- READ BY CHARACTER -->
    <?php
    // $handle = fopen("demo.txt", "r");
    // while (!feof($handle)) {
    //     $chars = fgetc($handle);
    //     echo $chars . " ";
    // }
    // fclose($handle);
    ?>
    <!-- WRITING TO A FILE -->
    <?php
    //$handle = fopen("C:\Demo/example.txt", "r+"); // "w" = write (overwrites existing content) here you can define the path
    //fwrite($handle, "Hello World! This content is written by Vishal Kumar\n");
    //fclose($handle);
    ?>
    <!--  -->
    <?php
    // $handle=fopen("demo.txt","w+");
    // fwrite($handle,"Kya Hall H sir jii");
    // fclose($handle);
    ?>
    <!--  -->
    <?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
</body>

</html>