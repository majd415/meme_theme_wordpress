<?php 
// Theme support
add_theme_support('post-thumbnails');//for add support to add image to posts
function lwn_enqueue_stylesheets(){
    wp_enqueue_style('lwn-stylesheet',get_stylesheet_uri());
    wp_style_add_data('lwn-stylesheet','rtl','replace');// if the language extend the rtl add stylesheet-rtl instiede on style  


}
add_action('wp_enqueue_scripts', 'lwn_enqueue_stylesheets');

//lwr menus
function lwn_register_menus(){

    $args=array('main-menu'=>'Main Menu');
    register_nav_menus($args);
}

add_action('init', 'lwn_register_menus');
//lwn widgets footer
function lwn_register_widgets(){//for do the footer dynamic and we can use register_sidebar(); for any section in website
    $footer1=array(
       'name'=>'Footer column 1',
       'id'=>'footer1',
       'before_widget'=>' <div id="%1$s" class="widget lwn-widget %2$s">',//widget 1 and %2$s let it with wordpress
       'after_widget'=>'</div>',
       'before_title'=>'<h4>',
       'after_title'=>'</h4>',


    );// first step we have to create  <div class="footer-column">
    //<div class="lwn-widget">
     // <h4>About the website</h4>
     // <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima repellendus ipsa, nesciunt quod pariatur reiciendis dicta. Et, consectetur culpa aliquid porro atque rem dolorum quis, distinctio neque, deleniti nemo recusandae.</p>

    //</div> after that we have to clear it from html and add it to footer array


    register_sidebar($footer1);
    $footer2=array(
        'name'=>'Footer column 2',
        'id'=>'footer2',
        'before_widget'=>' <div id="%1$s" class="widget lwn-widget %2$s">',//widget 1 and %2$s let it with wordpress
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>',
 
 
     );// first step we have to create  <div class="footer-column">
     
 
     register_sidebar($footer2);
     $footer3=array(
        'name'=>'Footer column 3',
        'id'=>'footer3',
        'before_widget'=>' <div id="%1$s" class="widget lwn-widget %2$s">',//widget 1 and %2$s let it with wordpress
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>',
 
 
     );
 
     register_sidebar($footer3);
     $sidebar=array( //we have to create sidebar file .php after that we have to register it in functions.php after that i can calling it in every page or section 
        'name'=>'sidebar',
        'id'=>'sidebar',
        'before_widget'=>' <div id="%1$s" class="widget card lwn-widget %2$s">',//widget 1 and %2$s let it with wordpress
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>',
 
 
     );
 
     register_sidebar($sidebar);

     

}

add_action('widgets_init','lwn_register_widgets');