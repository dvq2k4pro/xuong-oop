<?php
 namespace Asus\XuongOop\Controllers\Admin;

use Asus\XuongOop\Commons\Controller;

 class UserController extends Controller{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;

    }
    public function create() {
        echo __CLASS__ . '@' . __FUNCTION__;

    }
    public function show($id) {
        echo __CLASS__ . '@' . __FUNCTION__;

    }
    public function edit($id) {
        echo __CLASS__ . '@' . __FUNCTION__;

    }
    public function delete($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }
 }