<?php
    @session_start();
    include 'inc/connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get post ID and selected image path from the form submission
        $_SESSION['eID'] = $eID; //grabbing eID successfully
        $_SESSION['imgPath'] = $imagePath
        $eID = $_POST['eID'];
        $imagePath = $_POST['imgPath'];

        // Update the 'imgPath' column for the specified post ID in the 'posts' table
        $updateQuery = "UPDATE posts SET imgPath = '$imagePath' WHERE eID = $eID";
        if ($db->query($updateQuery) === TRUE) {
            echo "Image path added to the 'imgPath' column for post ID: $eID.";
        } else {
            echo "Error: " . $updateQuery . "<br>" . $conn->error;
        }
    }
?>