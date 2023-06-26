<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <title>Vocc - Inscription</title>
</head>
<body>
    <?php include('_header.php'); ?>  

    <div class="formations_banner">
        <div class= "container">
            <h1>FORMATION</h1>
        </div>
    </div>

    <div class="container ">
        <div class="titre-inscription">
            <h4>Inscription</h4>
        </div>

        <div class="formulaire ">
            <form action="">
                <div class="justify-content-center">
                    <div class="row row-align-end">
                        
                        <div class="col-4"> 
                            <p><span>*</span>Prénom et nom:</p>
                        </div>

                        <div class="col-5">
                            <input type="text"  class="form-control" >
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Fonction:</p>
                        </div>

                        <div class="col-5">
                            <input type="text" class="form-control" >
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Téléphone:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control" >
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Email:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Réseaux sociaux:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Adresse:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Code postal:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Ville:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Pays:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>                    
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Formation choisie :</p>
                        </div>

                        <div class="col-5 inscription_select_col">
                        <select id="select_test" class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button type="button" class="inscription_drop_btn"><img src="img/select_icon.png" alt="select_icon"></button>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Choisir une date :</p>
                        </div>
                        <div class="col-1  inscription_select_col">
                        <select id="select_test" class="form-select" aria-label="Default select example">
                                <option value="1" selected>01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                            <button type="button" class="inscription_drop_btn"><img src="img/select_icon.png" alt="select_icon"></button>
                        </div>
                        <div class="col-1 inscription_select_col">
                        <select id="select_test" class="form-select" aria-label="Default select example">
                                <option value="1" selected>01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                            <button type="button" class="inscription_drop_btn"><img src="img/select_icon.png" alt="select_icon"></button>
                        </div>
                        <div class="col-3 inscription_select_col">
                        <select id="select_test" class="form-select" aria-label="Default select example">
                                <option value="1" selected>01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                            <button type="button" class="inscription_drop_btn"><img src="img/select_icon.png" alt="select_icon"></button>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span>*</span>Prénom et nom1:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4 "> 
                            <p><span></span>Prénom et nom2:</p>
                        </div>

                        <div class="col-5 ">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-4"> 
                            <p><span></span>Prénom et nom3:</p>
                        </div>

                        <div class="col-5">
                            <input type="text" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row last-p">
                    <div class="col-lg-4"></div>
                        <div class="col-5">                        
                        <p><span>*</span>Données obligatoire</p>
                        </div> 
                    </div> 
                    <div class="row btn-ins">
                        <div class="col-4"></div>
                        <div class="col-5  ">
                        <button class="submit-button2">Envoyer</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>      
    </div>

    <footer>
        <?php include('_footer.php');?>
    </footer>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
</body>
