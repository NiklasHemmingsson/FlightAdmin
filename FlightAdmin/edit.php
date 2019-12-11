<?php
        
    
        //Hämtar värdet på edit från box2.php och lägger in i en ny variabel.
        $edit = $_GET['edit'];
        $flygplats = $edit;

        //Hämtar värdet på edit1 från box2.php och lägger in i en ny variabel.
        $edit1 = $_GET['edit1'];
        $land = $edit1;
         
        ?>
        <!-- Skapar formulär -->
        <form action="" method="POST">
        
        <!-- Skapar rubrik -->
        <label>Redigera Land</label><br>
        
        <!-- Två inmatningsfält som presenterar innehållet i $land samt $flygplats -->
        Land: <input type="text" name="Country" value="<?php echo $land; ?>">
                     <br>
        Flygplatskod:<input type="text" name="Airport" value="<?php echo $flygplats; ?>"><br>
        
        <!--Ändra-knappen -->
        <input type="submit" name= "Change"  value="Change">
        

        <?php
        
        //Om man tryckt på knappen Change kör följande script.
        if(isset($_POST['Change']))
        {   
            
            $flygplats2 = $_POST['Airport'];
            $land2 = $_POST['Country'];
            
            //Inkluderar filen "db_connect.php" då edit.php är separat från index.php. Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
            include_once "db_connect.php";
            $conn = connect_db();  
            
            //Skapar och ställer frågan om att uppdatera tabellen land. Specifikt det land vars rad man har tryckt på. Detta ersätts med värdet på $land2.
            $sql="UPDATE land SET land='$land2' WHERE airport='$edit'";
            $resultat = mysqli_query($conn, $sql);
        }
         
        ?>
            <!-- Länkar tillbaka till startsidan -->
            <a href="index.php">Tillbaka till startsidan</a>
            