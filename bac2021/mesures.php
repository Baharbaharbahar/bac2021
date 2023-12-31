<?php
$station=$_POST["station"];
$annee=$_POST["annee"];
$saison=$_POST["saison"];
mysql_connect("localhost","root","");
mysql_select_db("bdbac2021");
$req="SELECT * FROM mesure WHERE idstation='$station',annee='$annee',saison='$saison';";
$res=mysql_query($req);
if(mysql_num_rows($res)==1){
    echo "Mesures déja enregistrées!!";
    }else{
        $req1="INSERT INTO mesures VALUES ('$station','$annee','$saison')";
        $res1=mysql_query($req1);
        if(mysql_affected_rows()==1){
            echo "Ajout effectué avec succés";
        }


}















?>