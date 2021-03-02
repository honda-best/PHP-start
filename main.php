<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>


<div class="flex-container">

    <div class="header">     
       <?php include 'logo.inc.php' ?>         
       <?php include 'menu.inc.php' ?>	   
    </div>       

    <div class="about_me">
 
        <h1>  <?php  echo $p  ?> </h1>

        <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="./img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                <p> Меня зовут 
                <?php echo $name, ' ', $surname . '<br>'; 
                  echo 'Я живу в городе', ' ', $city; ?>                                      
                </p> 
   
                <p> Мне
                <?php  echo $age;   ?>          
                лет </p>
                <p>
                    Я люблю: html, чистый css <br>
                    Не люблю: javascript <br>
                    Ненавижу: bootstrap <br>
                    Изучаю: РНР <br>
                </p>
                </div>
        </div>
    </div>
        <div class="knowledge">
             
            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                               
            <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo '10 + 20 = ', $c;
            ?>   <br>                
             <?php
                echo $d;
            ?> 

        </div>

    <?php include 'footer.inc.php' ?>

</div>
</body>
</html>
