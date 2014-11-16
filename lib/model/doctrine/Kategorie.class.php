<?php

/**
 * Kategorie
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    eracleamare
 * @subpackage model
 * @author     Jan Damek
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Kategorie extends BaseKategorie {

    public function getTitle() {
        global $sf_culture;
    
        if ($sf_culture == 'en') {
            return $this->getEnTitle();
        }
        else
            return $this->getCsTitle();
    }

    public function getDescription() {
        global $sf_culture;
        if ($sf_culture == 'en') {
            return $this->getEnDescription();
        }
        else
            return $this->getCsDescription();
    }

    public function getKeywords() {
        global $sf_culture;
        if ($sf_culture == 'en') {
            return $this->getEnKeywords();
        }
        else
            return $this->getCsKeywords();
    }

}
