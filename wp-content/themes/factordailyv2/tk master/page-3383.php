<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div class="row">
    <div class="jumbotron" style="background:url(<?php the_post_thumbnail_url('large');?>) no-repeat center center; background-size:cover">
        <div id="post-<?php the_ID(); ?>" class="category-future">
            <img src="http://placehold.it/1111x625" class="img-responsive">
            <div class="blurb">
                <div class="vertical-table">
                    <div class="vertical-bottom">
                        <h5 class="authorinfo">
                        </h5>
                        <h1 class="page-title">
                            <?php the_title();?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- Latest Factors -->
<section class="row">
    <div class="container">
        <div class="row">
            <?php wp_reset_query(); while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</section>

    <div class="typeform-widget" data-url="https://factordaily1.typeform.com/to/H9Ni77" data-text="Registration Form" style="width:100%;height:600px;">
    </div>
    <script>
        (function(){
            var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()
    </script>


<?php get_footer(); ?>