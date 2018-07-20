<?php namespace Application\Block\ProjectOverview;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['imgRowTop', 'imgRowBottom'];
    protected $btTable = 'btProjectOverview';
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
        return t("Project Overview");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->textAndImgRow;
        return implode(" ", $content);
    }

    public function view()
    {
        
        if ($this->imgRowTop && ($f = File::getByID($this->imgRowTop)) && is_object($f)) {
            $this->set("imgRowTop", $f);
        } else {
            $this->set("imgRowTop", false);
        }
        $this->set('textAndImgRow', LinkAbstractor::translateFrom($this->textAndImgRow));
        
        if ($this->imgRowBottom && ($f = File::getByID($this->imgRowBottom)) && is_object($f)) {
            $this->set("imgRowBottom", $f);
        } else {
            $this->set("imgRowBottom", false);
        }
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('textAndImgRow', LinkAbstractor::translateFromEditMode($this->textAndImgRow));
    }

    protected function addEdit()
    {
        $this->requireAsset('core/file-manager');
        $this->requireAsset('redactor');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        $args['textAndImgRow'] = LinkAbstractor::translateTo($args['textAndImgRow']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("imgRowTop", $this->btFieldsRequired) && (trim($args["imgRowTop"]) == "" || !is_object(File::getByID($args["imgRowTop"])))) {
            $e->add(t("The %s field is required.", t("img_row_top")));
        }
        if (in_array("textAndImgRow", $this->btFieldsRequired) && (trim($args["textAndImgRow"]) == "")) {
            $e->add(t("The %s field is required.", t("text_and_img_row")));
        }
        if (in_array("imgRowBottom", $this->btFieldsRequired) && (trim($args["imgRowBottom"]) == "" || !is_object(File::getByID($args["imgRowBottom"])))) {
            $e->add(t("The %s field is required.", t("img_row_bottom")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}