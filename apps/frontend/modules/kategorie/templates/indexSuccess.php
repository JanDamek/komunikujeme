<?php
if (isset($clanky) && $clanky->count() > 0) {
    foreach ($clanky as $value) {
        if (isset($pod)){
        ?>    
        <h3><?php echo link_to($value->getTitle(), '@clanek2?kategorie='.$kategorie->getSlug().'&podkategorie='.$pod->getSlug().'&clanek=' . $value->getSlug()); ?></h3>
        <?php }else {?>
        <h3><?php echo link_to($value->getTitle(), '@clanek?kategorie='.$kategorie->getSlug().'&clanek=' . $value->getSlug()); ?></h3>        
        <?php } ?> 
        <p><?php echo $value->getPerex(); ?></p>
        <?php
    }
}