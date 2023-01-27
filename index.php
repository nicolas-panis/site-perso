<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="style.css">

        <title>Portfolio Nicolas Panis</title>
        
        
    </head>

    <body class = "font-mono">
        
        <header class = "bg-zinc-900 text-white">
            <div id = "h1">
                <h1 class="text-4xl mb-5">Nicolas Panis</h1>
            </div>

            <div class ="bg-red-800">
                <nav>
                    <ul id = "header_nav">
                        <li><a href = "#realisations">Réalisations</a></li>
                        <li><a href = "index.php">Compétences</a></li>
                        <li><a href = "index.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main>
            <div id = "Presentation">
                <div id = "Presentation_text" class = "bg-red-800 h-fit p-5 rounded-xl border-4 border-zinc-900">
                    <h2>Présentation</h2>
                    <p>
                        Nicolas, 23 ans, développeur informatique spécialisé dans les systèmes embarqués, je vous invite à cliquer sur mon cv ci-après pour en savoir plus sur mon parcours.
                    </p>
                </div>
                <div id = "Presentation_img">
                    <a href = "CV_Nicolas_Panis.pdf">
                    <img src="./image/resume.png"></a>
                </div>
            </div>
            
            <div class = "bg-zinc-900">
                <h2 class = "text-white font-bold pt-5 bg-red-800 pb-5" style = "margin-top: 5%; text-align: center; font-size: 250%">Réalisations</h2>
                <div id = "realisations" class = "mt-10 pt-5">
                    <div id = "real1" class = "bg-red-800 rounded-xl">
                        <img src="./image/fansite.jpg">
                        <h3 class="mt-2 text-xl">Fansite</h3>
                        <p class= "mt-5">
                            Site réalisé en HTML/CSS
                        </p>
                    </div>
                    <div id = "real1" class = "bg-red-800 rounded-xl">
                        <img src="./image/fansite.jpg">
                        <h3 class="mt-2 text-xl">Site voyage</h3>
                        <p class = "w-56 mt-5">
                            Projet réalisé en collaboration à LaPlateforme_ en HTML/CSS/PHP/JS
                        </p>
                    </div>
                    <div id = "real3" class = "bg-red-800 rounded-xl">
                        <img src="./image/maison-connecte.jpg">
                        <h3 class="w-56 mt-2 text-xl">Maquette maison intelligente</h3>
                        <p class = "w-56 mt-5">
                            Projet réalisé en terminal - simulation d'une maison connectée pilotée par commande vocale
                        </p>
                    </div>
                </div>
            </div>

        </main>
        

        <footer>


        </footer>


    </body>

    
    

</html>