<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <title>Vocc - formations</title>
</head>
<body>
    <?php include('_header.php'); ?>    
    <div class="formations_banner">
        <div class="container">
            <h1>formations</h1>
        </div>
    </div>

    <div class="container">
        <div class="row formations_row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-auto">
                        <p class="formations_p1">satcli <span class="formations_first_span">01</span></p>
                    </div>
                    <div class="col-10">
                        <p class="formations_p2">Insatisfaction, comportement client et réclamations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 justify-content-end">
                <div class="row justify-content-end formations_btn_row">
                    <div class="col-auto">
                        <button type="button" class="btn shadow button_frm1">Consulter</button>
                    </div>
                    <div class="col-auto">
                    <button type="button" class="btn shadow button_frm2">S'inscrire</button>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>
    <?php include('_footer.php');?>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
</body>

</html>