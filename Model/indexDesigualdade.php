<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>De Passagem, Desigualdade</title>
        <link rel="stylesheet" href="../Visual/Visual.css">
    </head>
    <body class="desigualdade_degrade">
        <div class ="circle"><img src= "../Imagens/Logo_Para_Redes_Sociais.png"></div>

        <h1 class= "Tamanho">Desigualdade Social</h1>

        <p class="letras">Essa aba, como já sugere o nome, tem como finalidade mostrar para os convidados composições que possuem o objetivo de fazer uma reflexão sobre o tema.</p>

        <p class="letras">Dito isso aproveitem as composições</p>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/Dia_das_mulheres_Wendel 3.png">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button" onclick= "abrirPopup()"><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/O silêncio mortal 2.png">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button"><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/Cartão de embarque 3 Luquinhas.png">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button"><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/AtividadeAvaliativa João.jpg">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button" ><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/Poster sobre feminicidio  GOTY.jpg">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button" ><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/ProvaEdiçaoDeImagens 2.png">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button"><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>

        
        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/Vibrações Roxas 2.jpg">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button"><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>


        <div class="Caixa3">
            <div class="Moldura">
                <img src="../Imagens/Silhueta Purpura 2.png">
            </div>
        </div>
        <div class="Caixinha">
            <div>
                <button class="Button"><img src= "../Imagens/Seta_Pra_Baixo5.png"></button>
            </div>
        </div>

    <div id="popup" class="popup" style="display: none">
        <div class="popup-content">
            <span class="close-btn" onclick="fecharPopup()">&times;</span>
            <p>Este é um Pop-up!</p>
        </div>
    </div>

    <script>
        function abrirPopup()
        {
            document.getElementById("popup").style.display = "block";
        }

        function fecharPopup()
        {
            document.getElementById("popup").style.display = "none";
        }
    </script>
    </body>
</html>