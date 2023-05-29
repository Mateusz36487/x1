<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Sprawdzian Mateusz Bubiak</title>
    
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
        <?php
            $connect=mysqli_connect('localhost','root','','egzamin');
            if($connect){
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $miasto=$_POST["miasto"];
                }
                $zapytanie="SELECT nazwa,ulica FROM kwiaciarnie WHERE miasto="$miasto";";
            }
            mysqli_close($connect);
        ?>
        <h2>Sstrona dla milosnikow kwiatow</h2>
        <form method="post" action="dzialanie.php">
            <label for="miasto">Podaj nazwe miasta</label>
            <input type="text" name="miasto" id="miasto">
        <br>
            <input type="submit" value="Sprawdz">
        </form>
    </section>

    <section id="prawy">

        <form method="post" action="dzialanie.php">
            <a href="dzialanie.php">odnosnik do php</a>
        </form>
    </section>

    <section id="wpisy">
        <h2>Nasze zdjecia</h2>
        <?php
            $connect=mysqli_connect('localhost','root','','egzamin');
            if($connect){
                $zapytanie="SELECT nazwaPliku,podpis FROM zdjecia ORDER BY podpis DESC;";
            }
            mysqli_close($connect);
        ?>

        <?php
            $komunikat="";
            $connect=mysqli_connect('localhost','root','','egzamin');
            if($connect){
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $imie=$_POST["imie"];
                    $nazwisko=$_POST["nazwisko"];
                    $rokurodzenia=$_POST["rokurodz"];
                    $liczba_produkcji=$_POST["liczb"];
                    $insert="INSERT INTO matematycy VALUES(null,$imie,'$nazwisko','$rokurodzenia','$liczba_produkcji')";
                    if(mysqli_query($connect,$insert)){
                        $komunikat=$komunikat."Dodano dane do bazy<br>";
                    }else{
                        $komunikat=$komunikat."blad polaczenia do bazy<br>";
                    }
            }
            mysqli_close($connect);
        ?>
        <h2>Matematycy</h2>
        <form>
        <label for="imie">podaj imie</label>
        <input type="text" name="imie" id="imie">
        <br>
        <label for="nazwisko">Nazwisko</label>
        <input type="text" name="nazwisko" id="nazwisko">
        <br>
        <label for="rokurodz">Rok urodzenia</label>
        <input type="number" name="rokurodz" id="rokurodz">
        <br>
        <label for="liczb">Liczba publikacji</label>
        <input type="number" name="liczb" id="liczb">
        <br>
        <input type="submit" value="Zapisz">
        </form>
    </section>
</section>

    <footer>
        Strona zrobiona przez Mateusz Bubiak
    </footer>
    
</body>
</html>