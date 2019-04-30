<?php 
    $course_intro_title     = get_field('course_introduction_title');
    $course_intro_video     = get_field('course_introduction_video');
?>

<!-- Video Featurette -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $course_intro_title ?></h2>
                <div class="embed-container">
                    <?php echo $course_intro_video; ?>
                </div>
                <!-- <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div><!-- end col -->
        </div><!-- row -->			
    </div><!-- container -->
</section><!-- featurette -->