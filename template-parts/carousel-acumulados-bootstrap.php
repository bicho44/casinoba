<?php
$casino_settings = get_option('casino_settings');

$pozos = $casino_settings['casino_pozos'];

if (!empty($pozos)) {?>
    <div class="container">
        <h3>Pozos Acumulados</h3>

        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide pozos" id="pozos">
                    <div class="carousel-inner">
                        <?php
                        $x=0;

                        foreach ($pozos as $pozo){
                            if ($x===0) $active = "active";
                            ?>

                            <div class="item <?php echo $active; ?>">
                                <div class="pozo col-xs-12 col-sm-6 col-md-3">
                                    <?php
                                    //var_dump($pozo['casino_logo'][0]);

                                    $casino_image = get_post($pozo['casino_logo'][0]);

                                    //print_r($casino_image);

                                    echo '<img width="70" height="70" src="' . wp_get_attachment_url($pozo['casino_logo'][0]) . '" alt="'.$pozo['casino_name'].'" class="casino_logo img-circle pull-left" />';
                                    ?>

                                    <?php echo '<div class="casino_name">'.$pozo['casino_name'].'</div>';?>
                                    <?php echo '<div class="casino_pozo">$ '.number_format($pozo['casino_pozo'], 0, ',', '.').'</div>';?>
                                    <?php echo '<div class="hidden-xs casino_sector"> Sector '.$pozo['casino_sector'].'</div>';?>
                                </div>
                            </div>
                            <?php
                            $x++;
                            $active = "";
                        } ?>
                    </div> <!-- #Carousel Inner -->

                    <a class="left carousel-control" href="#pozos" data-slide="prev"><i class="icon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#pozos" data-slide="next"><i class="icon-chevron-right"></i></a>
                </div> <!-- #Carousel  -->
            </div> <!-- #Col-md-12  -->
        </div> <!-- Row -->
    </div>
<?php }
/*
$myupload = get_post($image);
$title = $myupload->post_title;
$description = $myupload->post_content;
$caption = $myupload->post_excerpt;

echo 'title:' . $title;
echo 'description:' . $description;
echo 'caption:' . $caption;

echo '<img src="' . wp_get_attachment_url($image) . '" alt="" />';

print_r($myupload); // Displays all data*/
?>
<!--
<div class="container">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>
-->