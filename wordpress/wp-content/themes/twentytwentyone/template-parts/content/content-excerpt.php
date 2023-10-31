<?php

$post = get_post();
$date = $post->post_date;
$day = date("j", strtotime($date));
$month = date("F", strtotime($date));

$post_date = get_the_date('d', $post->ID);
$post_month = get_the_date('m', $post->ID)
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <div class="list_new_view">
                <div class="row">
                    <div class="col-md-5">
                        <div class="top_news_block_thumb">
                            <img src="http://fit.tdc.edu.vn/files/large/6ba9ad9cf9430f7862e80d77fe2b0fe3.jpg">
                        </div>
                    </div>
                    <div class="col-md-7 top_news_block_desc">
                        <div class="row">
                            <div class="col-md-3 col-xs-3 topnewstime">
                                <span class="topnewsdate"><?php echo $day  ?></span><br>
                                <span class="topnewsmonth">Tháng <?php echo $post_month ?></span><br>
                            </div>
                            <div class="col-md-9 col-xs-9 shortdesc">
                                <?php
                                the_title( sprintf( '<h4 class="h4"><a class="abc" href="%s">', esc_url( get_permalink() ) ), '</a></h4>' );
                                ?>
                                <p><?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = wp_trim_words($excerpt, 30, '.');
                                    echo $excerpt;
                                    ?>
                                    <a class="abc" href="<?php the_permalink(); ?>">[...]</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
<?php

$post = get_post();
$date = $post->post_date;
$day = date("j", strtotime($date));
$month = date("F", strtotime($date));

$post_date = get_the_date('d', $post->ID);
$post_month = get_the_date('m', $post->ID)
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <div class="list_new_view">
                <div class="row">
                    <div class="col-md-5">
                        <div class="top_news_block_thumb">
                            <img src="http://fit.tdc.edu.vn/files/large/6ba9ad9cf9430f7862e80d77fe2b0fe3.jpg">
                        </div>
                    </div>
                    <div class="col-md-7 top_news_block_desc">
                        <div class="row">
                            <div class="col-md-3 col-xs-3 topnewstime">
                                <span class="topnewsdate"><?php echo $day  ?></span><br>
                                <span class="topnewsmonth">Tháng <?php echo $post_month ?></span><br>
                            </div>
                            <div class="col-md-9 col-xs-9 shortdesc">
                                <?php
                                the_title( sprintf( '<h4 class="h4"><a class="abc" href="%s">', esc_url( get_permalink() ) ), '</a></h4>' );
                                ?>
                                <p><?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = wp_trim_words($excerpt, 30, '.');
                                    echo $excerpt;
                                    ?>
                                    <a class="abc" href="<?php the_permalink(); ?>">[...]</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
