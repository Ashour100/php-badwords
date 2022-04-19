<?php
    $paragrafo='Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ad eligendi, odio aliquam fugiat 
                nulla reprehenderit voluptatum facilis quo optio quaerat nesciunt rem doloremque, beatae inventore dolore, dolorum velit nobis!';
    $paragrafoCensored=str_replace($_GET["censore"],"***",$paragrafo);
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
        <p><?php echo $paragrafo; echo "<br>"; echo "length: " . strlen($paragrafo)?></p>
        <p><?php echo"Censored: " . $paragrafoCensored; echo "<br>"; echo "length: " . strlen($paragrafoCensored)?></p>
    </body>
</html>