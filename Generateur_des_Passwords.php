<?php

    $Chiffres = range(0,9);
    $Nombres = range(100, 999);
    $Lettres_Min = range('a','z');
    $Lettres_Maj = range('A','Z');
    $Caracteres = ['@','$','%','&','+','#','*'];

    $Password = "";
    $Password .= $Lettres_Maj[array_rand($Lettres_Maj)];
    $Password .= $Chiffres[array_rand($Chiffres)];
    $Password .= $Caracteres[array_rand($Caracteres)];
    $Password .= $Lettres_Maj[array_rand($Lettres_Maj)];
    $Password .= $Nombres[array_rand($Nombres)];
    $Password .= $Caracteres[array_rand($Caracteres)];
    $Password .= $Lettres_Min[array_rand($Lettres_Min)];
    $Password .= $Chiffres[array_rand($Chiffres)];
    
    print("Mot de passe: " . $Password);

    
    /*
    *Autor: Jet kahimbi
    */
    