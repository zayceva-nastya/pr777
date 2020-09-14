<?php

use View\Html\Html;

/** @var int $id
 * @var string $type
 * @var array $fields
 * @var array $comments
 */

$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=edit&type=$type")
    ->setClass('form');

foreach ($fields as $name => $value) {
    if ($name == 'date') {
        $form->addContent(Html::create('input')
            ->setType('hidden')
            ->setName($name)
            ->setId($name)
            ->setValue($value)
            ->html());
    } elseif ($name == 'users_id') {
        $form->addContent(Html::create('input')->setType('hidden')->setName($name)->setId($name)->setValue($value)->html());
    } else {
        $form->addContent(Html::create('Label')->setFor($name)->setInnerText($comments[$name])->html());
        $form->addContent(Html::create('input')->setName($name)->setId($name)->setValue($value)->html());
    }

}

echo $form->addContent(Html::create('Input')->setType('hidden')->setName('id')->setValue($id)->html())
    ->addContent(Html::create('Input')->setType('submit')->setValue('OK')->html())
    ->html();
