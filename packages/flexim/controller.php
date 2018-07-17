<?php

namespace Concrete\Package\Flexim;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Page;
use Concrete\Core\Page\Theme\Theme;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {
  protected $pkgHandle  = 'flexim';
  protected $pkgVersion = '1.0.0';

  protected $appVersionRequired = '5.7.0';

  public function getPackageDescription() {
    return t('Adds the Flexim theme.');
  }

  public function getPackageName(){
    return t('Flexim');
  }

  public function install() {
    $pkg = parent::install();
    Theme::add('flexim', $pkg);
  }
}
