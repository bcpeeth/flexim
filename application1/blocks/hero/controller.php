<?php namespace Application\Block\Hero;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['image'];
    protected $btTable = 'btHero';
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
        return t("Hero");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->text;
        return implode(" ", $content);
    }

    public function view()
    {
        
        if ($this->image && ($f = File::getByID($this->image)) && is_object($f)) {
            $this->set("image", $f);
        } else {
            $this->set("image", false);
        }
        $this->set('text', LinkAbstractor::translateFrom($this->text));
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('text', LinkAbstractor::translateFromEditMode($this->text));
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
        $args['text'] = LinkAbstractor::translateTo($args['text']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("image", $this->btFieldsRequired) && (trim($args["image"]) == "" || !is_object(File::getByID($args["image"])))) {
            $e->add(t("The %s field is required.", t("Image")));
        }
        if (in_array("text", $this->btFieldsRequired) && (trim($args["text"]) == "")) {
            $e->add(t("The %s field is required.", t("Text")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}