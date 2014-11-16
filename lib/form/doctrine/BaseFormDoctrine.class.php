<?php

/**
 * Project form base class.
 *
 * @package    eracleamare
 * @subpackage form
 * @author     Jan Damek
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormDoctrine extends sfFormDoctrine
{
  public function setup()
  {
        unset($this['created_at'], $this['updated_at']);
        if (isset($this['slug']))
            unset($this['slug']);      
  }
}
