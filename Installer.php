<?php
namespace App\Babel\Extension\atcoder;

use App\Babel\Install\InstallerBase;
use Exception;

class Installer extends InstallerBase
{
    public $ocode="atcoder";

    public function install()
    {
        // throw new Exception("No Install Method Provided");
        $this->_install($this->ocode);
    }

    public function uninstall()
    {
        // throw new Exception("No Uninstall Method Provided");
        $this->_uninstall($this->ocode);
    }
}
