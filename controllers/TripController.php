<?php

include_once 'common/db.class.msi.obj.php';

class Trip extends DB {

    private $db = null;
    function __construct($db) {
        $this->db = $db;
    }

    public function login($params) {
        $email = ($params['email'] ? $params['email'] : '');
        $sql = "SELECT * FROM tbl_user_master WHERE email = '" . $email . "' AND mobile='" . $email . "'";
        foreach ($this->db->query($sql) as $row) {
            print_r($row);
        }
    }
    
}

?>