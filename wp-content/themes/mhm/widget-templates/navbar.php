
<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

    <nav class="site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

        <div class="navbar navbar-inverse">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <div class="navbar-header">

                            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Your site title as branding in the menu -->
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

                        </div>

                        <!-- The WordPress Menu goes here -->
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => '',
                                    'menu_id' => 'main-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                )
                        ); ?>

                    </div> <!-- .col-md-11 or col-md-12 end -->

                </div> <!-- .row end -->

            </div> <!-- .container -->

        </div><!-- .navbar -->

    </nav><!-- .site-navigation -->

</div><!-- .wrapper-navbar end -->
