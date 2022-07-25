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