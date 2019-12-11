<?php      
        //Inkluderar filen "db_connect.php" då add.php är separat från index.php.
        include_once "db_connect.php";
        
        ?>
        <!-- Skapar ett formulär -->
        <form action="add.php" method="post">
        
        <!--Skapar rubrik-->
        <label>Lägg till ett nytt land</label><br>
        
        <!--Två inmatningsfält för land och flygplatskod -->
        Land: <input type="text" name="Country"><br>
        Flygplatskod:<input type="text" name="Airport"><br>
        
        <!-- Ändra-knappen -->
        <input type="submit" name= "Add" value="Add">
        
        <!--Stänger formuläret -->
        </form>
        <?php
        
        //Om man tryckt på knappen add körs följande script.
        if(isset($_POST['Add']))
        {   
            //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
            $conn = connect_db();
            
            //Hämtar det man skrivit i inmatningsfälten.
            $newAirport = $_POST['Airport'];
            $newCountry = $_POST['Country'];
            
            //Skapar och ställer frågan om att i tabellen land lägga till ny rad med värdena från variablerna $newAirport, $newCountry in i kolumnerna airport och land.
            $sql="INSERT INTO land (airport, land)
            VALUES ('$newAirport', '$newCountry')";
            $resultat = mysqli_query($conn, $sql);
        
        }

        
        

?>
    <!--Länk tillbaka till startsidan -->
    <a href="index.php">Tillbaka till start</a>