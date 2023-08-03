<?php
declare(strict_types=1);

namespace WebAppSeller\Modules\Frontend\Controllers;

use WebAppSeller\Models\Developpeur;
use WebAppSeller\Models\Collaborateur;



class DeveloppeurController extends ControllerBase
{
    public function indexAction()
    {
        // Fetch all applications
        $developpeurs = Developpeur::find();


        $this->view->setVar('developpeurs',$developpeurs);
    }
}
