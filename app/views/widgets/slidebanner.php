<!-- Banner begin -->
<div class="<?= $class_name; ?>">
    <div id="carousel-widget" data-interval="false" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Laço com o banner slider.
            $laco = 0;
            foreach ($banners as $row) {
                    
                if ($laco == 0)
                    echo "            <div class=\"item active\">\n";
                else
                    echo "             <div class=\"item\">\n";
            
                $image_properties = array(
                    'src' => 'media/banners/' . $row->content,
                    'class' => '',
                );

                echo img($image_properties);
                echo "</div>\n";

                $laco = $laco + 1;

            } // Fim do laço
            ?>    
        </div>
        <!-- Ícones de navegação do slide. -->
        <a class="left carousel-control" href="#carousel-widget" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-widget" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- Banner end -->
<!-- Auto-play no banner -->
<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(document).ready(function () {
        $('#carousel-widget').carousel({interval: 5000, cycle: true});
    });
</script>