<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="contenido_blog" class="widecolumn">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h4>Archives by Month:</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h4>Archives by Subject:</h4>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>

<?php get_footer(); ?>
