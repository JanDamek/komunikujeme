<div id="menu">
    <ul>
        <?php
        $cnt = 0;
        foreach ($m as $value) {
            if ($cnt == 0) {
                echo '<li class="first">';
            } elseif ($cnt < $m->count()-1) {
                echo '<li>';
            } else {
                echo '<li class="last">';
            }

            if (isset($menu[$value->getId()])) {
                echo '<span class="opener">' . $value->getTitle() . '<b></b></span><ul>';

                foreach ($menu[$value->getId()] as $item) {
                    echo '<li>' . link_to($item['name'], '@kategorie2?kategorie=' . $value->getSlug() . '&podkategorie=' . $item['url']) . '</li>';
                }
                echo '</ul>';
            } else {
                echo link_to($value->getTitle(), '@kategorie?kategorie=' . $value->getSlug());
            }
            echo '</li>';
            $cnt++;
        }
        ?>
    </ul>
    <br class="clearfix" />
</div>
<?php
