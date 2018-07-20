<?php namespace Application\Block\Menu;

defined("C5_EXECUTE") or die("Access Denied.");

use AssetList;
use Concrete\Core\Block\BlockController;
use Core;
use Database;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = ['linkRepeater' => []];
    protected $btExportTables = ['btMenu', 'btMenuLinkRepeaterEntries'];
    protected $btTable = 'btMenu';
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
        return t("Menu");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->title;
        return implode(" ", $content);
    }

    public function view()
    {
        $db = Database::connection();
        $linkRepeater = [];
        $linkRepeater_items = $db->fetchAll('SELECT * FROM btMenuLinkRepeaterEntries WHERE bID = ? ORDER BY sortOrder', [$this->bID]);
        foreach ($linkRepeater_items as $linkRepeater_item_k => &$linkRepeater_item_v) {
            $linkRepeater_item_v["link_Object"] = null;
			$linkRepeater_item_v["link_Title"] = trim($linkRepeater_item_v["link_Title"]);
			if (isset($linkRepeater_item_v["link"]) && trim($linkRepeater_item_v["link"]) != '') {
				switch ($linkRepeater_item_v["link"]) {
					case 'page':
						if ($linkRepeater_item_v["link_Page"] > 0 && ($linkRepeater_item_v["link_Page_c"] = Page::getByID($linkRepeater_item_v["link_Page"])) && !$linkRepeater_item_v["link_Page_c"]->error && !$linkRepeater_item_v["link_Page_c"]->isInTrash()) {
							$linkRepeater_item_v["link_Object"] = $linkRepeater_item_v["link_Page_c"];
							$linkRepeater_item_v["link_URL"] = $linkRepeater_item_v["link_Page_c"]->getCollectionLink();
							if ($linkRepeater_item_v["link_Title"] == '') {
								$linkRepeater_item_v["link_Title"] = $linkRepeater_item_v["link_Page_c"]->getCollectionName();
							}
						}
						break;
				    case 'url':
						if ($linkRepeater_item_v["link_Title"] == '') {
							$linkRepeater_item_v["link_Title"] = $linkRepeater_item_v["link_URL"];
						}
						break;
				    case 'relative_url':
						if ($linkRepeater_item_v["link_Title"] == '') {
							$linkRepeater_item_v["link_Title"] = $linkRepeater_item_v["link_Relative_URL"];
						}
						$linkRepeater_item_v["link_URL"] = $linkRepeater_item_v["link_Relative_URL"];
						break;
				}
			}
        }
        $this->set('linkRepeater_items', $linkRepeater_items);
        $this->set('linkRepeater', $linkRepeater);
    }

    public function delete()
    {
        $db = Database::connection();
        $db->delete('btMenuLinkRepeaterEntries', ['bID' => $this->bID]);
        parent::delete();
    }

    public function duplicate($newBID)
    {
        $db = Database::connection();
        $linkRepeater_items = $db->fetchAll('SELECT * FROM btMenuLinkRepeaterEntries WHERE bID = ? ORDER BY sortOrder', [$this->bID]);
        foreach ($linkRepeater_items as $linkRepeater_item) {
            unset($linkRepeater_item['id']);
            $linkRepeater_item['bID'] = $newBID;
            $db->insert('btMenuLinkRepeaterEntries', $linkRepeater_item);
        }
        parent::duplicate($newBID);
    }

    public function add()
    {
        $this->addEdit();
        $linkRepeater = $this->get('linkRepeater');
        $this->set('linkRepeater_items', []);
        $this->set('linkRepeater', $linkRepeater);
    }

    public function edit()
    {
        $db = Database::connection();
        $this->addEdit();
        $linkRepeater = $this->get('linkRepeater');
        $linkRepeater_items = $db->fetchAll('SELECT * FROM btMenuLinkRepeaterEntries WHERE bID = ? ORDER BY sortOrder', [$this->bID]);
        $this->set('linkRepeater', $linkRepeater);
        $this->set('linkRepeater_items', $linkRepeater_items);
    }

    protected function addEdit()
    {
        $linkRepeater = [];
        $this->set("link_Options", $this->getSmartLinkTypeOptions([
  'page',
  'url',
  'relative_url',
], true));
        $this->set('linkRepeater', $linkRepeater);
        $this->set('identifier', new \Concrete\Core\Utility\Service\Identifier());
        $al = AssetList::getInstance();
        $al->register('css', 'repeatable-ft.form', 'blocks/menu/css_form/repeatable-ft.form.css', [], $this->pkg);
        $al->register('javascript', 'handlebars', 'blocks/menu/js_form/handlebars-v4.0.4.js', [], $this->pkg);
        $al->register('javascript', 'handlebars-helpers', 'blocks/menu/js_form/handlebars-helpers.js', [], $this->pkg);
        $this->requireAsset('core/sitemap');
        $this->requireAsset('css', 'repeatable-ft.form');
        $this->requireAsset('javascript', 'handlebars');
        $this->requireAsset('javascript', 'handlebars-helpers');
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        $db = Database::connection();
        $rows = $db->fetchAll('SELECT * FROM btMenuLinkRepeaterEntries WHERE bID = ? ORDER BY sortOrder', [$this->bID]);
        $linkRepeater_items = isset($args['linkRepeater']) && is_array($args['linkRepeater']) ? $args['linkRepeater'] : [];
        $queries = [];
        if (!empty($linkRepeater_items)) {
            $i = 0;
            foreach ($linkRepeater_items as $linkRepeater_item) {
                $data = [
                    'sortOrder' => $i + 1,
                ];
                if (isset($linkRepeater_item['link']) && trim($linkRepeater_item['link']) != '') {
					$data['link_Title'] = $linkRepeater_item['link_Title'];
					$data['link'] = $linkRepeater_item['link'];
					switch ($linkRepeater_item['link']) {
						case 'page':
							$data['link_Page'] = $linkRepeater_item['link_Page'];
							$data['link_URL'] = '';
							$data['link_Relative_URL'] = '';
							break;
                        case 'url':
							$data['link_URL'] = $linkRepeater_item['link_URL'];
							$data['link_Page'] = '0';
							$data['link_Relative_URL'] = '';
							break;
                        case 'relative_url':
							$data['link_Relative_URL'] = $linkRepeater_item['link_Relative_URL'];
							$data['link_Page'] = '0';
							$data['link_URL'] = '';
							break;
                        default:
							$data['link'] = '';
							$data['link_Page'] = '0';
							$data['link_URL'] = '';
							$data['link_Relative_URL'] = '';
							break;	
					}
				}
				else {
					$data['link'] = '';
					$data['link_Title'] = '';
					$data['link_Page'] = '0';
					$data['link_URL'] = '';
					$data['link_Relative_URL'] = '';
				}
                if (isset($rows[$i])) {
                    $queries['update'][$rows[$i]['id']] = $data;
                    unset($rows[$i]);
                } else {
                    $data['bID'] = $this->bID;
                    $queries['insert'][] = $data;
                }
                $i++;
            }
        }
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $queries['delete'][] = $row['id'];
            }
        }
        if (!empty($queries)) {
            foreach ($queries as $type => $values) {
                if (!empty($values)) {
                    switch ($type) {
                        case 'update':
                            foreach ($values as $id => $data) {
                                $db->update('btMenuLinkRepeaterEntries', $data, ['id' => $id]);
                            }
                            break;
                        case 'insert':
                            foreach ($values as $data) {
                                $db->insert('btMenuLinkRepeaterEntries', $data);
                            }
                            break;
                        case 'delete':
                            foreach ($values as $value) {
                                $db->delete('btMenuLinkRepeaterEntries', ['id' => $value]);
                            }
                            break;
                    }
                }
            }
        }
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("title", $this->btFieldsRequired) && (trim($args["title"]) == "")) {
            $e->add(t("The %s field is required.", t("Title")));
        }
        $linkRepeaterEntriesMin = 0;
        $linkRepeaterEntriesMax = 0;
        $linkRepeaterEntriesErrors = 0;
        $linkRepeater = [];
        if (isset($args['linkRepeater']) && is_array($args['linkRepeater']) && !empty($args['linkRepeater'])) {
            if ($linkRepeaterEntriesMin >= 1 && count($args['linkRepeater']) < $linkRepeaterEntriesMin) {
                $e->add(t("The %s field requires at least %s entries, %s entered.", t("Link"), $linkRepeaterEntriesMin, count($args['linkRepeater'])));
                $linkRepeaterEntriesErrors++;
            }
            if ($linkRepeaterEntriesMax >= 1 && count($args['linkRepeater']) > $linkRepeaterEntriesMax) {
                $e->add(t("The %s field is set to a maximum of %s entries, %s entered.", t("Link"), $linkRepeaterEntriesMax, count($args['linkRepeater'])));
                $linkRepeaterEntriesErrors++;
            }
            if ($linkRepeaterEntriesErrors == 0) {
                foreach ($args['linkRepeater'] as $linkRepeater_k => $linkRepeater_v) {
                    if (is_array($linkRepeater_v)) {
                        if ((in_array("link", $this->btFieldsRequired['linkRepeater']) && (!isset($linkRepeater_v['link']) || trim($linkRepeater_v['link']) == "")) || (isset($linkRepeater_v['link']) && trim($linkRepeater_v['link']) != "" && !array_key_exists($linkRepeater_v['link'], $this->getSmartLinkTypeOptions(['page', 'url', 'relative_url'])))) {
							$e->add(t("The %s field has an invalid value.", t("Link")));
						} elseif (array_key_exists($linkRepeater_v['link'], $this->getSmartLinkTypeOptions(['page', 'url', 'relative_url']))) {
							switch ($linkRepeater_v['link']) {
								case 'page':
									if (!isset($linkRepeater_v['link_Page']) || trim($linkRepeater_v['link_Page']) == "" || $linkRepeater_v['link_Page'] == "0" || (($page = Page::getByID($linkRepeater_v['link_Page'])) && $page->error !== false)) {
										$e->add(t("The %s field for '%s' is required (%s, row #%s).", t("Page"), t("Link"), t("Link"), $linkRepeater_k));
									}
									break;
				                case 'url':
									if (!isset($linkRepeater_v['link_URL']) || trim($linkRepeater_v['link_URL']) == "" || !filter_var($linkRepeater_v['link_URL'], FILTER_VALIDATE_URL)) {
										$e->add(t("The %s field for '%s' does not have a valid URL (%s, row #%s).", t("URL"), t("Link"), t("Link"), $linkRepeater_k));
									}
									break;
				                case 'relative_url':
									if (!isset($linkRepeater_v['link_Relative_URL']) || trim($linkRepeater_v['link_Relative_URL']) == "") {
										$e->add(t("The %s field for '%s' is required (%s, row #%s).", t("Relative URL"), t("Link"), t("Link"), $linkRepeater_k));
									}
									break;	
							}
						}
                    } else {
                        $e->add(t("The values for the %s field, row #%s, are incomplete.", t('Link'), $linkRepeater_k));
                    }
                }
            }
        } else {
            if ($linkRepeaterEntriesMin >= 1) {
                $e->add(t("The %s field requires at least %s entries, none entered.", t("Link"), $linkRepeaterEntriesMin));
            }
        }
        return $e;
    }

    public function composer()
    {
        $al = AssetList::getInstance();
        $al->register('javascript', 'auto-js-' . $this->btHandle, 'blocks/' . $this->btHandle . '/auto.js', [], $this->pkg);
        $this->requireAsset('javascript', 'auto-js-' . $this->btHandle);
        $this->edit();
    }

        protected function getSmartLinkTypeOptions($include = [], $checkNone = false)
	{
		$options = [
			''             => sprintf("-- %s--", t("None")),
			'page'         => t("Page"),
			'url'          => t("External URL"),
			'relative_url' => t("Relative URL"),
			'file'         => t("File"),
			'image'        => t("Image")
		];
		if ($checkNone) {
            $include = array_merge([''], $include);
        }
		$return = [];
		foreach($include as $v){
		    if(isset($options[$v])){
		        $return[$v] = $options[$v];
		    }
		}
		return $return;
	}
}