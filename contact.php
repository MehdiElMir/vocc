<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <title>Vocc - Contact</title>
</head>
<body>
    <?php include('_header.php'); ?>   

    <div class="apropos-banner align-items-center">
        <div class="container">
            <p id="apropos-title">contact</p>
        </div>
    </div>

        <div class="container contact-c1">
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="img/contact_name_logo.png" alt="name_logo"></span>
                            <input type="text" class="form-control" placeholder="Prénom et Nom" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2"><img src="img/contact_mail_logo.png" alt="mail_logo"></span>
                            <input type="text" class="form-control" placeholder="Adresse Mail" aria-label="Username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text align-items-start"id="basic-addon3"><img src="img/contact_message_logo.png" alt="message_logo"></span>
                            <textarea class="form-control" aria-label="With textarea" placeholder="Votre Message ici"></textarea>
                        </div>
                        <button type="submit" class="btn contact-btn">Envoyer</button>
                    </form>
                </div>
                <div class="col-lg-6 contact_info">
                    <div class="row">
                        <div class="col-1">
                            <img src="img/localisation.png" alt="localisation_logo">
                        </div>
                        <div class="col-auto">
                            <span>Adresse : </span>
                        </div>
                        <div class="col contact_info_p1">
                            <p>VOCC</p>
                            <p>52 <b>BOULEVARD ZERKTOUNI </b>1er étage n° 03</p>
                            <p><b>casablanca 20000 ,</b> Maroc</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <img src="img/phone.png" alt="phone_logo">
                        </div>
                        <div class="col-auto">
                            <span>Tél / Fax : </span>
                        </div>
                        <div class="col contact_info_p2">
                            <p> (+212) (0) 522 53 94 30</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <img src="img/mail.png" alt="mail_logo">
                        </div>
                        <div class="col-auto">
                            <span>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                        </div>
                        <div class="col contact_info_p2">
                            <p> contact@<b>vocc.ma</b></p>
                            <select id="select_test" class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button type="button" id="drop_btn"><img src="img/select_icon.png" alt="select_icon"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
    
    <?php include('_footer.php');?>

    









    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
</body>

</html>