<?php

namespace Controller;

use Core\Config;

class RasminkaController extends AbstractTableController
{

    protected $tableName = "rasminka";

    public function actionShow(array $data)
    {
        $this
            ->view
            ->setFolder('workouts')
            ->setTemplate('show')
            ->setData([
                'table' => $this
                    ->table
                    ->reset()
                    ->setPageSize(Config::PAGE_SIZE)
                    ->getPage($data['get']['page'] ?? 1),
                'fields' => array_diff($this->table->getColumnsNames(), ['id']),
                'comments' => $this->table->getColumnsComments(),
                'type' => $this->getClassName(),
                'pageCount' => $this->table->pageCount()
            ]);
    }

    public function actionAdd(array $data)
    {
//         print_r($_FILES);
//         print_r($data['post']);
        // try {
        $this->table->add($data['post']);
        // } catch (\Throwable $th) {
        //     $_SESSION['errors'][] = $th->getMessage();
        // } finally {
        $this->redirect('?action=show&type=' . $this->getClassName());
        // }
    }

    public function actionDel(array $data)
    {

        // print_r($data);
        if (isset($data['get']['id'])) {
            $this->table->del(['id' => $data['get']['id']]);
        }
        $this->redirect('?action=show&type=' . $this->getClassName());
    }

    public function actionShowEdit(array $data)
    {
        // print_r($data['get']['id']);

        /** @var int $id */

        $id = $data['get']['id'];

        $viewData = $this->table->get(['id' => $id])[0];

        unset($viewData['id']); // Del id

        $this
            ->view
            ->setTemplate('edit')
            ->setData([
                'fields' => $viewData,
                'id' => $id,
                'type' => $this->getClassName(),
                'comments' => $this->table->getColumnsComments()
            ]);
    }

    public function actionEdit(array $data)
    {
        $editData = $data['post'];
        unset($editData['id']);

        $this->table->edit(['id' => $data['post']['id']], $editData);
        $this->redirect('?action=show&type=' . $this->getClassName());
    }
}
