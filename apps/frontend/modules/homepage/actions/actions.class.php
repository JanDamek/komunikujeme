<?php

/**
 * homepage actions.
 *
 * @package    eracleamare
 * @subpackage homepage
 * @author     Jan Damek
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        global $sf_culture;
        $sf_culture = $request->getParameter('sf_culture');

        
        $id = NavigationHelper::getSetting()->getHpStrankaId();
        $response = $this->getResponse();

        if (isset($id) && $id != NULL && $id != '') {
            $this->stranka = Doctrine::getTable('stranka')
                    ->findOneById($id);

            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
        }

        $response->setTitle(NavigationHelper::getSetting()->getSiteName());
    }

}
