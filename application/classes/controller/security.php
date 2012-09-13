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

    public function action_create123(){
        try
        {
            $user = ORM::factory('user');
            $user->email = 'ololO@mail.ru';
            $user->username = 'zhc';
            $user->password = '123';
            $user->save();
            $role = ORM::factory('role','1');
            $user->add('roles',$role);
            $user->save();
            die('created user');
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('models');
            print_r($errors);
            die('exception');
        }
    }


}
