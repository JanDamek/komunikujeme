<div id="lang"><?php

//echo($url_cs.' | '.$url_en);
echo link_to(image_tag(image_resizer(15, 10, '/images/vlajka_ceske_republiky.jpeg'),array('alt'=>'Česky','title'=>'Česky')),$url_cs).'  '.
     link_to(image_tag(image_resizer(20, 10, '/images/vlajka_velke_britanie.jpeg'),array('alt'=>'English','title'=>'English')),$url_en);

//var_dump($_SERVER);
?></div>
<?php
