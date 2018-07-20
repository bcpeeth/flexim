<?php namespace Application\Block\Intro;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = ['introText'];
    protected $btExportFileColumns = ['introImage'];
    protected $btTable = 'btIntro';
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
        return t("Introduction");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->introText;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set('introText', LinkAbstractor::translateFrom($this->introText));
        
        if ($this->introImage && ($f = File::getByID($this->introImage)) && is_object($f)) {
            $this->set("introImage", $f);
        } else {
            $this->set("introImage", false);
        }
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('introText', LinkAbstractor::translateFromEditMode($this->introText));
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
        $args['introText'] = LinkAbstractor::translateTo($args['introText']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("introText", $this->btFieldsRequired) && (trim($args["introText"]) == "")) {
            $e->add(t("The %s field is required.", t("Intro Text")));
        }
        if (in_array("introImage", $this->btFieldsRequired) && (trim($args["introImage"]) == "" || !is_object(File::getByID($args["introImage"])))) {
            $e->add(t("The %s field is required.", t("Intro Image")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}