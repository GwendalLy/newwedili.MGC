<?php                 
if(empty($_POST['adresse']) || empty($_POST['destinataire']) || empty($_POST['message'])) {
    echo "Tous les champs ne sont pas remplis !";
    return false;
} else {
      if(filter_var($_POST['adresse'], FILTER_VALIDATE_EMAIL)){
        $error['adresse'] = false;
      } else {
        echo "Votre adresse est fausse !";
      }
      if(filter_var($_POST['destinataire'], FILTER_VALIDATE_EMAIL)){
        $error['destinataire'] = false;
      } else {
        echo "L'adresse du destinataire est fausse !";
      }
}

$adresse = htmlspecialchars($_POST['adresse']);
$destinataire = htmlspecialchars($_POST['destinataire']);
$message = htmlspecialchars($_POST['message']);

$servername = "localhost";
$username = "lgwendal";
$password = "lgwendal@2017";

if ($_FILES['fichier']['error'] == 0){

	$infosfichier = pathinfo($_FILES['fichier']['name']);
	// var_dump($infosfichier);
    $extension_upload = $infosfichier['extension'];
    $namefichier = $infosfichier['filename'];
    $file = '' .time(). '' .$namefichier. '.' .$extension_upload;
    // var_dump($file);

    move_uploaded_file( $_FILES['fichier']["tmp_name"], "fichier/".$file);

}

try {
    $conn = new PDO("mysql:host=$servername;dbname=lgwendal", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        $sql = $conn->prepare('INSERT INTO wedili(sonAdresse, votreAdresse, message, fichier) VALUES(:sonAdresse,:votreAdresse,:message,:fichier)');
        $sql->bindParam(':sonAdresse', $destinataire);
		$sql->bindParam(':votreAdresse', $adresse);
		$sql->bindParam(':message', $message);
		$sql->bindParam(':fichier', $fichier);
		$fichier = "fichier/".$file;
        $sql->execute();
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;

   echo json_encode($_FILES);        
?>