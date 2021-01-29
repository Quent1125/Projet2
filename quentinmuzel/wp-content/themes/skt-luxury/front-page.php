<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Luxury
 */
get_header(); 

$hideslide = get_theme_mod('hide_slides', 1);
$secwithcontent = get_theme_mod('hide_home_secwith_content', 1);
$hide_sectiontwo = get_theme_mod('hide_sectiontwo', 1);
$hide_home_third_content = get_theme_mod('hide_home_third_content', 1);
$hide_sectionfour = get_theme_mod('hide_sectionfour', 1);
$hide_home_five_content = get_theme_mod('hide_home_five_content', 1);

if (!is_home() && is_front_page()) { 
if( $hideslide == '') { ?>
<!-- Slider Section -->
<?php 
$slidepages = array();
for($sld=7; $sld<10; $sld++) { 
	$mod = absint( get_theme_mod('page-setting'.$sld));
    if ( 'page-none-selected' != $mod ) {
      $slidepages[] = $mod;
    }	
} 
if( !empty($slidepages) ) :
$args = array(
      'posts_per_page' => 3,
      'post_type' => 'page',
      'post__in' => $slidepages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :	
	$sld = 7;
?>
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $skt_luxury_slideno[] = $i;
          $skt_luxury_slidetitle[] = get_the_title();
		  $skt_luxury_slidedesc[] = get_the_excerpt();
          $skt_luxury_slidelink[] = esc_url(get_permalink());
          ?>
          <img src="http://quentinmuzel.com/wp-content/uploads/2020/02/Chalet-8-scaled.jpeg" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php //http://quentinmuzel.com/wp-content/uploads/2020/02/snow-3373432_1920.jpg
        $sld++;
        endwhile;
          ?>
    </div>
        <?php
        $k = 0;
        foreach( $skt_luxury_slideno as $skt_luxury_sln ){ ?>
    <div id="slidecaption<?php echo esc_attr( $skt_luxury_sln ); ?>" class="nivo-html-caption">
      <div class="slide_info">
        <h2><?php echo esc_html($skt_luxury_slidetitle[$k] ); ?></h2>
        <p ><?php echo esc_html($skt_luxury_slidedesc[$k] ); ?></p>
        <div class="clear"></div>

			<a class="slide_more" href="<?php echo esc_url($skt_luxury_slidelink[$k] ); ?>">
          <?php  esc_html_e('En voir plus', 'skt-luxury');?>
          </a> 
		
		  
		  
		  
      </div>
		
    </div>
 	<?php $k++;
       wp_reset_postdata();
      } ?>
<?php endif; endif; ?>
  </div>
  <div class="clear"></div>
</section>
<?php } } 
	if(!is_home() && is_front_page()){ 
	if( $secwithcontent == '') {
?>
<section class="hometwo_section_area">
    	<div class="center">
             <div class="hometwo-row">
             	<?php
				$section2_title = get_theme_mod('section2_title');
				$sectiononetopquery = new WP_query('page_id='.get_theme_mod('page-column-left',true)); 
				while( $sectiononetopquery->have_posts() ) : $sectiononetopquery->the_post(); 
				?>
 				<h2>
                	<?php if(!empty($section2_title)){?>
                	<small><?php echo esc_attr($section2_title); ?></small>
                    <?php } ?>
					<?php //the_title(); ?>
                </h2>
                <?php the_content(); ?>
                <?php  endwhile; ?>
             </div>
        </div>
    </section>

<?php }}  
if (!is_home() && is_front_page()) { 
if( $hide_sectiontwo == '') { ?>
<section id="sectionone">
<div class="home_section1_content">
		<?php 
            for($l=1; $l<4; $l++) { 
            if( get_theme_mod('sec-column-left'.$l,false)) {
            $section1block = new WP_query('page_id='.get_theme_mod('sec-column-left'.$l,true)); 
            while( $section1block->have_posts() ) : $section1block->the_post(); 
        ?>
        <div class="sc1-service-cols">
            <div class="sc1-service-box-outer">
	            <?php if( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?>
                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); 
           }} 
        ?>
        <div class="clear"></div>
       </div>
</section>


<?php } } ?>
<?php if (!is_home() && is_front_page()) {
	  if( $hide_home_third_content == '' ){	
?>
<section class="home3_section_area">

  <div class="center">
	 <?php
		  
        $section3_title = get_theme_mod('section3_title');
		$section3_button1_title = get_theme_mod('section3_button1_title');
		$section3_button1_link = get_theme_mod('section3_button1_link');
		$section3_button2_title = get_theme_mod('section3_button2_title');
		$section3_button2_link = get_theme_mod('section3_button2_link');
        $sectionthreequery = new WP_query('page_id='.get_theme_mod('third-column-left1',true)); 
        while( $sectionthreequery->have_posts() ) : $sectionthreequery->the_post(); 
     ?>  	
     <div class="slide-left-sec">   
 	 <!--<h2>
     	<?php if(!empty($section3_title)){?>
     	<small><?php echo esc_html($section3_title); ?></small>
        <?php } ?>
        <?php the_title(); ?>
     </h2>	-->
		 
     <div class="sec3-desc">
		
     	<?php the_content(); ?>
     </div>
     <?php endwhile; ?>
     <?php if(!empty($section3_button1_title)){?>
     <a class="sec3-block-button" href="<?php echo esc_url($section3_button1_link);?>"><?php echo esc_html($section3_button1_title);?></a>
     <?php } ?>
     <?php if(!empty($section3_button2_title)){?>
     <a class="sec3-block-button" href="<?php echo esc_url($section3_button2_link);?>"><?php echo esc_html($section3_button2_title);?></a>
     <?php } ?>
     </div>
  </div>
</section>
<?php } } ?>
<div class="clear"></div>
<div class="container">
     <div class="page_content-front">
      <?php 
	if ( 'posts' == get_option( 'show_on_front' ) ) {
    ?>
    <section class="site-main">
      <div class="blog-post">
        <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                        // Previous/next post navigation.
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'skt-luxury' ),
							'next_text' => esc_html__( 'Next', 'skt-luxury' ),
						) );
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    endif;
                    ?>
      </div>
      <!-- blog-post --> 
    </section>
    <?php
} else {
    ?>
	<section class="site-main">
      <div class="blog-post">
        <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
							 ?>
                             <header class="entry-header">           
            				<h1><?php the_title(); ?></h1>
                    		</header>
                             <?php
                            the_content();
                        endwhile;
                        // Previous/next post navigation.
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'skt-luxury' ),
							'next_text' => esc_html__( 'Next', 'skt-luxury' ),
						) );
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    endif;
                    ?>
      </div>
      <!-- blog-post --> 
    </section>
	<?php
}
	?>
    <?php get_sidebar();?>
    <div class="clear"></div>
  </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>