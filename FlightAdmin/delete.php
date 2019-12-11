<?php 
    //Inkluderar filen "db_connect.php" då delete.php är separat från index.php.
    include_once "db_connect.php";

    //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
    $conn = connect_db();
        
    //Hämtar in värdet från variabeln del från box2.php och lägger in i en ny variabel $del.
    $del = $_GET['del'];

    //Skapar och ställer frågan om att radera rad från tabellen land där variabel $del stämmer överens med värdet. Detta blir den rad som radera-länken låg på.
    $sql="DELETE from land WHERE airport = '$del'";
    $resultat = mysqli_query($conn, $sql);

    ?> 
    <!-- Länk tillbaka till startsidan -->
    <a href="index.php">Tillbaka till startsidan</a>
