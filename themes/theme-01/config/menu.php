<?php
$menu = array(
    'label' => 'Static Pages',
    'type' => 'static_page_area',
    'icon' => array('file', 3),
    'submenu' => array(
        array(
            'label' => 'Home Page',
            'type' => 'home_page',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/home_page',
        ),
    )
    );