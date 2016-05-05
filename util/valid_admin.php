<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: valid_admin.php                                                                            /
//   Description: verifies the admin is is a valid administrator                                      /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
   
    if (!isset($_SESSION['admin'])) {
        header('Location: ../errors/error.php' );
    }
?>