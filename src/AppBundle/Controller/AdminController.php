<?php

namespace AppBundle\Controller;


use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    public function createNewUserEntity()
    {
        $user  = new User(array('ROLE_USER'),true);
        return $user;
    }

    public function createNewUserForm(){

    }
}
