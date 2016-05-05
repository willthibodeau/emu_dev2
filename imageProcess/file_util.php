<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: file_util.php                                                                              /
//   Description: file is straight out of murachs for processing images                               /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
// this file is straight from the book
function get_file_list($path) {
    $files = array();
    if (!is_dir($path)) { return $files; }
    

    $items = scandir($path);
    
    foreach ($items as $item) {
         $item_path = $path . DIRECTORY_SEPARATOR . $item;
         if (is_file($item_path)) {
             $files[] = $item;
         }
    }
    return $files;
}
?>
