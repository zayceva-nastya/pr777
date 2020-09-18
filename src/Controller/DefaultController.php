<?php

namespace Controller;

class DefaultController extends AbstractController
{
    public function actionDefault(): void
    {
        $this
            ->view
            ->setFolder('default')
            ->setTemplate('show');
    }

    public function actionStart(): void
    {
        $this
            ->view
            ->setFolder('default')
            ->setTemplate('default');
    }
}
