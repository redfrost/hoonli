<?php
/*
Template Name: Special Event
*/
?>

<style type="text/css">
.banner, footer.content-info { display:none; }
body { margin-top: 60px; }

@media (max-width:1024px) {
    body { margin-top: 30px; }
}


@media (max-width:768px) {
    .top-banner { margin: -60px -22px 0px -22px;  }
}

@media (max-width:767px) {
    .more { float: left; }
}


</style>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

