<?php
if (isset($footer)) {
?>
<div id="page-bottom-content">
    <h3><?php echo $footer->getTitle(); ?></h3>
    <p>
        <?php echo $footer->getRaw('text');?>
    </p>
</div>
<?php 
}
?>