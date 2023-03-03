<?php
// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('tdx_pic_10', false);

// mobile menu/search background
td_demo_misc::update_background_mobile('tdx_pic_11');

// login background
td_demo_misc::update_background_login('');


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_header_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Magazine PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_magazine_pro_id);


update_post_meta( $template_header_template_magazine_pro_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id);


$template_footer_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer - Magazine PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_magazine_pro_id);


$template_category_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Magazine PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_magazine_pro_id);


$template_single_post_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Magazine PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_magazine_pro_id);


$template_author_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template - Magazine PRO',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_magazine_pro_id);


$template_tag_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template - Magazine PRO',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_magazine_pro_id);


$template_date_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template - Magazine PRO',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_magazine_pro_id);


$template_search_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template - Magazine PRO',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_magazine_pro_id);


$template_404_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template - Magazine PRO',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
));
