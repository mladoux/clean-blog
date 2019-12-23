 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'description' ) ?> - <?php echo get_bloginfo( 'name' ); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/clean-blog.min.css" rel="stylesheet">

<?php get_header(); ?>

 <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?=get_bloginfo('template_directory')?>/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            <span class="subheading"><?php echo get_bloginfo( 'description' ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
            <h2 class="post-title">
              <?php the_title(); ?>
            </h2>
          </a>
          <div class="post-subtitle">
            <?php the_excerpt(); ?>
          </div>
          <p class="post-meta">Posted by
            <?php the_author_meta('nickname'); ?>
            on <?php the_date(); ?></p>
        </div>
        <hr>

  <?php endwhile; ?> 

            <!-- Pager -->
        <div class="clearfix">
          <?php previous_posts_link( '&larr; Newer Posts' );?>
          <?php next_posts_link('Older Posts &rarr;'); ?>
<!--
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
        </div>
      </div>
    </div>
  </div>

    <?php endif; ?>


  <?php get_footer(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?=get_bloginfo('template_directory')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?=get_bloginfo('template_directory')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?=get_bloginfo('template_directory')?>/js/clean-blog.min.js"></script>

</body>

</html>
