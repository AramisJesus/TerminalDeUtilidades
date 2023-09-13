<?php

    // Coleta os valores do formulário
    $altura1 = floatval($_POST['altura']);
    $largura1 = floatval($_POST['largura']);
    $espessura1 = floatval($_POST['espessura']);
    $material = $_POST['material'];
    $articulador=$_POST['optradio'];
    

   //transforma a medida retirada para 'milimetros' pois é a que utilizamos na empresa.
   $altura= $altura1/1000;
   $largura= $largura1/1000;
   $espessura=$espessura1/1000;


    // Define as densidades dos materiais 
    $densidadeVidro = 2500; // Densidade do vidro
    $densidadeMDF = 750; // Densidade do MDF

    // Calcula o volume 
    $volume = $altura * $largura * $espessura;

    // Calcula o peso com base no material escolhido
    if ($material === 'vidro') {
        $peso = $volume * $densidadeVidro;
        if ( $articulador == 'freeSpace') //estrutura condicional para determinar o articulador
            {   
                // os if são separados em peso e altura, cada articulador é separado em 5 categorias com dois acabamentos utilizados na empresa, cada uma das categorias consegue suportar um determinado peso confome a altura de sua porta, ele tem limitações de altura e peso que são dispostas pelo else
                if ($peso <=4.3 and $altura<=0.226)
                    {
                    $res= "|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=7.1 && $altura<=0.226)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=9.3 && $altura<=0.226)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    } 
                elseif ($peso <=13.4 && $altura<=0.226)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }   
                elseif ($peso <=19.1 && $altura<=0.226)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    } 
                elseif ($peso >19.1 && $altura<=0.226)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    ////////////////////////////

                elseif ($peso <=3.9 && $altura<=0.25)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=6.4 && $altura<=0.25)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=9.1 && $altura<=0.25)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=12.6 && $altura<=0.25)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=17.2 && $altura<=0.25)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >17.2 && $altura<=0.25)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                ////////////////////////////////


                elseif ($peso <=3.5 && $altura<=0.275)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=5.8 && $altura<=0.275)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=8.2 && $altura<=0.275)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=12.0 && $altura<=0.275)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=15.6 && $altura<=0.275)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >15.6 && $altura<=0.275)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////////////////////
                elseif ($peso <=3.2 && $altura<=0.3)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=5.3 && $altura<=0.3)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=7.5 && $altura<=0.3)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=11 && $altura<=0.3)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=14.3 && $altura<=0.3)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                 elseif ($peso >14.3 && $altura<=0.3)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////////////////////////
                elseif ($peso <=3 && $altura<=0.325)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=4.9 && $altura<=0.325)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=7 && $altura<=0.325)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=10.2 && $altura<=0.325)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=13.2 && $altura<=0.325)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >14.3 && $altura<=0.325)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    /////////////////
                elseif ($peso <=2.8 && $altura<=0.35)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=4.6 && $altura<=0.35)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=6.5 && $altura<=0.35)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=9.5 && $altura<=0.35)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=12.3 && $altura<=0.35)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >12.3 && $altura<=0.35)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////////////////////
                elseif ($peso <=2.6 && $altura<=0.375)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=4.3 && $altura<=0.375)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=6.0 && $altura<=0.375)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=8.8 && $altura<=0.375)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=11.4 && $altura<=0.375)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >11.4 && $altura<=0.375)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////////////////////
                elseif ($peso <=2.4 && $altura<=0.4)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=4.0 && $altura<=0.4)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=5.6 && $altura<=0.4)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=8.3 && $altura<=0.4)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=10.7 && $altura<=0.4)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                    elseif ($peso >10.7 && $altura<=0.4)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    ////////////////////////
                elseif ($peso <=2.3 && $altura<=0.425)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=3.8 && $altura<=0.425)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=5.3&& $altura<=0.425)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=7.8 && $altura<=0.425)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=10.1 && $altura<=0.425)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >10.1 && $altura<=0.425)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////////////////
                elseif ($peso <=2.1 && $altura<=0.45)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=3.5 && $altura<=0.45)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=5 && $altura<=0.45)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=7.3 && $altura<=0.45)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=9.5 && $altura<=0.45)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >9.5 && $altura<=0.45)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                /////////////////////////
                elseif ($peso <=2.0 && $altura<=0.475)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=3.4 && $altura<=0.475)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=4.7 && $altura<=0.475)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=7.0 && $altura<=0.475)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=9.0 && $altura<=0.475)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >9.0 && $altura<=0.475)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    ///////////////////////
                elseif ($peso <=1.9 && $altura<=0.500)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=3.2 && $altura<=0.500)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=4.5 && $altura<=0.500)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=6.6 && $altura<=0.500)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=8.6 && $altura<=0.500)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >8.6 && $altura<=0.500)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////

                elseif ($peso <=1.8 && $altura<=0.525)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=3.0 && $altura<=0.525)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=4.3 && $altura<=0.525)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=6.3 && $altura<=0.525)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso <=8.2 && $altura<=0.525)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >8.2 && $altura<=0.525)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                //////////////////////////////
                elseif ($peso <=1.7 && $altura<=0.550)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=2.9 && $altura<=0.550)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=4.1 && $altura<=0.550)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=6.0 && $altura<=0.550)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=7.8 && $altura<=0.550)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }  
                elseif ($peso >7.8 && $altura<=0.550)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    //////////////////////////////
                elseif ($peso <=1.6 && $altura<=0.600)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=2.7 && $altura<=0.600)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=3.7 && $altura<=0.600)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=5.5 && $altura<=0.600)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=7.1 && $altura<=0.600)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >7.1 && $altura<=0.600)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    ///////////////////////////
                elseif ($peso <=1.5 && $altura<=0.625)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=2.4 && $altura<=0.625)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=3.5 && $altura<=0.625)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=5.1 && $altura<=0.625)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=6.6 && $altura<=0.625)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >6.6 && $altura<=0.625)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    ///////////////////////
                elseif ($peso <=1.5 && $altura<=0.65)
                    {
                    $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                        echo $res;
                    }
                elseif ($peso <=2.4 && $altura<=0.65)
                    {
                    $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                        echo $res;
                    }
                elseif ($peso <=3.5 && $altura<=0.65)
                    {
                    $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                        echo $res;
                    }
                elseif ($peso <=5.1 && $altura<=0.65)
                    {
                    $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                        echo $res;
                    }
                elseif ($peso <=6.6 && $altura<=0.65)
                    {
                    $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                        echo $res;
                    }
                elseif ($peso >6.6 && $altura<=0.65)
                    {
                    $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                        echo $res;
                    }
                    ////////////////////
                else {
                    $res = "Provavelmente suas medias não são suportadas!";
                }
                
                
  
            }
        elseif ($articulador == 'pistao'){ //aqui o articulador(pistâo comum) é definido em quantidade pela largura e em força pelo peso e altura 
                if ($largura <= 0.6 && $altura <= 0.3 && $peso <=1.6) {
                    $res ="|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=2.1){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=2.6){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=3.1){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=3.5){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                //////////////////////////////////////////////
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=1.2){
                    $res = "|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=1.6){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=1.9){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=2.3){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=2.6){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                //////////////////////////////////////////
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=0.9){
                    $res = "|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=1.2){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=1.8){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=1.9){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=2.2){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                //////////////////////////
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=0.8){
                    $res = "|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.0){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                 else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.3){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.8){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.9){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                ///////////////////////////////////
                ///////////////////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=3.2){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=4.2){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=5.2){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=6.2){
                    $res = "|||||2 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=7.0){
                    $res = "|||||2 pistão a gás de 150N '373.82.325'  |||||";
                }
                /////////////////////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=2.4){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=3.2){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=3.8){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=4.6){
                    $res = "|||||2 pistão a gás de 60N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=5.2){
                    $res = "|||||2 pistão a gás de 60N '373.82.325'  |||||";
                }
                /////////////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=1.8){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=2.4){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=3.6){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=3.8){
                    $res = "|||||2 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=4.4){
                    $res = "|||||2 pistão a gás de 150N '373.82.325'  |||||";
                }
                ////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=1.6){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=2.0){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=2.6){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=3.6){
                    $res = "|||||2 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=3.8){
                    $res = "|||||2 pistão a gás de 150N '373.82.325'  |||||";
                }



















            }
        

    } elseif ($material === 'mdf') {
        $peso = $volume * $densidadeMDF;
        if ( $articulador == 'freeSpace')
            if ($peso <=4.3 and $altura<=0.226)
                {
                $res= "|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=7.1 && $altura<=0.226)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=9.3 && $altura<=0.226)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                } 
            elseif ($peso <=13.4 && $altura<=0.226)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }   
            elseif ($peso <=19.1 && $altura<=0.226)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                } 
            elseif ($peso >19.1 && $altura<=0.226)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                ////////////////////////////

            elseif ($peso <=3.9 && $altura<=0.25)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=6.4 && $altura<=0.25)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=9.1 && $altura<=0.25)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=12.6 && $altura<=0.25)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=17.2 && $altura<=0.25)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >17.2 && $altura<=0.25)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
            ////////////////////////////////


            elseif ($peso <=3.5 && $altura<=0.275)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=5.8 && $altura<=0.275)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=8.2 && $altura<=0.275)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=12.0 && $altura<=0.275)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=15.6 && $altura<=0.275)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >15.6 && $altura<=0.275)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////////////////////
            elseif ($peso <=3.2 && $altura<=0.3)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=5.3 && $altura<=0.3)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=7.5 && $altura<=0.3)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=11 && $altura<=0.3)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=14.3 && $altura<=0.3)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >14.3 && $altura<=0.3)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////////////////////////
            elseif ($peso <=3 && $altura<=0.325)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=4.9 && $altura<=0.325)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=7 && $altura<=0.325)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=10.2 && $altura<=0.325)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=13.2 && $altura<=0.325)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >14.3 && $altura<=0.325)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                /////////////////
            elseif ($peso <=2.8 && $altura<=0.35)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=4.6 && $altura<=0.35)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=6.5 && $altura<=0.35)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=9.5 && $altura<=0.35)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=12.3 && $altura<=0.35)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >12.3 && $altura<=0.35)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////////////////////
            elseif ($peso <=2.6 && $altura<=0.375)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=4.3 && $altura<=0.375)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=6.0 && $altura<=0.375)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=8.8 && $altura<=0.375)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=11.4 && $altura<=0.375)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >11.4 && $altura<=0.375)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////////////////////
            elseif ($peso <=2.4 && $altura<=0.4)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=4.0 && $altura<=0.4)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=5.6 && $altura<=0.4)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=8.3 && $altura<=0.4)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=10.7 && $altura<=0.4)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
                elseif ($peso >10.7 && $altura<=0.4)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                ////////////////////////
            elseif ($peso <=2.3 && $altura<=0.425)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=3.8 && $altura<=0.425)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=5.3&& $altura<=0.425)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=7.8 && $altura<=0.425)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=10.1 && $altura<=0.425)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >10.1 && $altura<=0.425)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////////////////
            elseif ($peso <=2.1 && $altura<=0.45)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=3.5 && $altura<=0.45)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=5 && $altura<=0.45)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=7.3 && $altura<=0.45)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=9.5 && $altura<=0.45)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >9.5 && $altura<=0.45)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
            /////////////////////////
            elseif ($peso <=2.0 && $altura<=0.475)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=3.4 && $altura<=0.475)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=4.7 && $altura<=0.475)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=7.0 && $altura<=0.475)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=9.0 && $altura<=0.475)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >9.0 && $altura<=0.475)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                ///////////////////////
            elseif ($peso <=1.9 && $altura<=0.500)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=3.2 && $altura<=0.500)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=4.5 && $altura<=0.500)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=6.6 && $altura<=0.500)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=8.6 && $altura<=0.500)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >8.6 && $altura<=0.500)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////

            elseif ($peso <=1.8 && $altura<=0.525)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=3.0 && $altura<=0.525)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=4.3 && $altura<=0.525)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=6.3 && $altura<=0.525)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso <=8.2 && $altura<=0.525)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >8.2 && $altura<=0.525)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
            //////////////////////////////
            elseif ($peso <=1.7 && $altura<=0.550)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=2.9 && $altura<=0.550)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=4.1 && $altura<=0.550)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=6.0 && $altura<=0.550)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=7.8 && $altura<=0.550)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }  
            elseif ($peso >7.8 && $altura<=0.550)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                //////////////////////////////
            elseif ($peso <=1.6 && $altura<=0.600)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=2.7 && $altura<=0.600)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=3.7 && $altura<=0.600)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=5.5 && $altura<=0.600)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=7.1 && $altura<=0.600)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >7.1 && $altura<=0.600)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                ///////////////////////////
            elseif ($peso <=1.5 && $altura<=0.625)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=2.4 && $altura<=0.625)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=3.5 && $altura<=0.625)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=5.1 && $altura<=0.625)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=6.6 && $altura<=0.625)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >6.6 && $altura<=0.625)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                ///////////////////////
            elseif ($peso <=1.5 && $altura<=0.65)
                {
                $res ="|||||Branco: 372.27.760|||||Antrácito: 372.27.770|||||";
                    echo $res;
                }
            elseif ($peso <=2.4 && $altura<=0.65)
                {
                $res ="|||||Branco: 372.27.761|||||Antrácito: 372.27.771|||||";
                    echo $res;
                }
            elseif ($peso <=3.5 && $altura<=0.65)
                {
                $res ="|||||Branco: 372.27.762|||||Antrácito: 372.27.772|||||";
                    echo $res;
                }
            elseif ($peso <=5.1 && $altura<=0.65)
                {
                $res ="|||||Branco: 372.27.763|||||Antrácito: 372.27.773|||||";
                    echo $res;
                }
            elseif ($peso <=6.6 && $altura<=0.65)
                {
                $res ="|||||Branco: 372.27.764|||||Antrácito: 372.27.774|||||";
                    echo $res;
                }
            elseif ($peso >6.6 && $altura<=0.65)
                {
                $res ="|||||!Peso nâo suportado pelo articulador!|||||";
                    echo $res;
                }
                ////////////////////
            else {
                $res = "Provavelmente suas medias não são suportadas!";
            }
        
        elseif ($articulador == 'pistao'){
                if ($largura <= 0.6 && $altura <= 0.3 && $peso <=1.6) {
                    $res ="|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=2.1){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=2.6){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=3.1){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.3 && $peso <=3.5){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                //////////////////////////////////////////////
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=1.2){
                    $res = "|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=1.6){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=1.9){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=2.3){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.4 && $peso <=2.6){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                //////////////////////////////////////////
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=0.9){
                    $res = "|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=1.2){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=1.8){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=1.9){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.5 && $peso <=2.2){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                //////////////////////////
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=0.8){
                    $res = "|||||1 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.0){
                    $res = "|||||1 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.3){
                    $res = "|||||1 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.8){
                    $res = "|||||1 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 0.6 && $altura <= 0.6 && $peso <=1.9){
                    $res = "|||||1 pistão a gás de 150N '373.82.325'  |||||";
                }
                ///////////////////////////////////
                ///////////////////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=3.2){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=4.2){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=5.2){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=6.2){
                    $res = "|||||2 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.3 && $peso <=7.0){
                    $res = "|||||2 pistão a gás de 150N '373.82.325'  |||||";
                }
                /////////////////////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=2.4){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=3.2){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=3.8){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=4.6){
                    $res = "|||||2 pistão a gás de 60N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.4 && $peso <=5.2){
                    $res = "|||||2 pistão a gás de 60N '373.82.325'  |||||";
                }
                /////////////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=1.8){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=2.4){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=3.6){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=3.8){
                    $res = "|||||2 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.5 && $peso <=4.4){
                    $res = "|||||2 pistão a gás de 150N '373.82.325'  |||||";
                }
                ////////////////////
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=1.6){
                    $res = "|||||2 pistão a gás de 60N '373.82.321'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=2.0){
                    $res = "|||||2 pistão a gás de 80N '373.82.322'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=2.6){
                    $res = "|||||2 pistão a gás de 100N '373.82.323'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=3.6){
                    $res = "|||||2 pistão a gás de 120N '373.82.324'  |||||";
                }
                else if ( $largura <= 1.6 && $altura <= 0.6 && $peso <=3.8){
                    $res = "|||||2 pistão a gás de 150N '373.82.325'  |||||";
                }
                else {
                    $res = "||||| Provavelmente o pistão não atende seus requisitos |||||";
                }
             } 
        





    }

    
    header("Location: index.php?resultado=" . $res);
    exit();

?>
