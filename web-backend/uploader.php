<?php
if(isset($_POST["submit"])) {

   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "<p>File is an image - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
        
        $fileName = $_FILES['fileToUpload']['name'];
        
        $fp      = fopen($_FILES['fileToUpload']['tmp_name'], 'r');
            $content = fread($fp, filesize($_FILES['fileToUpload']['tmp_name']));
            $content = addslashes($content);
        fclose($fp);

        if(!get_magic_quotes_gpc())
        {
            $fileName = addslashes($fileName);
        }

    } else {
        echo "<p>File is not an image.</p>";
        $uploadOk = 0;
    }
} 

$servername = "localhost";
$username = "root";
$password = "spaceapps";
$dbName = "spaceapps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
//$conn = mysql_connect($servername, $username, $password, $dbName);
            
$sql = "INSERT INTO artwork(file, planet, firstName, lastName) VALUES ('". $content ."', '". $_POST['planet']."', '". $_POST['firstName'] ."', '". $_POST['lastName']. "')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: upload_pic.php");
?>
