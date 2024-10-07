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
