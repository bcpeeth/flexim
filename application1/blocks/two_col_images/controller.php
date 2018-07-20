<?php namespace Application\Block\TwoColImages;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['imageLeft', 'imageRight'];
    protected $btTable = 'btTwoColImages';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btIgnorePageThemeGridFrameworkContainer = false;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $pkg = false;
    
    public function getBlockTypeName()
    {
        return t("Two column images ");
    }

    public function view()
    {
        
        if ($this->imageLeft && ($f = File::getByID($this->imageLeft)) && is_object($f)) {
            $this->set("imageLeft", $f);
        } else {
            $this->set("imageLeft", false);
        }
        
        if ($this->imageRight && ($f = File::getByID($this->imageRight)) && is_object($f)) {
            $this->set("imageRight", $f);
        } else {
            $this->set("imageRight", false);
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
        if (in_array("imageLeft", $this->btFieldsRequired) && (trim($args["imageLeft"]) == "" || !is_object(File::getByID($args["imageLeft"])))) {
            $e->add(t("The %s field is required.", t("image_left")));
        }
        if (in_array("imageRight", $this->btFieldsRequired) && (trim($args["imageRight"]) == "" || !is_object(File::getByID($args["imageRight"])))) {
            $e->add(t("The %s field is required.", t("image_right")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}