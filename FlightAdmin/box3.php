<?php
//Box 3

//Skapar funktionen.
function box3(){
         
        //Skapar en variabel med en tom sträng.
        $out="";
    
        //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        $conn = connect_db();
        
        //Skapar och ställer frågan om att hämta all information från tabellen passagerare när värdet inom kolumnen klass är ekonomi. Begränsat till fyra rader.
        $sql = "SELECT * FROM passagerare WHERE klass='ekonomi'";
        $resultat = mysqli_query($conn, $sql);
        
        //Skapar en tabell och lägger in den i strängen.
        $out.='<table id="myTable3" class="display">';
    
        //Skapar rubriker till kolumner. Lägger in i sträng.
        $out.='<thead>
        <tr>
        <th>Förnamn</th><th>Efternamn</th><th>Biljettklass</th><th>Sittplats</th>
        </tr>
        </thead>';
    
        $out.='<tbody>';
        
        //Skapar en variabel som får värdet av resultaten i tabellen.
        while($row = mysqli_fetch_array($resultat))
        {
            
            //Skapar tabellrad och lägger in den i strängen.
            $out.='<tr>';
            
            //Skapar tabellcell. 
            $out.='<td>';
            //Hittar kolumnen fornamn och lägger till i strängen.
            $out.=$row['fornamn'];
            //Stänger tabellcellen.
            $out.='</td>';
            
            //Samma som föregående men hittar kolumnen efternamn istället.
            $out.='<td>';
            $out.=$row['efternamn'];
            $out.='</td>';
            
            //Samma som föregående men hittar kolumnen klass istället.
            $out.='<td>';
            $out.=$row['klass'];
            $out.='</td>';
            
            //Samma som föregående men hittar kolumnen sittplats istället.
            $out.='<td>';
            $out.=$row['sittplats'];
            $out.='</td>';
            
            
            //Stänger tabellraden.
            $out.='</tr>';
           
        }
        
        $out.='</tbody>';
    
        //Stänger tabellen.
        $out.='</table>';
    
    //Anropar funktionen Datable och specifierar vilken tabell vi vill anpassa.
    ?> 
        
    <?php
    
    //Returnerar strängen.
    return $out;
    
}
?>
