<?php

/**
 * Kategorie form base class.
 *
 * @method Kategorie getObject() Returns the current form's model object
 *
 * @package    eracleamare
 * @subpackage form
 * @author     Jan Damek
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseKategorieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'kategorie_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'add_empty' => true)),
      'cs_title'       => new sfWidgetFormInputText(),
      'cs_description' => new sfWidgetFormInputText(),
      'cs_keywords'    => new sfWidgetFormInputText(),
      'en_title'       => new sfWidgetFormInputText(),
      'en_description' => new sfWidgetFormInputText(),
      'en_keywords'    => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'kategorie_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'required' => false)),
      'cs_title'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cs_description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cs_keywords'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'en_title'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'en_description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'en_keywords'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Kategorie', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Kategorie', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('kategorie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kategorie';
  }

}
