<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use View\Html\Input;


class InputTest extends TestCase
{

    public function testHtml()
    {
$text = new Input();
        $this->assertIsString($text->html());
    }
}
