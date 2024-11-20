<?php

namespace Sthom\App\Controller;

use Sthom\App\model\User_;
use Sthom\Kernel\AbstractController;
use Sthom\Kernel\Repository;

class UserController extends AbstractController{

    public function getAll() {
        $repository = new Repository(User_::class);
        $users = $repository->getAll();
        $this->render('home/userList',['title' => "User List", "users" => $users]);
    }

    public function create(){

        if (isset($_POST["submit"])) {

            $repository = new Repository(User_::class);
            $userEntity = new User_();
            $userEntity->setIdUser(0);
            $userEntity->setFirstName($_POST["firstName"]);
            $userEntity->setLastName($_POST["lastName"]);
            $userEntity->setEmail($_POST["email"]);
            $userEntity->setPassword($_POST["password"]);
            $userEntity->setCreatedAt('2024:11:20 03:30:00');
            $userEntity->setRole($_POST["role"]);
            $repository->insert($userEntity);
        }

        $this->render('home/addUser',['title' => "Add User"]);


    }

    public function update($idUser){

        $repository = new Repository(User_::class);

        if (isset($_POST["submit"])) {
            $userEntity = new User_();
            $userEntity->setIdUser($idUser);
            $userEntity->setFirstName($_POST["firstName"]);
            $userEntity->setLastName($_POST["lastName"]);
            $userEntity->setEmail($_POST["email"]);
            $userEntity->setPassword($_POST["password"]);
            $userEntity->setCreatedAt('2024:11:20 03:30:00');
            $userEntity->setRole($_POST["role"]);
            $repository->update($userEntity);
        }

        
        $userToUpdate = $repository->getByAttributes(["idUser" => $idUser]);
        $this->render("home/updateUser", ['title' => 'Update User', 'userToUpdate' => $userToUpdate[0]]);
    }

}