<?php
namespace Controller;
use Form\LoginForm;
class LogInController
{
    public $status = FALSE;
    public function loginAction()
    {
        $request = $_POST['submit'] ?? FALSE;
        if ($request === FALSE) {
            $form = new LoginForm();
            $response = $form->render();
        } else {
            // deal with login processing including validation
            $_SESSION['login'] = $_POST;
            $response = 'Login Succeeded Beyond Your Wildest Expectations';
            $this->status = TRUE;
        }
        return $response;
    }
}
