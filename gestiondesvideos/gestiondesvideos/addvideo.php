
<?php
include_once "conn.php";
include_once "header.php";

if(isset($_POST['sub'])){
$idvideo=$_POST['idvideo'];
$titre=$_POST['titre'];
$taille=$_POST['taille'];
$description=$_POST['description'];

if(isset($_FILES['fichier']) and $_FILES['fichier']['error']==0)
{
  $dossier= 'bdvideo/';
  $temp_name=$_FILES['fichier']['tmp_name'];
  if (!is_uploaded_file($temp_name)){
    exit("le fichier est introuvable");
  }
  if($_FILES['fichier']['size']>= 1000000){
    exit("erreur, le fichier est volumineux");

  }
  $infofichier=pathinfo($_FILES['fichier']['name']);
  $extention_upload = $infofichier['extension'];

  $extention_upload = strtolower($extention_upload);
  $extention_autorisees = array('mp4','jiff');
  if(!in_array($extention_upload, $extention_autorisees)){
    exit("erreur, Veuillez inserer une video (extention autoriser: mp4 et jiff ");

  }

        $titre=$idvideo.".".$extention_upload;
        if(!move_uploaded_file($temp_name,$dossier.$nom_video)){
            exit("Probleme dans le telechargement de la video, Réessayez ");  
        }
        $video_name=$titre;
}
    else{
        $video_name='videoplayback (1).mp4';
    }
    var_dump($_POST);
  $requette="INSERT INTO video VALUES('$idvideo','$titre','$taille','$description')";
  $resultat=mysqli_query($link,$requette);
  header(('location: affichage.php'));
  
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemin d'enregistrement de video</title>
   
</head>
<body>
    <div class="container">
        <h1>Formulaire d'enregistrement des videos</h1>

       
     <div class="row">
        <div class="col-6">
        <form method="post" action="">
            <p>Choisissez une video a partir d'un dossier!</p>
        
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Taiile</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="taille" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="description" required>
                </div>
            
            <input type="file" name="fichier"/>
            <button type="submit">Charger la Vidéo</button>
        </form>
        </div>
     </div>
    </div>
</body>
</html>

