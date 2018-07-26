<?php  namespace Application\Block\HeroImage;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $helpers = array('form');
    public $btFieldsRequired = array();
    protected $btExportFileColumns = array('heroImage');
    protected $btExportPageColumns = array();
    protected $btTable = 'btHeroImage';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btIgnorePageThemeGridFrameworkContainer = false;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btCacheBlockOutputLifetime = 0;
    protected $pkg = false;
    
    public function getBlockTypeDescription()
    {
        return t("");
    }

    public function getBlockTypeName()
    {
        return t("Hero Image");
    }

    public function view()
    {
        
        if ($this->heroImage && ($f = File::getByID($this->heroImage)) && is_object($f)) {
            $this->set("heroImage", $f);
        } else {
            $this->set("heroImage", false);
        }
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
    }

    protected function addEdit()
    {
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("heroImage", $this->btFieldsRequired) && (trim($args["heroImage"]) == "" || !is_object(File::getByID($args["heroImage"])))) {
            $e->add(t("The %s field is required.", t("hero_image")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}