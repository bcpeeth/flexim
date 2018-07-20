<?php namespace Application\Block\FullWidthImage;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['fullWidthImage'];
    protected $btTable = 'btFullWidthImage';
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
        return t("Full width image");
    }

    public function view()
    {
        
        if ($this->fullWidthImage && ($f = File::getByID($this->fullWidthImage)) && is_object($f)) {
            $this->set("fullWidthImage", $f);
        } else {
            $this->set("fullWidthImage", false);
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
        if (in_array("fullWidthImage", $this->btFieldsRequired) && (trim($args["fullWidthImage"]) == "" || !is_object(File::getByID($args["fullWidthImage"])))) {
            $e->add(t("The %s field is required.", t("Full Width Image")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}