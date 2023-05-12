<?php

function display_slide ($projects){

      foreach($projects as $index => $project){ 
        $languages = explode(",",$project["languages"]);?>
        <div class="card-holder">
            <div data-slide=<?=$index +1?> class="card">
                <img src="<?=$project["lr_image"]?>" data-src="<?=$project["hr_image"]?>" height="172" alt="<?=$project["alt_text"]?>" class="card-image" />
                <div class="card-body">
                    <h2 class="card-title"><?=$project["project_name"]?></h2>
                    <p class="card-subHeading">Languages used:</p>
                    <ul class="card-languages">
                        <?php foreach($languages as $language){?>
                        <li><?=ucwords($language)?></li>
                        <?php }?>
                    </ul>
                    <a href="<?=$project["project_url"]?>" target="_blank"
                    class="card-btn card-btn-visit">Visit</a>
                    <a class="card-btn card-btn-code" target="_blank" href="<?=$project["github_url"]?>">Code</a>
                </div>
            </div>
        </div>

      <?php                
            
      } 
}
function clean($string) {
    $string = str_replace(' ', '-', $string); 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
}

function page_header (){?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="description" content="Benito a Web Developer. portfolio website">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
        rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
        <script defer src="script.js"></script>
        <title>BB7</title>
    </head>
    <body>
<?php
}
function page_footer () { ?>
        <footer>
        <div class="container">
        <div class="socials">
            <a aria-label="link to facebook" class="footer-link" href="https://www.facebook.com/benito.beceiro/" target="_blank"
                ><i class="fa-brands fa-facebook-f fa-sm"></i
            ></a>

            <a aria-label="link to instagram" class="footer-link" href="https://www.instagram.com/benito_beceiro/" target="_blank"
                ><i class="fa-brands fa-instagram fa-sm"></i></i
            ></a>
                
            <a aria-label="link to linkedin" class="footer-link" href="https://www.linkedin.com/in/benito-b-772246190/" target="_blank"
            ><i class="fa-brands fa-linkedin-in fa-sm"></i></i
            ></a>
        </div>
        </div>

    </footer>
    </body>
    </html>
<?php
}
?>

