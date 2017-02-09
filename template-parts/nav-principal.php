<?php
/**
 * Template part for Nav
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcaster
 */

?>
 <nav>            
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header ">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>                
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
		    wp_nav_menu( array(
		       'theme_location' => 'principal',
		       'depth' => 2,
		       'container' => false,
		       'menu_class' => 'nav navbar-nav',
		       'fallback_cb' => 'wp_page_menu',
		        //Process nav menu using our custom nav walker
		       'walker' => new wp_bootstrap_navwalker())
			);
		?>
    </div><!-- /.navbar-collapse -->
</nav>