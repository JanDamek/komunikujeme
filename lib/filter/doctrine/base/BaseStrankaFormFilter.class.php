<?php

/**
 * Stranka filter form base class.
 *
 * @package    eracleamare
 * @subpackage filter
 * @author     Jan Damek
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStrankaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(),
      'kategorie_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'add_empty' => true)),
      'gallery_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'cs_title'       => new sfWidgetFormFilterInput(),
      'cs_keywords'    => new sfWidgetFormFilterInput(),
      'cs_description' => new sfWidgetFormFilterInput(),
      'cs_perex'       => new sfWidgetFormFilterInput(),
      'cs_text'        => new sfWidgetFormFilterInput(),
      'en_title'       => new sfWidgetFormFilterInput(),
      'en_keywords'    => new sfWidgetFormFilterInput(),
      'en_description' => new sfWidgetFormFilterInput(),
      'en_perex'       => new sfWidgetFormFilterInput(),
      'en_text'        => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'kategorie_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Kategorie'), 'column' => 'id')),
      'gallery_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery'), 'column' => 'id')),
      'cs_title'       => new sfValidatorPass(array('required' => false)),
      'cs_keywords'    => new sfValidatorPass(array('required' => false)),
      'cs_description' => new sfValidatorPass(array('required' => false)),
      'cs_perex'       => new sfValidatorPass(array('required' => false)),
      'cs_text'        => new sfValidatorPass(array('required' => false)),
      'en_title'       => new sfValidatorPass(array('required' => false)),
      'en_keywords'    => new sfValidatorPass(array('required' => false)),
      'en_description' => new sfValidatorPass(array('required' => false)),
      'en_perex'       => new sfValidatorPass(array('required' => false)),
      'en_text'        => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('stranka_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stranka';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'kategorie_id'   => 'ForeignKey',
      'gallery_id'     => 'ForeignKey',
      'cs_title'       => 'Text',
      'cs_keywords'    => 'Text',
      'cs_description' => 'Text',
      'cs_perex'       => 'Text',
      'cs_text'        => 'Text',
      'en_title'       => 'Text',
      'en_keywords'    => 'Text',
      'en_description' => 'Text',
      'en_perex'       => 'Text',
      'en_text'        => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'slug'           => 'Text',
    );
  }
}
