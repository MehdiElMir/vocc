<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <title>Vocc - home</title>
</head>
<body>
    <?php include('_header.php'); ?>    
        <div class="home-banner">
            <div class="container">
                <div class="row home-row1">
                    <div class="col-lg-6">
                        <img class="banner_img" src="img/banner_img.png" alt="banner_img">
                    </div>
                    <div class="col-lg-6 banner_text">
                        <p class="home-p1"><span>VOCC</span>  VOUS</p>
                        <p class="home-p2">assiste à prendre soin de la</p>
                        <p id="home-p3">voix de vos clients</p>
                        <p id="home-p4">Plus de trois décennies d’expérience en contact avec les clients, 
                        nous ont convaincus que les réclamations constituent le mur porteur 
                        de la Relation Client et de son corollaire la Fidélisation.</p>
                        <a href="#">> en savoir plus</a>
                    </div>

                </div>
            </div>
        </div>
        

        <div class="home-c">
            <div class="container">
                <p>Toutes nos prestations sont basées sur le transfert de nos connaissances, méthodes, outils et expériences à nos clients car nous 
                adhérons pleinement au principe socratique "le savoir est la seule matière qui s'accroît quand on la partage". Quatre domaines 
                d'activités forment le socle de notre offre autour de la Satisfaction et l'Ecoute Client :</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 hc">
                    <img src="img/logo1.png" alt="logo1">
                    <p class="home-ptitre">le conseil</p>
                    <p class="home-pctn">La satisfaction client va plus loin que l’approche classique de la qualité, elle nécessite des méthodes pour tenir compte des émotions et de la subjectivité du client. Pour cela, nous avons développé une démarche spécifique que nous serons heureux de partager avec vous.</p>
                </div>
                <div class="col-md-3 hc">
                    <img src="img/logo2.png" alt="logo2" style="margin-bottom:11px;">
                    <p class="home-ptitre">la formation</p>
                    <p class="home-pctn">Le calcul du retour sur investissement est la principale difficulté qu’ont les managers dans le traitement de l’insatisfaction. Nos formations apportent le savoir, savoir-faire et le savoir-être pour satisfaire le Client, le Collaborateur et … le Directeur Financier.</p>
                </div>
                <div class="col-md-3 hc">
                    <img src="img/logo3.png" alt="logo3" style="margin-bottom:11px;">
                    <p class="home-ptitre">externalisation</p>
                    <p class="home-pctn">Votre cœur de métier personne d’autre que vous ne pourra mieux le maîtriser, consacrez y vos forces. Le traitement du client insatisfait est notre raison d’être, confiez nous vos réclamations.</p>
                </div>
                <div class="col-md-3 hc">
                    <img src="img/logo4.png" alt="logo4" style="margin-bottom:11px;">
                    <p class="home-ptitre" style="font-size:17px; margin-bottom:0; margin-top:15px">l'assistance à la maîtrise d'ouvrage</p>
                    <p class="home-pctn">Nous apportons notre expertise pour assister les entreprises et les services utilisateurs à élaborer leur cahier des charges informatiques, choisir les solutions les mieux adaptées et mettre en place leur système d’information.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 hc">
                    <img src="img/blog_img.png" alt="blog_image">
                    <p id="home-blog-text">et participez à la communauté
                        de partage satisfaction 
                        client-entreprise.</p>
                </div>
                <div class="col-md-5 home-col-bottom">
                    <form action="" method="post">
                        <input type="email" name="home-email" id="home-email-text" placeholder="Votre email ...">
                        <button type="button"><img src="img/messagerie_logo.png" alt="message"></button>
                    </form>

                    <p class="home-t1">Inscriver-vous à</p>
                    <p class="home-t2">Notre newsletter</p>
                    

                </div>
                <div class="col-md-4 home-col-bottom">
                    <img src="img/logo5.png" alt="" srcset="">
                    <p class="home-t1">Recevez gratuitement</p>
                    <p class="home-t2">un de nos livres</p>
                </div>
            </div>
        </div>

        
    
    
   
    <?php include('_footer.php');?>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
</body>

</html>