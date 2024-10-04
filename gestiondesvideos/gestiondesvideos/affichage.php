
<table class="table">
<?php
session_start();

require_once'conn.php';
$sql='select * from video';
$resultat=mysqli_query($link,$requette);
while($data=mysqli_fetch_assoc($resultat)){
    $video=$data['idvideo'];
    $titre=$data['titre'];
    $taille=$data['taille'];
    $description=$data['description'];
    $bdvideo=$data['bdvideo'];
    if($video!="" and $titre!="" and $taille!="" and $description!="" and $bdvideo!="");{
        echo "<tr>";
        echo "<td>$idvideo</td>";
        echo "<td>$titre</td>";
        echo "<td>$taille</td>";
        echo "<td>$description</td>";
        echo "<td>$bdvideo</td>";
        echo "<td>";
        //pour afficher la video
       // echo"<video>  <source src=\"bdvideo/$titre\" type="video/mp4" /> </video> ";
        echo "</td>";
        echo "</tr>";
    }
}

?>
  
  <?php
  foreach($resultat as $video)
  ?>
    <a href="addvideo.php">retour</a>
</table>