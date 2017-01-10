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

  function getListOfPortfoliosForHomepage($int){ 
    $type = 'portfolio';
      $queryArgs=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'meta_query'     => array(
          array(
            'key'        => 'appear_on_homepage',
            'compare'    => '=',
            'value'      => true
          )
        ),
        'meta_key'    => 'order_number',
        'orderby'     => 'meta_value_num',
        'order'       => 'ASC',
        'posts_per_page' => $int);
      $workQuery = null;
      $workQuery = new WP_Query($queryArgs);

      return $workQuery;
  }
?>
