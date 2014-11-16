<?php

require_once dirname(__FILE__) . '/../lib/vendor/Symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
        $this->enablePlugins('sfDoctrinePlugin');
        $this->enablePlugins('eCropPlugin');
        $this->enablePlugins('sfFormExtraPlugin');
        $this->enablePlugins('sfDoctrineApplyPlugin');
        $this->enablePlugins('sfDoctrineGuardPlugin');
        $this->enablePlugins('sfImageTransformPlugin');
        $this->enablePlugins('sfJqueryReloadedPlugin');
        $this->enablePlugins('sfLightboxPlugin');
        $this->enablePlugins('sfAdminThemejRollerPlugin');
        $this->enablePlugins('sfMediaBrowserPlugin');
  }
}
