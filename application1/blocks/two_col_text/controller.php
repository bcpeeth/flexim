<?php namespace Application\Block\TwoColText;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btTable = 'btTwoColText';
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
        return t("Two Columns Text");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->textLeft;
        $content[] = $this->textRight;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set('textLeft', LinkAbstractor::translateFrom($this->textLeft));
        $this->set('textRight', LinkAbstractor::translateFrom($this->textRight));
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('textLeft', LinkAbstractor::translateFromEditMode($this->textLeft));
        
        $this->set('textRight', LinkAbstractor::translateFromEditMode($this->textRight));
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
        $args['textLeft'] = LinkAbstractor::translateTo($args['textLeft']);
        $args['textRight'] = LinkAbstractor::translateTo($args['textRight']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("textLeft", $this->btFieldsRequired) && (trim($args["textLeft"]) == "")) {
            $e->add(t("The %s field is required.", t("text_left")));
        }
        if (in_array("textRight", $this->btFieldsRequired) && (trim($args["textRight"]) == "")) {
            $e->add(t("The %s field is required.", t("text_right")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}