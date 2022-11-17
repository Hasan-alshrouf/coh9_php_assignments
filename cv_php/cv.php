<?php

$id_term = isset($_GET['id']) ? $_GET['id'] : null;

define('CV', $id_term);


$all_cv = json_decode(file_get_contents('./all_cv.json'));

$final_cv = array();

if (!empty($id_term)) { 
    foreach ($all_cv as $cv) {
        
        if ($cv->id == CV) {  
          
            $final_cv[] = $cv;  
        }
    }
        if(empty($final_cv)){
            die('No cv were found using your id ');

        }

    
} else{
    die('you are trying to access directly without specifing a search term');
}
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./folder_css/cv2.css">
    <title>Create your CV</title>


</head>

<body>
    

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">

                <img class="navbar-brand"
                    src="./img/initial-cv-letter-logo-with-creative-modern-business-typography-vector-template-creative-abstract-letter-cv-logo-design-2B06W5R.jpg"
                    width="70rem">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white ms-5" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white ms-5" href="./">Create Your CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white ms-5" href="#">Your CV</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center my-4 fo  text-secondary">
            <h1 >Your CV</h1>
            <hr class="border-style: inset;
            border-width: 1px;">

        </div>
        <?php foreach ($final_cv as $specific) 
       ?>
 
       <?php if(!isset($_GET['name'])) : ?>
        
       <div class="id_div my-5 bg-light  d-flex justify-content-center align-items-center mt-0 fs-4 "id="dialog" >  
        <p >This is your CV ID, you should use it next time to access your CV : <?= $specific->id ?>  </p>
        </div>
        <?php endif; ?>
       
       
    <div class="all_item">
  

    
    <header>
    <hr class="" >
    <hr>
   
        <div id="id1">
            <img id="img" src="<?= $specific->picture ?>" alt="Paris" width="240" height="320">
            <div>
                <P id="name"> <?= $specific->First_name ?>  <?= $specific->Surname ?></P>
                <p id="web"><?= $specific->Profession ?></p>
            </div>


        </div>
        <nav id="navv">
            <ul>
                <li><a href="<?= $specific->Email ?>" target="_blank " title=""> Email </a></li>
                <li><a href="https://github.com/hasan-shrouf" target="_blank " title=""> Github </a></li>
                <li><a href="hasanalshrouf3@gmail.com" target="_blank " title=""> facebook </a></li>
                </li>
            </ul>
        </nav>
    </header>




    <main>
        <!--my profile section -->
        <section id="profile-section">

            <h3 class="profilee">Profile</h3>
            <article>
                <p><?= $specific->Profile ?></p>
            </article>
        </section>
        

        <!--my Experience section-->
        <section>
            <h3 id="exp">Experience :</h3>
            
            <ol>
                <li><?= $specific->job_title ?></li>
                <article>
                    <p><?= $specific->decsription ?>
                    </p>
                </article>

                <li>programmer</li>
                <article>
                    <p>The Progressive News Agency Scoop.me offers media and authors all over the world the opportunity
                        to
                        republish the content shared on Scoop.me free of charge – both for print and online. The
                        articles
                        can
                        either be translated or republished in the original language.</p>
                </article>
            </ol>
        </section>


        <!--my Skills section-->
        <div id="section-and">
            <section id="skills">
                <h3>Skills:</h3>
                <ul>
                    <li><?= $specific->skils1 ?></li>
                    <li><?= $specific->skils2 ?></li>
                    <li><?= $specific->skils3 ?></li>
                    <li><?= $specific->skils4?></li>
                </ul>
            </section>


            <!--my Education section-->
            <section>


                <h3 class="profilee">Education:</h3>
                <p><?= $specific->School ?> </p>
                <p><?= $specific->Graduation_Start ?><?= "_" ?><?= $specific->Graduation_End ?></p>

            </section>
        </div>

    </main>

    <footer>
        <p>Date : <time datetime="2020-10-9">9th of Oct ,2022</time></p>

        <address>

            <a href="tel:+878090099"><?= $specific->Phone ?> </a>
            <p>323 stret address ,jordan, zarqa</p>
        </address>



    </footer>

    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="./cv.js"></script>
</body>
</html>