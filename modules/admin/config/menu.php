<?php
$config['dashboard'] = array(
    'title' => 'General',
    'menu' => array(
        array('label' => 'Dashboard','icon' => array('user',2), 'type' => 'dashboard', 'url' => 'admin')
    )
);

$config['cms_setting'] = array(
    'title' => 'CMS',
    'condition' => OnlyForAdmin(),
    'menu' => array(
        array(
            'label' => 'Manage Role User',
            'icon' => array('people', 5),
            'type' => 'manage_role_user',
            'condition' => CHECK_PERMISSION('ROLE_SYSTEM'),
            'submenu' => array(
                array(
                    'label' => 'Role Category',
                    'type' => 'manage_role_category',
                    'icon' => array('chart', 2),
                    'url' => 'admin/manage-role-category',
                ),
                array(
                    'label' => 'Manage User',
                    'type' => 'manage_user',
                    'icon' => array('people', 5),
                    'url' => 'admin/manage-role-account'
                )

            )
        ),
        array(
            'label' => 'Setting',
            'type' => 'cms_setting',
            'icon' => array('knowledgebase', 4),
            'url' => 'cms/setting'
        ),
        array(
            'label' => 'Gallery Image',
            'type' => 'gallery_setting',
            'icon' => array('gallery', 4),
            'url' => 'cms/gallery-images'
        ),
        array(
            'label' => 'Slider',
            'type' => 'slider_setting',
            'icon' => array('gallery', 4),
            'url' => 'cms/slider'
        ),
        array(
            'label' => 'Page Area',
            'type' => 'page_area',
            'icon' => array('file', 3),
            'submenu' => array(
                array(
                    'label' => 'Add Pages',
                    'type' => 'add_pages',
                    'icon' => array('add-item', 4),
                    'url' => 'cms/add-page',
                ),
                array(
                    'label' => 'List Pages',
                    'type' => 'list_pages',
                    'icon' => array('tablet-text-down', 4),
                    'url' => 'cms/list-pages',
                ),
                array(
                    'label' => 'Menu Section',
                    'type' => 'cms_menu_section',
                    'icon' => array('menu', 4),
                    'url' => 'cms/menu-section'
                ),

            )
        ),
        array(
            'label' => 'Enquiry Data',
            'type' => 'enquiry_data',
            'icon' => array('file', 4),
            'url' => 'cms/enquiry-data'
        ),
        /*
        array(
            'label' => 'Gallery',
            'type' => 'gallery_section',
            'icon' => array('gallery', 3),
            'submenu' => array(
                array(
                    'label' => 'Image Gallery',
                    'type' => 'image_gallery',
                    'icon' => array('gallery', 4),
                    'url' => 'cms/image-gallery',
                ),
                array(
                    'label' => 'Video Gallery',
                    'type' => 'list_center',
                    'icon' => array('youtube', 4),
                    'url' => 'cms/video-gallery',
                )
            )
        ),
        */
    )
);
$staticMenus = array(
    array(
        'label' => 'Forms',
        'type' => 'static_forms',
        'icon' => array('file', 4),
        'url' => 'cms/forms'
    )
);
if (file_exists(THEME_PATH . 'config/menu.php')) { {
        require THEME_PATH . 'config/menu.php';
        $staticMenus[] = $menu;
        unset($menu);
    }

}
$config['fix_properties'] = array(
    'title' => 'Theme Properites',
    'condition' => OnlyForAdmin(),
    'menu' => $staticMenus
)
    ?>