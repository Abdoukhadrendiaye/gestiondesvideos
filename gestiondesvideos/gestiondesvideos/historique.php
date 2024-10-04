
<?php
session_start();
include_once "header.php";
include_once "navbar.php";
include_once "footer.php";

if(!isset($_SESSION['logged_in'])|| $_SESSION['logged_in']!==true){
    header('location:login.php');
    exit();

}


$username = $_SESSION['user'];


$stmt = $conn->prepare("SELECT id FROM user WHERE prenom = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$user_id = $user['id'];


$sql = "SELECT idvideo FROM historique WHERE iduser = ? ORDER BY date_lecture DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Vidéos</title>
</head>
<body>
    <h1>Historique des Vidéos Lues</h1>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $videoId = htmlspecialchars($row['idvideo']);
            echo '<iframe src="https://www.youtube.com/embed/' . $videoId . '" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
        }
    } else {
        echo "<p>Aucune vidéo trouvée dans l'historique.</p>";
    }
   
?>

</body>
</html>
