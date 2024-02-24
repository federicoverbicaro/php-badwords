<?php
$paragrafo = $_GET["paragrafo"];
$parola = $_GET["parola"];
$parola_censurata = str_replace($parola, "***", $parola);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <title>PHP-Badwords</title>
</head>

<body>

    <div class="container d-flex justify-content-center text-center vh-100 flex-column ">

        <h1 class="text-capitalize ">la prima pagina in php!</h1>

        <div class="mt-3">
            <p class="text-capitalize fs-3  ">questo è il tuo paragrafo:
                <div>

                <?php echo $paragrafo ?></p>
                </div>
                 
        </div>


        <div>
            <p class="text-capitalize fs-3  ">questo è la tua parola censurata:
            <div>

            <?php echo $parola_censurata?>
            </div>

               
            </p>

        </div>

    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js' integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==' crossorigin='anonymous'></script>
</body>

</html>