<?php
namespace ArticleRatings;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of URLs
 *
 * @author Alexander
 */
class URLs {
   
    public static function moduleURL($name)
    {
        $adminURL = basename(filter_input(INPUT_SERVER, 'php_self')) . "?page=" . filter_input(INPUT_GET, 'page');
        return $adminURL . "&module=" . $name;
    }
    
}
