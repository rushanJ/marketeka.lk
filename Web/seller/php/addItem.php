<?php
session_start();
$shop=$_SESSION["shopId"];
include 'config.php';
header("Content-Type: application/json; charset=UTF-8");
$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["itemImg"]["name"]);
$itemCode= $_POST['itemCode'];

$name= $_POST['name'];
$description= $_POST['description'];
$qty= $_POST['qty'];
$measuringUnit= $_POST['measuringUnit'];
$unitPrice= $_POST['unitPrice']; 
$minPrice= $_POST['minPrice'];
$purchasePrice= $_POST['purchasePrice'];
$imgType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



$sql = 
"INSERT INTO  `item`(`id`, `itemCode`, `shop`, `name`, `description`, `qty`, `measuringUnit`, `unitPrice`, `minPrice`, `purchasePrice`,`itemLock`,`imgType`) 
                VALUES ('','$itemCode','$shop','$name','$description','$qty','$measuringUnit','$unitPrice','$minPrice','$purchasePrice','0','$imgType')
ON DUPLICATE KEY UPDATE
`name`='$name',
`description`='$description',
`qty`='$qty',
`measuringUnit`='$measuringUnit',
`unitPrice`='$unitPrice',
`minPrice`='$minPrice',
`purchasePrice`='$purchasePrice'
;
";

if(mysqli_query($conn, $sql)){
    $id = $conn->insert_id;
    echo $id;
        $target_dir = "../../images/";
        $target_file = $target_dir . $id.".".$imgType;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        echo $target_file;
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["itemImg"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["itemImg"]["size"] > 50000000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["itemImg"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["itemImg"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    $myObj=new \stdClass();
    $myObj->status = 1;
    $myJSON = json_encode($myObj);
    echo $myJSON;
   
} else{
    $myObj=new \stdClass();
    $myObj->status = 0;
    $myJSON = json_encode($myObj);
    echo $myJSON;
}

mysqli_close($conn);
header("Location: ../item"); /* Redirect browser */
exit();
?>
