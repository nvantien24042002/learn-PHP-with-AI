<?php
require 'src/header.php';
require 'lib/data.php';
?>
        <div id="main">
            <?php 
                $data = array(1,2,3,4);
                show_data($data);
            ?>
        </div>
<?php
require 'src/footer.php';
?>