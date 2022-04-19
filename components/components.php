<?php
defined( 'ABSPATH' ) || exit; 

// Sidebar Switcher
require('sidebar-switcher/display-sidebar.php');

function exitpopup(){include('exit-popup/exit-popup.php');}
function minicrm_sapi(){include('mini-crm/minicrm-sapi.php');}
function owlcarousel(){include('owlcarousel/owlcarousel.php');}
function divider(){include('divider/divider.php');}



// Icons
function quote(){include('svg/quote.php');}
function arrow_up(){include('svg/arrow-up.php');}
function arrow_down(){include('svg/arrow-down.php');}
function arrow_left(){include('svg/arrow-left.php');}

// Trustindex
function trustindex_google(){ echo do_shortcode('[trustindex no-registration=google]');}
function trustindex_facebook(){ echo do_shortcode('[trustindex no-registration=facebook]');}

// MiniCRM
function minicrm(){
    if(
        !is_page(3833) &&
        !is_page(4395) && // Karrier
        !is_page(3832) && // Kapcsolatfelvetel sikeres
        !is_page(2627) && // Köszönjük szépen a megtisztelő megkeresést
        !is_page(3834) && // Feliratkozas kezdemenyezes
        !is_page(1709) // Feliratkozas
        ){
        include('mini-crm/minicrm.php');
    }
}