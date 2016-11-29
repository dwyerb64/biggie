<!-- ACF Field Group should be implemented as follows:
    Repeater field : social_links

        - Radio Button sub-field : social_media_platform
            (Choices)
            facebook : FaceBook
            youtube : Youtube
            twitter : Twitter
            linkedIn : LinkedIn
            pinterest : Pinterest
            googlePlus : Google Plus
            tumblr : Tumblr
            instagram : Instagram
            vimeo : Vimeo
    
        - URL sub-field : social_media_url -->

<ul class="social-icons">
    <?php 
    $rows = get_field('social_links', 'option'); //repeater field
    if($rows)
    {           
        foreach($rows as $row){
            $platform = $row['social_media_platform']; //media platform -> radio button field
            $url = $row['social_media_url'];           //url field
            switch ($platform['value']) {
                case 'facebook':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-facebook fa-stack-1x\"></i></a></li>";
                    break;
                case 'youtube':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-youtube fa-stack-1x\"></i></a></li>";
                    break;
                case 'twitter':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-twitter fa-stack-1x\"></i></a></li>";
                    break;
                case 'linkedIn':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-linkedin fa-stack-1x\"></i></a></li>";
                    break;
                case 'pinterest':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-pinterest fa-stack-1x\"></i></a></li>";
                    break;
                case 'googlePlus':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-google-plus fa-stack-1x\"></i></a></li>";
                    break;
                case 'tumblr':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-tumblr fa-stack-1x\"></i></a></li>";
                    break;
                case 'instagram':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-instagram fa-stack-1x\"></i></a></li>";
                    break;
                case 'vimeo':
                    echo "<li class=\"fa-stack fa-2x\"><a href=".$url."><i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i><i class=\"fa fa-vimeo fa-stack-1x\"></i></a></li>";
                    break;
                default:
                    echo '<li></li>';
            }
        }                       
    }
    ?>
</ul><!-- .social-icons -->