<?php
namespace Concrete\Controller\SinglePage\Dashboard\System\Mail;

use Concrete\Core\Page\Controller\DashboardPageController;
use Loader;
use Concrete\Core\Mail\Importer\MailImporter;

class Importers extends DashboardPageController
{
    protected $sendUndefinedTasksToView = false;
    public function on_start()
    {
        $this->set('importers', MailImporter::getList());
        parent::on_start();
    }

    public function edit_importer($miID = false)
    {
        $this->set('form', Loader::helper('form'));
        $this->set('mi', MailImporter::getByID($miID));
    }

    public function save_importer()
    {
        if (!Loader::helper('validation/token')->validate('save_importer')) {
            $this->error->add(t('Invalid Token.'));

            return;
        }

        $miID = $this->post('miID');
        $mi = MailImporter::getByID($miID);
        if (is_object($mi)) {
            $mi->update($this->post());
            $this->redirect('/dashboard/system/mail/importers', 'importer_updated');
        }
    }

    public function importer_updated()
    {
        $this->set('message', t('Importer saved.'));
    }
}
