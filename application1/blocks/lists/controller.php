<?php namespace Application\Block\Lists;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btTable = 'btLists';
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
        return t("Lists");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->fullWidthList;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set('fullWidthList', LinkAbstractor::translateFrom($this->fullWidthList));
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('fullWidthList', LinkAbstractor::translateFromEditMode($this->fullWidthList));
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
        $args['fullWidthList'] = LinkAbstractor::translateTo($args['fullWidthList']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("fullWidthList", $this->btFieldsRequired) && (trim($args["fullWidthList"]) == "")) {
            $e->add(t("The %s field is required.", t("full-width-list")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}