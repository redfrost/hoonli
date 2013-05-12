<header class="banner" role="banner">
  <div class="container">
  
  	<?php
	   if (is_page( 'contact' )) {
            $contact_url= "";
        	} else {
            $contact_url= "contact";
        }
    ?> 
  
    <h1 class="site-title"><a class="brand" href="<?php echo home_url(); ?>/<?php echo $contact_url ?>"><?php bloginfo('name'); ?></a></h1>  
  
  
    <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
</header>

