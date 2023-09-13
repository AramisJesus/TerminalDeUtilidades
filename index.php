<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal de Utilidades Abilitá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stalemate&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container p-12 my-2 border  ">
         <div class="row">

             <div class= " "> 
            
             <h1 style="font-family: 'Akronim', cursive;" class=" ">ABILITÁ </h1>
            </div>
            
            <div>
             <p style="font-family: 'Stalemate', cursive; font-size: 45px;">Bem vindo ao Terminal de Utilidades da empresa !.</p>
            </div>
            
           

            
        <div>

            


          </div>

          



    </header>
    <main>
    <form action="calcular.php" method="post">
       <div class="container p-12 my-2 border">

        <div class="row my-2 border"> <!-- Separado em dois conteiners principais: Calculo e Modelos -->
            <div class="col-10 my-2 border">
                <div>

                </div>

                <h1 style="font-family: 'Akronim', cursive;" class="">Calculadora
                    <hr>
                </h1>
                
                <div class="row">
                <div style="margin-left:36px;" class="col-3">
                    <label style="font-family: 'Stalemate', cursive; font-size: 45px;" for="altura">Altura (mm):</label>
                    <input type="text" name="altura" id="altura" required><br><br>
                </div>
                <div class="col-3">
                    <label style="font-family: 'Stalemate', cursive; font-size: 45px;" for="largura">Largura (mm):</label>
                    <input type="text" name="largura" id="largura" required><br><br>
                </div>
                <div class="col-3">
                    <label style="font-family: 'Stalemate', cursive; font-size: 45px;" for="espessura">Espessura (mm):</label>
                    <input type="text" name="espessura" id="espessura" required><br><br>
                </div>
                <div class="col-1" >
                    <label style="font-family: 'Stalemate', cursive; font-size: 45px;" for="material">Material:</label>
                    <select style="margin-left:24px;" name="material" id="material">
                        <option value="mdf">MDF</option>
                        <option value="vidro">Vidro</option> 
                    </select><br><br>
                </div>
                   
                <div style="margin:4px;" class="d-flex justify-content-center">
                    <input style="font-family: 'Akronim', cursive;font-size: 24px;" type="submit" value="Calcular">
                </div>

                </div>




    

                
                <div class="d-flex justify-content-center border " id="resultado">
                    <label style="font-family: 'Stalemate', cursive; font-size: 45px;" class="" for="text">
                    <?php
                
                        echo "REF:" . $_GET['resultado'] . " ";
                    
                    ?>
                    </label>
                </div>
                </div>
                <div class="col-2 my-2 border" > <!--segundo conteiner principal (modelo)-->
                    <h4 style="font-family: 'Akronim', cursive; padding-top: 19px;">Modelos
                    <hr
                    ></h4>
                    <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="freeSpace" checked>
                            <label style="font-family: 'Stalemate', cursive; font-size: 25px;" class="form-check-label" for="radio1">FreeSpace</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="aventos" disabled >
                            <label style="font-family: 'Stalemate', cursive; font-size: 25px;" class="form-check-label" for="radio2">Aventos</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="pistao">
                                <label style="font-family: 'Stalemate', cursive; font-size: 25px;" class="form-check-label" for="radio3">Pistão a gás</label>
                            </div>

                    </div>
    </form>

                 


</body>
</html>
