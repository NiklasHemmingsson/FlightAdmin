<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lab1.css">
     
    <link rel="stylesheet" type="text/css" href="datatables.min.css"/>
      
    <script src="jQuery-3.2.1/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="datatables.min.js"></script>
      
      <script>
        $(document).ready(function(){
             $('#myTable').DataTable();
            $('#myTable2').DataTable();
            $('#myTable3').DataTable();     
        });
        </script>
    <!-- Labb2 MTB 2018 (RD)-->
  </head>
  <body class="flightadmin">
    <?php
include_once "db_connect.php";
include_once "box1.php";
include_once "box2.php";
include_once "box3.php";
include_once "box4.php";
if($noerror=connect_db()){
  }
?>
  
  <div class="grid-container">
  <!-- Rubrik -->
      <div class="header"><h1>Flight Admin</h1></div>
  <!-- Ruta 1 (vänsterövre)-->

    <div class="item1">
        <h2>Avgångar</h2>

      <?php
        //Skriver ut funktionen box1() ur sida box1.php.
        echo box1();
        
    ?>
        
     </div>

<!-- Ruta 2 (högerövre) -->

    <div class="item2">
        <h2>Flygplatser</h2>
      <?php
        //Skriver ut funktionen box2() ur sida box2.php.
        echo box2();
        ?>
        
        <br>
        <!-- Länk till sidan add.php där man kan lägga till ett land i tabellen.  -->
        <a href="add.php">Lägg till ett nytt land</a>
        
     </div>
<!-- Ruta 3 (nedrevänster) -->

    <div class="item3">
        <h2>Passagerare</h2>
      <?php
        //Skriver ut funktionen box3() ur sida box3.php.
        echo box3();

      ?>
    </div>

<!-- Ruta 4 (nedrehöger) -->

    <div class="item4">
        
        <?php
            //Använder funktionen box4search() ur sida box4.php.
            box4search();    
        ?>

    </div>
     
      <footer>
        
          <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fhome.mi.sh.se%2F~sh14hf1909%2Ffa%2F">Validera HTML</a><br>
          <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhome.mi.sh.se%2F%7Esh14hf1909%2Ffa%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=sv">Validera CSS</a>
          
          </footer>
      
      </div>
      


  
  </body>
</html>
