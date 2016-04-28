<?php
$casino_settings = get_option('casino_settings');

$pozos = $casino_settings['casino_pozos'];

if (!empty($pozos)) { ?>
    <div class="container">
        <h3>Pozos Acumulados</h3>

        <div class="row">
                <div class="owl-carousel" id="pozos">
                        <?php

                        foreach ($pozos as $pozo){
                            ?>

                            <div class="item">
                                    <?php
                                    //var_dump($pozo['casino_logo'][0]);

                                    $casino_image = get_post($pozo['casino_logo'][0]);

                                    //print_r($casino_image);

                                    echo '<img width="70" height="70" src="' . wp_get_attachment_url($pozo['casino_logo'][0]) . '" alt="'.$pozo['casino_name'].'" class="casino_logo img-circle pull-left" />';
                                    ?>

                                    <?php echo '<div class="casino_name">'.$pozo['casino_name'].'</div>';?>
                                    <?php echo '<div class="casino_pozo">$ '.number_format($pozo['casino_pozo'], 0, ',', '.').'</div>';?>
                                    <?php echo '<div class="hidden-xs casino_sector"> Sector '.$pozo['casino_sector'].'</div>';?>

                            </div><!-- Item -->
                            <?php
                        } ?>

                </div> <!-- #Pozos  -->
        </div> <!-- Row -->
    </div>
<?php }