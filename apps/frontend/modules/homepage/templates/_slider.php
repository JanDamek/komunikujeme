<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($slider) && $slider->count() > 0) {
    ?>    
    <div id="slider">
        <div class="viewer">
            <div class="reel">
                <?php
                foreach ($slider as $value) {
                    ?>
                    <div class="slide">
                        <?php
                        echo image_tag(image_resizer(870, 230, $value->getPath()));
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="indicator">            
            <?php
            $cnt = 1;
            foreach ($slider as $value) {
                echo '<span>$cnt</span>';
                $cnt++;
            }
            ?>
        </div>        
    </div>
<script type="text/javascript">
	$(function() {
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script> 
    <?php
}
?>
