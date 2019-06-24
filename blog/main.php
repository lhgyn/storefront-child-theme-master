
<div class="blog-flexible">

<?php

   $categories = [
      'saude',
      'boa-forma',
      'dietas',
      'fitness',
      'nutricao'
   ];

foreach ($categories as $key => $cat) : ?>

   <section class="blog-category container">
      <div class="row">
         <div class="col-md-8">
            <div class="row">
               <div class="col-xs-6 col-sm-8">
                  <h2>
                     <?=$cat?>            <span class="hidden-xs"> - </span><span class="latest">Últimos Artigos</span>
                  </h2>
               </div>
               <div class="col-xs-6 col-sm-4 text-right">
                  <a href="<?php echo home_url().'/category/saude' ?>" class="read-more">ver mais</a>
               </div>
            </div>

            <?php $loop = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>1, 'category_name'=>$cat));
            if($loop->have_posts()):while($loop->have_posts()):$loop->the_post(); ?>
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
            <?php endwhile; endif; wp_reset_postdata(); ?>

            <div class="row older-posts">
               <?php $loop = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>3, 'category_name'=>$cat, 'offset'=>1));
               if($loop->have_posts()):while($loop->have_posts()):$loop->the_post(); ?>
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
               <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
         </div>

         <div class="side-posts col-md-4 hidden-xs hidden-sm">
            <h3>Recomendado</h3>

            <?php $loop = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>6, 'category_name'=>$cat, 'offset'=>4, 'orderby'=>'rand'));
            if($loop->have_posts()):while($loop->have_posts()):$loop->the_post(); ?>

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

            <?php endwhile; endif; wp_reset_postdata(); ?>

         </div>
      </div>
   </section>

<?php endforeach; ?>
   
</div>