<?php
function createnavbar($array) {
    ?>
    <div id="navbar" class="sticky"> 
        <ul id="navfunction"> 
            <?php
            echo '<li><p><b class="title">' . $array['title'] . '</b></p></li>';
            foreach ($array['nav'] as $nav) {
                if ($nav[2] == 'special') {
                    echo '<li><a class="' . $nav[2] . '" href="' . $nav[1] . '">' . $nav[0] . '</a></li>';
                } elseif ($nav[2] == 'disabled') {
                    echo '<li><a class="' . $nav[2] . '" href="#">' . $nav[0] . '</a></li>';
                } elseif ($nav[2] == 'normal') {
                    echo '<li><a href="' . $nav[1] . '">' . $nav[0] . '</a></li>';
                }
                }
            ?>
        </ul> 
    </div> 
    <?php
}
?>