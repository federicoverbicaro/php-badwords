<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <title>PHP-Badwords</title>
</head>

<body>
    <div class="container d-flex justify-content-center vh-100  ">

        <form action="ParolaCens.php" method="$_GET" class="mb-3 d-flex justify-content-center align-items-center  flex-column w-100 mt-5   ">

            <div class="col-6 mt-3 d-flex flex-column  ">
                <label for="paragrafo" class="form-label">Paragrafo:</label>
                <div>

                    <textarea name="paragrafo" id="" cols="73" rows="8"></textarea>
                </div>
            </div>

            <div class="col-6 mt-3">
                <label for="" class="form-label">Parola</label>

                <input type="text" class="form-control col-5 " name="parola" id="" aria-describedby="emailHelpId" placeholder="Inserisci una parola..." />
            </div>

            <button type="submit" class="btn btn-primary col-2 mt-3">Invia </button>

        </form>
    </div>




    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js' integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==' crossorigin='anonymous'></script>
</body>

</html>