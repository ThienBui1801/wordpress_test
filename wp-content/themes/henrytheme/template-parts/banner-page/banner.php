<?php
$base_url = get_template_directory_uri();
$banner = get_field('banner_page');
$banner_mobile = get_field('banner_mobile');
?>

<section>
	<div style="background-image: url(<?php echo $banner ?>);" class="banner-page <?php echo $banner == '' ? 'hidden-banner' : '' ?>"></div>
	<div style="background-image: url(<?php echo $banner_mobile ?>);" class="banner-mobile <?php echo $banner_mobile == '' ? 'hidden-banner' : '' ?>"></div>
</section>