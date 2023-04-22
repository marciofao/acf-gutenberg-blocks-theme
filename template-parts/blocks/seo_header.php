<?php
//block alignment setup
if (!empty($block['className'])) {
    $className = ' ' . $block['className'];

}
if (!empty($block['align'])) {
    $className .= 'align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($className); ?>">
    <div class="seo-header">
        <?php echo get_bloginfo('name') ?>
    </div>
</div>