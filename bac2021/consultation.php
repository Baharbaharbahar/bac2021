<?php
$station=$_POST["station"];
$annee=$_POST["annee"];
$saison=$_POST["saison"];
mysql_connect("localhost","root","");
mysql_select_db("bdbac2021");
$req="SELECT saison annee station  temperature pluie  nom FROM mesure ";
$res=mysql_query($req);
echo  "<p>nom</p>";
echo "<table border='1'>";
echo"<tr><th>saison</th><th>annee</th><th>Station</th><th>temperature 
(°C)</th><th>pluie (mm)";
while ($tab=mysql_fetch_array($res)) {
    echo "<tr><td>$tab[0]</td>";
    echo "<td>$tab[1]</td>";
    echo"<td> $tab[2] </td>";
    echo "</tr>";
}


?>