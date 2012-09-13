<? defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Secured extends Controller_Website {

    public function before(){
        parent::before();

        if (!$this->user){
            $this->request->redirect('security/logon');
        }

    }

}
