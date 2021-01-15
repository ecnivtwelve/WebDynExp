<?php
    // head tags
    echo '<meta charset="utf-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<script>console.log(\'WebDynExp is alive\');</script>';
    echo '<title>'.$wd_title.'</title>';
    echo '<link rel="stylesheet" href="'.$wd_css.'">';

    // html elements
    function h1($class, $content) {
        echo '<h1 class="'.$class.'">'.$content.'</h1>';
    }
    function h2($class, $content) {
        echo '<h2 class="'.$class.'">'.$content.'</h2>';
    }
    function h3($class, $content) {
        echo '<h3 class="'.$class.'">'.$content.'</h3>';
    }
    function h4($class, $content) {
        echo '<h4 class="'.$class.'">'.$content.'</h4>';
    }
    function h5($class, $content) {
        echo '<h5 class="'.$class.'">'.$content.'</h5>';
    }
    function p($class, $content) {
        echo '<p class="'.$class.'">'.$content.'</p>';
    }
    function br() {
        echo '</br>';
    }
    function div($class) {
        echo '<div class="'.$class.'">';
    }
    function div_end() {
        echo '</div>';
    }
    function img($class, $src) {
        echo '<img class="'.$class.'" src="'.$src.'">';
    }
?>