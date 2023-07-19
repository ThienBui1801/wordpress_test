<?php
function filter()
{
    $html = '';

    $category = $_POST['category'];
    $s = $_POST['s'];
    parse_str($category, $data_parsed);
    $s = $data_parsed['s'];
    $taxonomy = 'brand_cat';
    $categories = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);

    foreach ($categories as $category) {
        $category_slug = $category->slug;
        $category_name = $category->name;

        $args = array(
            'post_type' => 'brand',
            'posts_per_page' => -1,
            's' => $s,
            'tax_query' => [[
                'taxonomy' => 'brand_cat',
                'field' => 'slug',
                'terms' => $category_slug,
            ]],
        );

        if ($s) {
            $args['s'] = $s;
        };

        $brands = new WP_Query($args);
?>
        <?php if ($s && $brands->have_posts()) : ob_start(); ?>
            <div id="<?php echo $category_slug ?>" class="brand-container">
                <h2 class="main-title"><?php echo $category_name ?></h2>

                <div class="brand-grid js-brands">
                    <?php while ($brands->have_posts()) : $brands->the_post();
                        get_template_part('template-parts/cards/brand');
                    endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php
        wp_reset_postdata();
        $html .= ob_get_clean();
    }

    echo $html;
    die();
}
add_action('wp_ajax_filter', 'filter');
add_action('wp_ajax_nopriv_filter', 'filter');

function filter_alphabet()
{
    $html = '';

    $selectedLetter = $_POST['letter'];
    var_dump($selectedLetter);
    $taxonomy = 'brand_cat';
    $categories = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);

    foreach ($categories as $cat) {
        $category_slug = $cat->slug;
        $category_name = $cat->name;

        $args = array(
            'post_type' => 'brand',
            'posts_per_page' => -1,
            'orderby' => 'title',
            // 'category_name' => $selectedLetter,
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'terms' => $category_slug,
                ),
            ),
        );

        $brands = new WP_Query($args);

        if ($selectedLetter && $brands->have_posts()) {
            // var_dump($brands->have_posts());
            while ($brands->have_posts()) : $brands->the_post();
                $post_title = get_the_title();
            endwhile;
            ob_start();
        ?>
            <?php if ($selectedLetter && $post_title) : ?>
                <?php
                echo '<pre>';
                print_r($selectedLetter);
                echo '</pre>';
                ?>
                <div id="<?php echo $category_slug ?>" class="brand-container">
                    <h2 class="main-title"><?php echo $category_name ?></h2>

                    <div class="brand-grid js-brands">
                        <?php while ($brands->have_posts()) : $brands->the_post();
                            get_template_part('template-parts/cards/brand');
                        endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
<?php
            $html .= ob_get_clean();
        }

        wp_reset_postdata();
    }

    echo $html;
    wp_die();
}
add_action('wp_ajax_filter_alphabet', 'filter_alphabet');
add_action('wp_ajax_nopriv_filter_alphabet', 'filter_alphabet');
