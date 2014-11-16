<?php

/**
 * Setting form base class.
 *
 * @method Setting getObject() Returns the current form's model object
 *
 * @package    eracleamare
 * @subpackage form
 * @author     Jan Damek
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'sitename'         => new sfWidgetFormInputText(),
      'hp_stranka_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Stranka'), 'add_empty' => true)),
      'hp_dolni_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Dolni'), 'add_empty' => true)),
      'footer_text'      => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'tel'              => new sfWidgetFormInputText(),
      'mobil'            => new sfWidgetFormInputText(),
      'web_adr'          => new sfWidgetFormInputText(),
      'ga_code'          => new sfWidgetFormInputText(),
      'google_overeni'   => new sfWidgetFormInputText(),
      'cs_slogan'        => new sfWidgetFormInputText(),
      'cs_pracovni_doba' => new sfWidgetFormTextarea(),
      'cs_ulice'         => new sfWidgetFormInputText(),
      'cs_mesto'         => new sfWidgetFormInputText(),
      'en_slogan'        => new sfWidgetFormInputText(),
      'en_pracovni_doba' => new sfWidgetFormTextarea(),
      'en_ulice'         => new sfWidgetFormInputText(),
      'en_mesto'         => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sitename'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'hp_stranka_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Stranka'), 'required' => false)),
      'hp_dolni_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Dolni'), 'required' => false)),
      'footer_text'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tel'              => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'mobil'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'web_adr'          => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'ga_code'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'google_overeni'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cs_slogan'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cs_pracovni_doba' => new sfValidatorString(array('required' => false)),
      'cs_ulice'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cs_mesto'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'en_slogan'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'en_pracovni_doba' => new sfValidatorString(array('required' => false)),
      'en_ulice'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'en_mesto'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Setting';
  }

}
