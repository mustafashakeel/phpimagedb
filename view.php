<?php
require_once 'conf.php';

// Get image data from database

$sql = "SELECT image FROM images ORDER BY id DESC";
$result = $db->query($sql);

if ($result->num_rows > 0) {
?>
    <div class="gallery">
        <?php
        while ($row = $result->fetch_assoc()) { ?>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />

        <?php
        }


        ?>
    </div>



<?php

} else {
    echo "No image(s) found...";
}
