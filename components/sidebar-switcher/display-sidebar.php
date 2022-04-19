<?php
// =========================================================================
// Sidebar Switcher
// =========================================================================
function display_sidebar(){ 
    if(get_field('show_sidebar')) {
        echo '<style>
                #primary.content {
                    width: 100%;
                }
                main.content { 
                    max-width: 100%
                }
            </style>';
        
    } else {
        get_sidebar(); 
        echo '<style>
        @media (min-width: 768px) {
            .content-sidebar-wrap {
                display: flex;
            }
        }
            </style>';
    }
}