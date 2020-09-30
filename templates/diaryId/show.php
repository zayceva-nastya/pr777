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
//print_r($table);
//
//echo TexLab\Html\Html::table()
//    ->setData($table)
//    ->setHeaders($comments)
//    ->setClass('tableDiary')
//    ->removeColumns([1 => 'id', 2 => 'users_id'])
//    ->html();

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


//$form = Html::create('Form')
//    ->setMethod('POST')
//    ->setAction("?action=add&type=$type")
//    ->setClass('form');
//
//
//foreach ($fields as $field) {
//    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
//    $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
//}
//
//$form->addContent(
//    Html::create('Input')
//        ->setType('submit')
//        ->setValue('OK')
//        ->html()
//);
//
//echo $form->html();


//print_r($usersList);
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
    echo Html::create("Pagination")
        ->setClass('pagination2')
        ->setControllerType($type)
        ->setPageCount($pageCount)
        ->html();
}

?>

