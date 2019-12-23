<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <meta name="author" content="<?php the_author_meta('nickname'); ?>">
  <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<?php get_header(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?=get_bloginfo('template_directory')?>/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_author_meta('nickname'); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

  <!-- Footer -->
  <?php get_footer(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/clean-blog.min.js"></script>

</body>

</html>
