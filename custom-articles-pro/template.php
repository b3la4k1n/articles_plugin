<div class="single-box">
    <div class="row">
        <div class="col-lg-4 pr-desc">
            <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>')"></div>
        </div>
        <div class="col-lg-8 pl-desc">
            <div class="post-content">
                <div href="" class="category-post">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        $category_names = array();
                        foreach ($categories as $category) {
                            $category_names[] = $category->name;
                        }
                        echo '<p class="text-uppercase category-name">' . implode(', ', $category_names) . '</p>';
                    }
                    ?>
                    <h2><?php echo the_title(); ?></h2>
                </div>
                <div class="links">
                    <a class="text-decoration-none read-more" href="<?php echo get_permalink(); ?>">Read more</a>
                    <div class="visit-rate">
                    <?php
                        $rating = get_post_meta(get_the_ID(), 'rating', true);
                        $site_link = get_post_meta(get_the_ID(), 'site_link', true);
                    ?>
                    <span class="star"><?php echo !empty($rating) ? '⭐' : ''; ?></span>
                    <?php if (!empty($rating)) : ?>
                        <span class="rating"><?php echo $rating; ?></span>
                    <?php endif; ?>
                    <?php if (!empty($site_link)) : ?>
                        <a class="text-decoration-none text-white visit-site" rel="nofollow" target="_blank" href="<?php echo esc_url($site_link); ?>">Visit site</a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
