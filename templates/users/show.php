<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $groupNames
 * @var array $table
 */
// print_r($groupNames);


echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders([1 => '№', 2 => 'Пользователь', 3 => 'Группа', 4 => 'ФИО'])
    ->data($table)
    ->setClass('table')
    ->html();


$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=add&type=$type")
    ->setClass('hidden')
    ->setId('addForm2');

foreach ($fields as $field) {
    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());

    if ($field == 'group_id') {
        $form->addContent('<br>');
        $form->addContent((new Select())->setName($field)->setId($field)->setData($groupNames)->html());
        $form->addContent('<br>');
    } else {
        $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
    }
}

$form->addContent(
    Html::create('Input')
        ->setType('submit')
        ->setValue('OK')
        ->html()
);

echo $form->html();
?>

<a class="btn btn-primary" id="addButton2">➕➕➕</a>
<a id="closeFormButton2"></a>
<div id="shadow2" class="hidden"></div>


<?php
echo Html::create("Pagination")
    ->setClass('pagination2')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();
//print_r($table);
?>

</html>