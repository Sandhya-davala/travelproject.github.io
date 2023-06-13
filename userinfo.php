<?php
$insertconf = false;
if (isset($_POST['Name']) && isset($_POST['Mobile']) && isset($_POST['Email']) && isset($_POST['Age']) && isset($_POST['Gender']) && isset($_POST['Comment'])) {
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "php-proj";

    $connection = mysqli_connect($server, $user, $password, $dbname);

    if (!$connection) {
        die("Connection with the database failed due to " . mysqli_connect_error());
    }

    $Name = $_POST['Name'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Comment = $_POST['Comment'];

    // Validate that the Mobile field is not empty
    if (empty($Mobile)) {
        die("Mobile field is required.");
    }

    $sql_query = "INSERT INTO `userrecords` (`Name`, `Mobile`, `Email`, `Age`, `Gender`, `Comment`) VALUES ('$Name', '$Mobile', '$Email', '$Age', '$Gender', '$Comment');";

    if ($connection->query($sql_query) === true) {
        $insertconf = true;
    } else {
        echo "Error: $sql_query <br>" . $connection->error;
    }
    $connection->close();
}
?>