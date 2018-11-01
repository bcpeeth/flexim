<?php  namespace Application\Block\TextAndImage;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use Concrete\Core\Editor\LinkAbstractor;
use File;
use Page;

class Controller extends BlockController
{
    public $helpers = array('form');
    public $btFieldsRequired = array();
    protected $btExportFileColumns = array('imgNieuws');
    protected $btExportPageColumns = array();
    protected $btTable = 'btTextAndImage';
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
        return t("Text and image");
    }

    public function getSearchableContent()
    {
        $content = array();
        $content[] = $this->textNieuws;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set('textNieuws', LinkAbstractor::translateFrom($this->textNieuws));
        
        if ($this->imgNieuws && ($f = File::getByID($this->imgNieuws)) && is_object($f)) {
            $this->set("imgNieuws", $f);
        } else {
            $this->set("imgNieuws", false);
        }
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('textNieuws', LinkAbstractor::translateFromEditMode($this->textNieuws));
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
        $args['textNieuws'] = LinkAbstractor::translateTo($args['textNieuws']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("textNieuws", $this->btFieldsRequired) && (trim($args["textNieuws"]) == "")) {
            $e->add(t("The %s field is required.", t("text-nieuws")));
        }
        if (in_array("imgNieuws", $this->btFieldsRequired) && (trim($args["imgNieuws"]) == "" || !is_object(File::getByID($args["imgNieuws"])))) {
            $e->add(t("The %s field is required.", t("img-nieuws")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}