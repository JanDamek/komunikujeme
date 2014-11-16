<?php

/**
 * kategorie actions.
 *
 * @package    eracleamare
 * @subpackage kategorie
 * @author     Jan Damek
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class kategorieActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        global $sf_culture;
        $sf_culture = $request->getParameter('sf_culture');

        if ($request->getParameter('podkategorie', 'qwerty') != 'qwerty') {
            $kat2 = Doctrine::getTable('kategorie')
                    ->findOneBySlug($request->getParameter('kategorie', ''));
            $kat = Doctrine::getTable('kategorie')
                    ->findOneBySlug($request->getParameter('podkategorie', ''));
        } else {
            $kat = Doctrine::getTable('kategorie')
                    ->findOneBySlug($request->getParameter('kategorie', ''));
        }

        $cla = Doctrine::getTable('stranka')->
                findByKategorieId($kat->getId());

        if ($cla->count() == 1) {
            if ($request->getParameter('podkategorie', 'qwerty') != 'qwerty') {
                $this->redirect('@clanek2?kategorie=' . $request->getParameter('kategorie', 'qwerty') .
                        '&podkategorie=' . $request->getParameter('podkategorie', 'qwerty') .
                        '&clanek=' . $cla[0]->getSlug());
            } else {
                $this->redirect('@clanek?kategorie=' . $request->getParameter('kategorie', 'qwerty') .
                        '&clanek=' . $cla[0]->getSlug());
            }
        } else {
            if (isset($kat2)) {
                $this->kategorie = $kat2;
                $this->pod = $kat;
            } else {
                $this->kategorie = $kat;
            }
            $response = $this->getResponse();
            $response->addMeta('keywords', $kat->getKeywords());
            $response->addMeta('description', $kat->getDescription());
            $response->setTitle($kat->getName() . ' | ' . NavigationHelper::getSetting()->getSiteName());
            $this->clanky = $cla;
        }
    }

}
