<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 * @var int $user_id
 */

if (empty($table)) {
    echo "<div id='diaryBut'>Нажми <a class='btn exerc' href='?action=show&type=planka' >GO</a> чтобы добавить упражнения</div>";
} else {
    echo "<div class='boxTableDiary'>" .
        Html::create('TableEdited2')
            ->setControllerType($type)
//            ->setHeaders([1 => '№', 2 => 'Упражнение', 3 => 'Количество повторений'])
            ->data($table)
            ->setClass('tableDiary')
            ->html()
        . "</div>";

}

?>

<form action="?action=add&type=<?= $type ?>" method="post" class="hidden" id="addForm">
    <label> <?= $comments['exercise'] ?>

    </label> <input class="" type="text" name="exercise">
    <label> <?= $comments['lead_time'] ?>

    </label> <input type="text" name="lead_time">
    <input type="hidden" name="users_id" value="<?= $user_id ?>">

    <input id="formDiaryOk" type="submit" value="Добавить">
</form>
<?php
if (!empty($table)) {
    echo "<a class=\"btn btn-primary\" id=\"addButton\">Add Exercise</a>
<a id=\"closeFormButton\"></a>
<div id=\"shadow\" class=\"hidden\"></div>";
}


if ($pageCount > 1) {
    echo "<div class='box-page'>" .
        Html::create("Pagination")
            ->setClass('pagination2')
            ->setControllerType($type)
            ->setPageCount($pageCount)
            ->html() .
        "</div>";
}

?>

