<div class="row portfolio-body-content">
  <div class="col-xs-12 col-sm-3 portfolio-title">
    <?php if (the_sub_field('title')) {
      echo the_sub_field('title');
    } else{ ?>
      <h1><?php  the_title();  ?></h1>  
    <?php } ?>
    
  </div>
  <div class="col-xs-12 col-sm-4 pull-quote hidden-xs">
    <p><?php  the_sub_field('pull_quote');  ?></p>
  </div>
  <div class="col-xs-12 col-sm-7 col-sm-offset-5 portfolio-body-text">
    <?php  the_sub_field('body_content');  ?>
  </div>
</div>