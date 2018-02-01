<?php

class UserModel {

    private $db = null;

    function __construct() {
        global $PDO;
        $this->db = $PDO;
    }

    public function login($email) {
        $sth = $this->db->prepare('SELECT * FROM tbl_user_master WHERE email = ?');
        $sth->execute(array($email));
        return $sth->fetchAll();
    }


}