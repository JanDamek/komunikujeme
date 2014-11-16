<?php

/**
 * Setting filter form base class.
 *
 * @package    eracleamare
 * @subpackage filter
 * @author     Jan Damek
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sitename'         => new sfWidgetFormFilterInput(),
      'hp_stranka_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Stranka'), 'add_empty' => true)),
      'hp_dolni_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Dolni'), 'add_empty' => true)),
      'footer_text'      => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'tel'              => new sfWidgetFormFilterInput(),
      'mobil'            => new sfWidgetFormFilterInput(),
      'web_adr'          => new sfWidgetFormFilterInput(),
      'ga_code'          => new sfWidgetFormFilterInput(),
      'google_overeni'   => new sfWidgetFormFilterInput(),
      'cs_slogan'        => new sfWidgetFormFilterInput(),
      'cs_pracovni_doba' => new sfWidgetFormFilterInput(),
      'cs_ulice'         => new sfWidgetFormFilterInput(),
      'cs_mesto'         => new sfWidgetFormFilterInput(),
      'en_slogan'        => new sfWidgetFormFilterInput(),
      'en_pracovni_doba' => new sfWidgetFormFilterInput(),
      'en_ulice'         => new sfWidgetFormFilterInput(),
      'en_mesto'         => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sitename'         => new sfValidatorPass(array('required' => false)),
      'hp_stranka_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Stranka'), 'column' => 'id')),
      'hp_dolni_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Dolni'), 'column' => 'id')),
      'footer_text'      => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'tel'              => new sfValidatorPass(array('required' => false)),
      'mobil'            => new sfValidatorPass(array('required' => false)),
      'web_adr'          => new sfValidatorPass(array('required' => false)),
      'ga_code'          => new sfValidatorPass(array('required' => false)),
      'google_overeni'   => new sfValidatorPass(array('required' => false)),
      'cs_slogan'        => new sfValidatorPass(array('required' => false)),
      'cs_pracovni_doba' => new sfValidatorPass(array('required' => false)),
      'cs_ulice'         => new sfValidatorPass(array('required' => false)),
      'cs_mesto'         => new sfValidatorPass(array('required' => false)),
      'en_slogan'        => new sfValidatorPass(array('required' => false)),
      'en_pracovni_doba' => new sfValidatorPass(array('required' => false)),
      'en_ulice'         => new sfValidatorPass(array('required' => false)),
      'en_mesto'         => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Setting';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'sitename'         => 'Text',
      'hp_stranka_id'    => 'ForeignKey',
      'hp_dolni_id'      => 'ForeignKey',
      'footer_text'      => 'Text',
      'email'            => 'Text',
      'tel'              => 'Text',
      'mobil'            => 'Text',
      'web_adr'          => 'Text',
      'ga_code'          => 'Text',
      'google_overeni'   => 'Text',
      'cs_slogan'        => 'Text',
      'cs_pracovni_doba' => 'Text',
      'cs_ulice'         => 'Text',
      'cs_mesto'         => 'Text',
      'en_slogan'        => 'Text',
      'en_pracovni_doba' => 'Text',
      'en_ulice'         => 'Text',
      'en_mesto'         => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
