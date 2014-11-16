<?php

use_helper('Navigation');

class homepageComponents extends sfComponents {

    public function executeMenu(sfWebRequest $request) {
        global $sf_culture;
        $sf_culture = $request->getParameter('sf_culture');

        $this->m = Doctrine::getTable('Kategorie')
                ->createQuery()
                ->where('kategorie_id is null')
                ->execute();

        $this->menu = array();

        foreach ($this->m as $value) {
            $m1 = Doctrine::getTable('Kategorie')
                    ->createQuery('Kategorie k')
                    ->where('k.kategorie_id = ? ', $value->getId())
                    ->execute();

            foreach ($m1 as $item) {
                $this->menu[$value->getId()][] = array('url' => $item->getSlug(), 'name' => $item->getTitle());
            }
        }
    }

    public function executeSlider(sfWebRequest $request) {
        global $sf_culture;
        $sf_culture = $request->getParameter('sf_culture');


        if ($request->getParameter('clanek', 'qwerty') != 'qwerty') {
            //slider je ke clanku
            $slider = Doctrine::getTable('Stranka')
                    ->createQuery()
                    ->where('Slug = ?', $request->getParameter('clanek'))
                    ->limit(1)
                    ->execute();

            $this->slider = Doctrine::getTable('GalleryImage')
                    ->createQuery('GalleryImage gi')
                    ->where('gi.gallery_id = ?', $slider[0]->getGalleryId())
                    ->execute();
        } else if ($request->getParameter('kategorie', 'qwerty') == 'qwerty') {
            //neni kategorie ani clanek
            $slider = Doctrine::getTable('Stranka')
                    ->createQuery()
                    ->where('id = ?', NavigationHelper::getSetting()->getHpStrankaId())
                    ->limit(1)
                    ->execute();

            $this->slider = Doctrine::getTable('GalleryImage')
                    ->createQuery('GalleryImage gi')
                    ->where('gi.gallery_id = ?', $slider[0]->getGalleryId())
                    ->execute();
        }
    }

    public function executeFooter(sfWebRequest $request) {
        global $sf_culture;
        $sf_culture = $request->getParameter('sf_culture');

        $id = NavigationHelper::getSetting()->getHpDolniId();
        if (isset($id) && $id != NULL && $id != '') {
            $this->footer = Doctrine::getTable('stranka')
                    ->findOneById($id);
        }
    }

    public function executeLang(sfWebRequest $request) {
        $url = $_SERVER['REQUEST_URI'];
        $this->url_en = str_replace('/cs/', '/en/', $url);
        $this->url_cs = str_replace('/en/', '/cs/', $url);
    }

}