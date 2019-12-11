<?php
//Box 1

//Skapar funktionen.
function box1(){
   
        //Skapar en variabel med en tom sträng.
        $out="";
    
        //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        $conn = connect_db();
        
        //Skapar och ställer frågan om att hämta all informationen från tabellen avgang från ett specifikt datum, sorterat efter tid, begränsat till fyra rader. 
        $sql = "SELECT * FROM avgang WHERE datum='2017-09-20' ORDER BY tid";
        $resultat = mysqli_query($conn, $sql);
        
        //Skapar en tabell och lägger in den i strängen.
        $out.='<table id="myTable" class="display">';
    
        //Skapar rubriker till kolumner. Lägger in i sträng.
        $out.='<thead>
        <tr>
        <th>Flygnr</th><th>Dest</th><th>Tid</th><th>Gate</th>
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
            //Hittar kolumnen flygnr och lägger till i strängen.
            $out.=$row['flygnr'];
            //Stänger tabellcellen.
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen airport istället. 
            $out.='<td>';
            $out.=$row['airport'];
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen tid istället.
            $out.='<td>';
            $out.=$row['tid'];
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen gate istället.
            $out.='<td>';
            $out.=$row['gate'];
            $out.='</td>';
            
            //Stänger tabellraden
            $out.='</tr>';
            
        }
        
        
        $out.='</tbody>';
    
        //Stänger tabell
        $out.='</table>';
    
    
     //Anropar funktionen Datable och specifierar vilken tabell vi vill anpassa.
    //returnerar strängen.
        return $out;
}

?>
