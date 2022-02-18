<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogpage.css">
    <title>Blog</title>
</head>
<body>
    <div class="wrapper">
    <?php
$bestand = fopen('blog.txt', 'r');
if($bestand){
while(!feof($bestand)){
$gegevens = fgets($bestand);
$gegevens = explode("*", $gegevens);
 
 if(!empty($gegevens[0])){
         echo  '<div class="blog_post">
            <div class="image-container">
                <img src="uploads/profile_icon.jpg" alt="">
            </div>
            <div class="container">
              <h3>18-2-2022</h3>
              <h1>'.$gegevens[0].'</h1><p><br>'.
              $gegevens[1].'<p></div></div>';
 }

         }
        
} 
else{
    echo "er ging iets mis";
}


?>
</div>
    
     

    
    
</body>
</html>





