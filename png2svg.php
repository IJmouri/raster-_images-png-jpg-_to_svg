<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //png or .jpeg or jpg file to pbm

    $im = new Imagick($_SERVER['DOCUMENT_ROOT'] . '/pngtosvg/image/image.png'); // jpg file is also acceptable
    $im->setImageFormat('pbm');
    $im->writeImage($_SERVER['DOCUMENT_ROOT'] . '/pngtosvg/image/pbmimage.pbm'); // pbmimage.pbm is pbm file name

    //cmd command for pbm to svg using potrace
    shell_exec('cd image && potrace ' . 'pbmimage.pbm'  . ' -b svg'); //pbm image path should be correct

    echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/pngtosvg/image/pbmimage.svg');

    ?>

</body>

</html>