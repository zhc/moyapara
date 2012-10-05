<? defined('SYSPATH') or die('No direct script access.');

class Controller_Security extends Controller {

    public function action_login(){
        $success = Auth::instance()->login(
            $this->request->post('username'),
            $this->request->post('password'),
            true
        );
        if ($success) {
            $this->request->redirect('/');
        } else {
            $this->request->redirect('/');
        }
    }

    public function action_logout(){
        Auth::instance()->logout();
        $this->request->redirect('/');
    }

    public function action_logon(){
        $view = View::factory('logon');
        $this->response->body($view);
    }

    public function action_password123456(){
        try
        {
            $user = ORM::factory('user')->where('username', '=', 'zhc')->find();
            if ($user->loaded()){
                $user->password = $this->request->param('id');
                $user->save();
                die('save user');
            }
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('models');
            print_r($errors);
            die('exception');
        }
    }


}
