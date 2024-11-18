<?php get_header(); ?>


<div class="container">
    
    <div class="row">
        <?php 
        if (have_posts()) { //start if

          while (have_posts()) { // start while
            the_post(); ?>
            <div class="col-sm-6">
              <div class="main-post">
                <h3 class="post-title text-center">
                  <a href="<?php the_permalink() ?>">
                    <?php
                    the_title();                  
                ?>
                  </a>
                </h3>
                <div>
                  <span class="post-auther"> <i class="bi bi-person"></i> <?php the_author_posts_link() ?>,</span>
                  <span class="post-date"><i class="bi bi-calendar2-week"></i> <?php the_time('F, Y') ?>, </span>
                  <span class="post-comment"><i class="bi bi-chat-text"></i> <?php comments_popup_link()?></span>
                </div>
                
                <?php the_content('<p class="post-content lh-lg">', '</p>');?>
              <hr/>
              <?php 
                  the_tags('<span class="categories "> <i class="bi bi-tags-fill pe-2"></i> ', '</span>, ')
              ?>
              <p class="categories "> <i class="bi bi-tags-fill pe-2"></i>
              <?php 
                  the_category(', ')
              ?>
              </p>
              
              </div>
            </div>
            <?php
          }//end while
        } // end if



        ?>
    </div>
</div>
  <!--
   <div class="container">
  	
  	<div class="row">
  		<div class="col-sm-6">
  		<div class="main-post">
  			<h3 class="post-title">post title</h3>
  			<div>
  				<span class="post-auther"> <i class="bi bi-person"></i> amira,</span>
  			<span class="post-date"><i class="bi bi-calendar2-week"></i> 11-11-2022, </span>
  			<span class="post-comment"><i class="bi bi-chat-text"></i> 2 comments</span>
  			</div>
  			<img class="d-block w-100 img-responsive" decoding="async" src="https://via.placeholder.com/600x200/300" alt="imge">

  			<p class="post-content lh-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  			<hr/>
  			<p class="categories"><i class="bi bi-tags-fill"></i> test, html</p>

  		</div>
  		
  	</div>

  		  	</div>
  </div> -->
<!-- <?php bloginfo('name'); ?> -->

<!-- <?php echo get_template_directory_uri() . './css/bootstrap.min.css'; ?> -->

<?php get_footer(); ?>