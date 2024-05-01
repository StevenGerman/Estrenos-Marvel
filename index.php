<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva secion de curl, ch = CURL HEANDLE.
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
/*
    Ejecur la peticion y guaramos el redultado
*/
$result = curl_exec($ch);
//var_dump($result);
$data = json_decode($result,true);
curl_close($ch);
//echo $data;
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steven Estrenos Marvel</title>
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pico.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main class="container">

    <section class="sec-info" role="group">
        <h3>
        La proxima película de Marvel es
        </h3>
        <h2>
             <?=  $data["title"]?>
        </h2>
        <section class="sec-entreno">
        <p class="p-dias">
            <?= "Faltan " . $data["days_until"] . " dias"?>
        </p>
        <p class="p-entreno">
            <?=  $data["release_date"]?>
        </p>    
        </section>
        
    </section>
    <section class="sec-poster" role="group">
        <img class="img"  src="<?=$data["poster_url"]?>" >
    </section>
    

    
    
        
</body>
</html>

<style>
    * {
        color-scheme: light dark;
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        /*border: 2px solid burlywood;*/
    }
    
    main{
        height: 90vh;
        display: flex;
        flex-direction: column;
        /*border: 2px solid blue;*/
        align-items: center;
        justify-content: center;
    }
    section{
        font-family: "Roboto", sans-serif;
        font-style: normal;
        flex-direction: column;
        width: 600px;
        height: 100%;
        /*border: 2px solid yellow;*/
        /*border-color: red;*/
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .sec-info{
        /*border: 2px solid greenyellow;*/
        display: flex;
        height: 30%;
        width: 100%;
        justify-content: center;
        align-items: center;
    }
    .sec-poster{
        /*border: 2px solid green;*/
        width: 100%;
        height: 70%;
        display: flex;
        align-items: center;
        justify-content: center;
        
    }   
    img{
        display: flex;
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 8px;
        /*border: 2px solid blueviolet;*/
    } 
    h3{
        color: #BDC3C7;
        text-align: center;
        font-size: 1rem;
        font-weight: 200;
    }
    h2{
        color: #F4F6F7;
        text-align: center;
        font-size: 2rem;
        font-weight: 400;
    }

    p{ 
        text-align: center;
      
        
    }
    .p-dias{
        color: #F1C40F;
        font-weight: 500;
        font-size: 1.2rem;
    }
    .p-entreno{
        color: #BDC3C7;
        font-size: 1rem;
    }
    .sec-entreno{
        display: flex;
        flex-direction: row;
        align-items: center;
        /*border: 2px solid red;*/
        width: 100%;
        height: 15%;
        justify-content: space-between;
    }
    
    
</style>

