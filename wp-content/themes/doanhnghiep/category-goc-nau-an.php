<?php
get_header();
?>
<div id="wrap">
    <div class="g_content">
        <div class="container">
            <div class="content_archive">
                <div class="list_post_new_archive tab-content-noflex current" id="tab-1">
                    <?php
                    $list_post_arg_bigpost_new = array(
                        'posts_per_page' => 1,
                        'orderby' => 'publish_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'cat' => 48
                    );
                    $list_post_q_bigpost_new = new WP_Query();
                    $list_post_q_bigpost_new->query($list_post_arg_bigpost_new);
                    ?>
                    <div class="big_post pw">
                        <?php
                        while($list_post_q_bigpost_new->have_posts()): $list_post_q_bigpost_new->the_post();
                        ?>
                        <?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
                        <div class="col-sm-6">
                            <figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
                        </div>
                        <div class="post_wrapper_content col-sm-6">
                            <h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php if(is_search() OR is_archive()){?>
                                <div class="excerpt"><p><?php echo excerpt(150); ?></p></div>
                                <a class="readmore" href="<?php echo the_permalink(); ?>">Xem thêm</a>
                            <?php }
                            else {
                                if($post->post_excerpt){ ?>
                                    <div class="excerpt"><p><?php echo excerpt(150); ?></p></div>
                                    <a class="readmore" href="<?php echo the_permalink(); ?>">Xem thêm></a>
                                <?php } else{
                                    the_content();
                                }
                            } endwhile; ?>
                        </div>
                    </div>
                    <?php
                    $list_post_arg = array(
                        'posts_per_page' => 20,
                        'orderby' => 'publish_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'cat' => 48,
                        'offset' => 1
                    );
                    $list_post_q = new WP_Query();
                    $list_post_q->query($list_post_arg);
                    ?>
                    <ul class="wrap_list_pagi">
                        <?php
                        while($list_post_q->have_posts()): $list_post_q->the_post();
                            get_template_part('includes/frontend/loop/loop_post');
                        endwhile;
                        ?>
                    </ul>
                    <?php wp_reset_postdata();?>
                </div>
                <!-- list_post_new_archive -->

            </div><!-- content_archive -->

        </div>


    </div>
</div>
</div>
<?php get_footer(); ?>
