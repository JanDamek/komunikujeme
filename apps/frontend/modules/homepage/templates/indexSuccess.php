<?php
if (isset($stranka)){
?>
<div class="box">
    <h2><?php echo $stranka->getTitle();?></h2>
    <p><?php echo $stranka->getRaw('text');?></p>
</div>
<?php
}

