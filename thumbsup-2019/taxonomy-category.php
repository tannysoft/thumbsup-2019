
<?php get_header(); ?>

  <div class="page-header">

    <h1 class="page-title"><?php single_cat_title(); ?></h1>


  </div><!-- .page-header -->

  <div class="main-content page-product" data-goto="<?php echo (isset($_POST['pid']) ? $_POST['pid'] : '') ?>">
  </div>

<?php get_footer(); ?>