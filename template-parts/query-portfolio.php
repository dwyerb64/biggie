<?php
  function getListOfPortfolios($int){ 
    $type = 'portfolio';
      $queryArgs=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => $int);
      $workQuery = null;
      $workQuery = new WP_Query($queryArgs);

      return $workQuery;
  }
?>
