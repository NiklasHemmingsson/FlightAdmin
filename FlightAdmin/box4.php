<?php
//Box 4 

//Skapar funktionen.
function box4search(){
    
    
?>      
        <!-- Skapar ett formulär-->
        <form action="index.php" method="get">
        
        <!--Rubrik-->
        <label>Sök efter flygresa enligt bokningsid</label><br>
        
        <!-- Skapar ett textfält-->
        <input type="text" name="mySearch"><br>
        
        <!-- Skicka-knappen -->
        <input type="submit" name= "Skicka" value="Skicka" id="skicka">
        
            
        <!-- Stänger formuläret -->
        </form>
        
<?php
    
        //Om man tryck på knappen skicka kommer följande script köras.
         if(isset($_GET['Skicka']))
            {
                //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
                $conn = connect_db();
                
                //Hämtar texten man skrivit i textfältet.
                $text = $_GET['mySearch'];
    
                //Skapar och ställer frågan om att hämta all information från tabellen passagerare samt hämtar värden ur tabellen bokning. Ifall siffran i textfältet stämer överens med bokningsid jämförs bokning.passagerarid med passagerare.pid. 
                $sql = "SELECT * FROM passagerare INNER JOIN bokning ON bokning.passagerarid = passagerare.pid WHERE bokning.bokningsid = '$text'";
                $resultat = mysqli_query($conn, $sql);
             
                //Skapar en variabel som får värdet av resultaten i tabellen.
                while($row = mysqli_fetch_array($resultat))
                {
                    //hittar motsvarande värdet ur kolumnen fornamn och lägger till i strängen.
                    $text=$row['fornamn'];
                    //Mellanrum läggs till i strängen.
                    $text.=" ";
                    //Hittar motsvarande värdet ur kolumnen efternamn och lägger till i strängen.
                    $text.=$row['efternamn'];
                }
                
                //Skriver ut strängen.
                echo '<p>' . $text . '</p>';
            }
    
    }
?>
