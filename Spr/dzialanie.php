<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Mateusz Bubiak</title>
    
</head>
<body>
    <section id="banner">
        <h1>Sprawdzian Aplikacje Desktopowe i Mobline</h1>
        <h2>Dane</h2>
        <ol>
            <li>Bazy danych</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>Javascript</li>
        </ol>
    </section>

    <section id="lewy">
        wynik dzialania skryptu 4
    </section>

    <section id="prawy">
        <?php
            $connect=mysqli_connect('localhost','root','','egzamin');
            if($connect){
                $zapytanie="SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna=1;";
            }
            mysqli_close($connect);
        ?>
        <ul>
            <li></li>
        </ul>
    </section>

    <section id="wpisy"> 
        

    </section>



    <footer>
        Mateusz Bubiak
    </footer>
    
</body>
</html>