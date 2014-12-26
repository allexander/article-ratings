<?php

function d($data) {
    echo '<div class="debug-box"><pre class="debug-box-inner">';
    print_r( $data );
    echo '</pre></div>';
}
