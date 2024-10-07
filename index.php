<?php


function getRandomPassword($number)
{
    // Creo una stringa vuota dove inserire la mia password
    $password = "";

    // Creo una stringa con i caratteri che dovranno essere inclusi nella pw
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,/!#$%-&";

    // Qui verrà inserito il singolo carattere randomico
    $randomChar = "";

    // # Creo un ciclo per aggiungere ogni volta una lettera alla pw

    //| Per ogni carattere in $characters...
    for ($i = 0; $i < $number; $i++) {

        //| Prendine uno random
        $randomChar = substr(
            //@ Agisci su $characters
            $characters,
            //@ Parti da una posizione random
            random_int(0, strlen($characters)),
            //@ Prendimi un solo carattere
            1
        );


        //| Inseriscilo in password
        $password .= $randomChar;
    }

    //# Restituiscimi password

    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="text-center">
                <h1 class="my-3 text-secondary">Strong Password Generator</h1>
                <h3 class="text-light">Create your own password</h3>
            </div>

            <section id="form" class="bg-light p-3 border rounded-3 my-3">
                <form action="index.php" method="get">
                    <div class="form-group row d-flex justify-content-start my-2">
                        <label class="col-5" for="passwordLength">Number of characters:</label>
                        <input class="col-3" type="number" id="passwordLength" name="passwordLength" class="form-control">
                    </div>

                    <button class="btn btn-primary">Invia</button>
                    <button class="btn btn-secondary">Annulla</button>
                </form>
            </section>

            <div class="bg-white p-3 border rounded-3">
                <p class="fw-bold fs-3">New password: <?php if (isset($_GET["passwordLength"])) { ?>
                        "<?= getRandomPassword($_GET["passwordLength"]) ?>"
                </p>
            <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>