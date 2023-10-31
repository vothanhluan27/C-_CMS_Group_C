<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="box-category box-xemnhieu">
                <hgroup class="width_common title-box-category">
                    <h2 class="parent-cate active"><a
                                data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop"
                                title="Xem nhiều" href="/tin-xem-nhieu" class="inner-title" data-itm-added="1">Xem nhiều</a></h2>
                </hgroup>
                <div class="width_common list-top-view">
                    <?php $the_query = new WP_Query( 'posts_per_page=8' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <article class="item-news">
                            <span class="number-top-view"><?php echo $the_query->max_num_comment_pages++ ?></span>
                            <h3 class="title-news"><a href=""><?php the_title(); ?><span class="meta-news"></a>
                            </h3>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div></div>
        <div class="col-md-6"></div>
        <div class="col-md-3"></div>
    </div>
</div>