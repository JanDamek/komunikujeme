<?php

/**
 * SettingTranslation filter form base class.
 *
 * @package    eracleamare
 * @subpackage filter
 * @author     Jan Damek
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSettingTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'slogan'        => new sfWidgetFormFilterInput(),
      'pracovni_doba' => new sfWidgetFormFilterInput(),
      'ulice'         => new sfWidgetFormFilterInput(),
      'mesto'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'slogan'        => new sfValidatorPass(array('required' => false)),
      'pracovni_doba' => new sfValidatorPass(array('required' => false)),
      'ulice'         => new sfValidatorPass(array('required' => false)),
      'mesto'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('setting_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SettingTranslation';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'slogan'        => 'Text',
      'pracovni_doba' => 'Text',
      'ulice'         => 'Text',
      'mesto'         => 'Text',
      'lang'          => 'Text',
    );
  }
}
