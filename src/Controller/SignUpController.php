<?php

namespace Controller;

use Core\Config;

class SignUpController extends UsersController
{
    public function actionShow(array $data)
    {
        if (!empty($data)) {
            $this
                ->view
                ->setFolder('signup')
                ->setTemplate('show')
                ->setLayout('planeLayout')
                ->addData([]);
        } else {
            echo 321;
        }
    }


    public function actionShowEdit(array $data)
    {
    }

    public function actionAdd(array $data)
    {
        if (!empty($data['post']) && ($data['post']['login'] != '') && ($data['post']['password'] != '')) {
            if (!$this->table->userExists($data['post']['login'])) {
                $data['post']['group_id'] = $this->table->getGroupIdByCode('user');
                $this->table->add($data['post']);
                $this->redirect('?action=loginform&type=auth');
            } else {
                $_SESSION['errors'][] = "Такой логин существует";
                $this->redirect('?action=show&type=signup');
            }
        } else {
            $this->redirect('?action=show&type=signup');
        }
    }

    public function actionEdit(array $data)
    {
    }

    public function actionDel(array $data)
    {
    }
}
