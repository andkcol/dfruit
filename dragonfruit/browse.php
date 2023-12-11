<?php
    @session_start();
    include 'inc/connect.php';
    // Fetch available images from the root directory
    $directory = 'assets/img/img';
    $availableImages = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $eID = $_SESSION['eID']; //grabbing eID successfully
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Select Image for Post</title>
    </head>
    <body>
        <h2>What image best suits your event?</h2>
        <form method="post" action="pics.php">
            <input type="hidden" name="eID" value="<?php echo $eID; ?>"> <!-- Assuming we have the post ID -->
            <?php foreach ($availableImages as $imagePath) : ?>
                <label>
                    <img src="<?php echo $imagePath; ?>" height="100">
                    <input type="radio" name="imagePath" value="<?php echo $imagePath; ?>">
                </label>
            <?php endforeach; ?>
            <br>
            <button type="submit">Save Selected Image</button>
        </form>
    </body>
</html>