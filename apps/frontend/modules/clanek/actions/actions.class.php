<?php

/**
 * clanek actions.
 *
 * @package    eracleamare
 * @subpackage clanek
 * @author     Jan Damek
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clanekActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        global $sf_culture;
        $sf_culture = $request->getParameter('sf_culture');

        $response = $this->getResponse();
                
        $this->stranka = Doctrine::getTable('stranka')
                ->findOneBySlug($request->getParameter('clanek', ''));

        if ($this->stranka) {
            $response->addMeta('keywords', $this->stranka->getKeywords());
            $response->addMeta('description', $this->stranka->getDescription());
        }

        $response->setTitle(NavigationHelper::getSetting()->getSitename());
    }

}
