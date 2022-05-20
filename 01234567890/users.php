<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl4.css">
    <title>Panel administratora</title>
</head>
<body>
    <div id="baner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </div>
    <div id="container">
        <div id="lewy">
            <h4>Użytkownicy</h4>
            <?php
                $con=mysqli_connect('localhost','root','','dane4');
                $sql="SELECT `id`,`imie`,`nazwisko`,`rok_urodzenia`,`zdjecie` FROM osoby LIMIT 30;";
                $result=mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($result)){
                    $rok= date("Y") - $row["rok_urodzenia"];
                    echo $row["id"]." ".$row["imie"]." ".$row["nazwisko"]." ".$rok." lat<br>";
                }

                mysqli_close($con);
            ?>
            <a href="settings.html">Inne ustawnienia</a>
        </div>
        <div id="prawy">
            <h4>Podaj ID użytkownika</h4>
            <form action="" method="POST">
                <input type="number" name="id" id="">
                <input type="submit" value="zobacz" id="sub-button">
            </form>
            <hr>
            <?php
            if(isset($_POST["id"])){
                $id=$_POST["id"];
                $con=mysqli_connect('localhost','root','','dane4');
                $sql="SELECT `imie`,`nazwisko`,`rok_urodzenia`,`opis`,`zdjecie`, hobby.nazwa FROM osoby JOIN hobby ON osoby.Hobby_id=hobby.id WHERE osoby.id=$id;";
                $result=mysqli_query($con,$sql);
            
                while($row=mysqli_fetch_array($result)){
                echo
                $id." ".$row["imie"]." ".$row["nazwisko"]."<br>
                <img src=".$row["zdjecie"]." alt=".$id.">
                <p>Roku urodzenia: ".$row["rok_urodzenia"]."</p><br>
                <p>Opis: ".$row["opis"]."</p><br>
                <p>Hobby: ".$row["nazwa"]."</p>";
            }        
                
                mysqli_close($con);}
            ?>
        </div>
    </div>
    <div id="stopka">
        Stronę wykonał: 01234567890
    </div>
</body>
</html>