<?php

include_once 'models/UserModel.php';
class UserController {

    var $userModel = null;
    function __construct() {
        $this->userModel = new UserModel();
    }

    public function login($params) {
        $email = $params['email'];
        $res = $this->userModel->login($email);
        return $res;
    }

}

?>