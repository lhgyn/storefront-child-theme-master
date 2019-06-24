<?php 

   $post_terms = get_the_terms( get_the_ID(), 'category');
   $all_terms = get_terms('category');

?>


<div class="blog-flexible">


   <section class="blog-category container section-main">
      <div class="row">
         <div class="col-md-8">
            <div class="row">
               <div class="col-xs-6 col-sm-8">
                  <h2>
                     <a href="<?= home_url('/blog'); ?>">Blog</a> &nbsp;/&nbsp; <?php echo single_cat_title(); ?> <span class="hidden-xs"> - </span><span class="latest">Últimos Artigos</span>
                  </h2>
               </div>
               <div class="col-xs-6 col-sm-4 text-right">
                  <a href="<?php echo home_url().'/category/saude' ?>" class="read-more">ver mais</a>
               </div>
            </div>

            <?php 
            $count = 1;
            if(have_posts()):while(have_posts()):the_post(); ?>
               <?php if($count==1): ?>
               <div class="feature-post">
                  <div class="post-details">
                     <a href="<?php the_permalink(); ?>">                     
                        <?php
                           if(get_the_post_thumbnail()): 
                              the_post_thumbnail( 'full', array('class'=>'img-responsive') );
                           else: 
                              echo '<img src="'.get_stylesheet_directory_uri().'/blog/assets/default-image.jpg" class="img-responsive">';
                           endif;
                        ?>
                        <div class="main-feature-excerpt">
                           <h3><?php the_title(); ?></h3>
                           <p class="feature-excerpt"><?php the_excerpt(); ?></p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="row older-posts">
               <?php else: ?>
               <div class="other-posts col-sm-4">
                  <a href="<?php the_permalink() ?>">
                     <div class="row older-posts-mobile">
                        <div class="col-xs-6 col-sm-12">
                           <?php
                              if(get_the_post_thumbnail()): 
                                 the_post_thumbnail( 'full', array('class'=>'img-responsive') );
                              else: 
                                 echo '<img src="'.get_stylesheet_directory_uri().'/blog/assets/default-image.jpg" class="img-responsive">';
                              endif;
                           ?>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                           <p><?php the_title(); ?></p>
                           <p class="read-more">ler mais</p>
                        </div>
                     </div>
                  </a>
               </div>
               <?php endif; ?>
               <?php $count++; endwhile; endif; ?>
            </div>
         </div>

         <div class="side-posts col-md-4 hidden-xs hidden-sm">
            <div class="blog-header-categories">
               <h3>Categorias</h3>
               <ul class="link-count" style="height: auto;">
                  <?php
                     foreach ($all_terms as $key => $term) { ?>
                        <li>
                           <span>
                              <a href="<?php echo home_url('/category/') . $term->slug ?>"><?php echo $term->name ?></a>
                           </span>
                        </li>
                     <?php }
                   ?>
               </ul>
            </div>

            <h3>Recomendado</h3>
            <?php  if(have_posts()):while(have_posts()):the_post(); ?>

            <a href="<?php the_permalink(); ?>">
               <div class="row">
                  <div class="col-md-5">
                     <?php
                        if(get_the_post_thumbnail()): 
                           the_post_thumbnail( 'full', array('class'=>'img-responsive') );
                        else: 
                           echo '<img src="'.get_stylesheet_directory_uri().'/blog/assets/default-image.jpg" class="img-responsive">';
                        endif;
                     ?>
                  </div>
                  <div class="col-md-7">
                     <h4><?php the_title(); ?></h4>
                     <p class="read-more">ler mais...</p>
                  </div>
               </div>
            </a>

            <?php endwhile; endif; ?>

         </div>
      </div>
   </section>

   
</div>