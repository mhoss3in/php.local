<?php
require_once "../db.php";
class user extends Db {

    public function __construct(){
        $this->table="users";
    }
}
$user1 = new user();
var_dump($user1);
//$user1 -> find(23);