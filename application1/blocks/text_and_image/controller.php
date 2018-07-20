<?php namespace Application\Block\TextAndImage;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['imageContent'];
    protected $btTable = 'btTextAndImage';
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
        return t("Text and image");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->textContent;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set('textContent', LinkAbstractor::translateFrom($this->textContent));
        
        if ($this->imageContent && ($f = File::getByID($this->imageContent)) && is_object($f)) {
            $this->set("imageContent", $f);
        } else {
            $this->set("imageContent", false);
        }
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('textContent', LinkAbstractor::translateFromEditMode($this->textContent));
    }

    protected function addEdit()
    {
        $this->requireAsset('redactor');
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        $args['textContent'] = LinkAbstractor::translateTo($args['textContent']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("textContent", $this->btFieldsRequired) && (trim($args["textContent"]) == "")) {
            $e->add(t("The %s field is required.", t("Text Content")));
        }
        if (in_array("imageContent", $this->btFieldsRequired) && (trim($args["imageContent"]) == "" || !is_object(File::getByID($args["imageContent"])))) {
            $e->add(t("The %s field is required.", t("Image Content")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}