<?php
//Box 2

//Skapar funktionen.
function box2(){
     
        //Skapar en variabel med en tom sträng
        $out="";
    
        //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        $conn = connect_db();
        
        //Skapar och ställer frågan om att hämta all information från tabellen land.
        $sql = "SELECT * FROM land";
        $resultat = mysqli_query($conn, $sql);
        
        //Skapar en tabell och lägger in den i strängen.
        $out.='<table id="myTable2" class="display">';
        
        //Skapar rubriker till kolumner. Lägger in i sträng.
        $out.='<thead><tr><th>Flygplatskod</th><th>Land</th><th>Åtgärd</th><th>Åtgärd2</th></tr></thead>';
        
        $out.='<tbody>';
        //Skapar en variabel som får värdet av resultaten i tabellen.
        while($row = mysqli_fetch_array($resultat))
        {
            //Skapar tabellrad och lägger in den i strängen.
            $out.='<tr>';
            
            //Skapar tabellcell.
            $out.='<td>';
            //Hittar kolumnen airport och lägger till i strängen.
            $out.=$row['airport'];
            //Stänger tabellcellen.
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen land istället.
            $out.='<td>';
            $out.=$row['land'];
            $out.='</td>';
            
            //Skapar tabellcell. Lägger in en länk till sidan edit.php och deklarerar två variabler (edit & edit1) samtidigt. Variablerna tar med sig värdena på $row utifrån kolumnerna airport och land. Lägger in detta i strängen. Stänger tabellcell.
            $out.='<td>';
            $out.="<a href='edit.php?edit=".$row['airport']."&edit1=".$row['land']."'>Redigera</a>";
            $out.='</td>';
            
            //Skapar tabellcell. Lägger in en länk till sidan delete.php och deklarerar variabeln 'del' som har värdet från $row utifrån kolumnen airport. Lägger in detta i strängen. Stänger tabellcell.
            $out.='<td>';
            //$out.="<a href='delete.php?id=18'>Radera</a>";
            $out.="<a href='delete.php?del=".$row['airport']."'>Radera</a>";
            $out.='</td>';
            
            
            //Stänger tabellraden.
            $out.='</tr>';
            
        }
      $out.='</tbody>';
        //Stänger tabell.
        $out.='</table>';
    
     ?>
        

<?php
      //Returnerar strängen.
        return $out;
    
}




?>














