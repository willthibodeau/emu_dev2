<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: valid_member.php                                                                           /
//   Description: verifies the user is a valid member                                                 /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////

    if (!isset($_SESSION['member'])) {
        header('Location: ../errors/error.php' );
    }
?>