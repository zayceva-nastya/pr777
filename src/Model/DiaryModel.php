<?php

namespace Model;

use mysqli;
use TexLab\MyDB\DbEntity;

class DiaryModel extends DbEntity
{

    public function getDiaryPage(int $page)
    {
        return $this
            ->reset()
            ->setSelect('`diary`.`id`, `diary`.`exercise`, `diary`.`lead_time`,' .
                '`diary`.`date`,`diary`.`users_id`,  `users`.`login` AS users_id')
//            ->setSelect(' `diary`.`exercise`, `diary`.`lead_time`')
            ->setFrom('`users`,`diary`')
            ->setWhere('`users`.`id` = `diary`.`users_id`')
            ->setOrderBy('`diary`.`id`DESC')
            ->getPage($page);
    }

    public function diaryUserFilter(int $page, int $user_id)
    {
        return $this
            ->reset()
            ->setSelect('`diary`.`id`, `diary`.`exercise`, `diary`.`lead_time`')
//            ->setSelect('`diary`.`id`,`diary`.`exercise`, `diary`.`lead_time`,`diary`.`date`, `diary`.`users_id`, `users`.`login` AS users_id')
            ->setFrom('`users`,`diary`')
            ->setWhere("`users`.`id` = `diary`.`users_id`  AND `diary` . `users_id` = $user_id")
            ->setOrderBy('`diary`.`id`DESc')
            ->getPage($page);
    }

    public function getAddExercise(string $users_id, string $exercise)
    {
        $data = date('Y-m-d H:i:s');
        $this->runSQL("INSERT INTO `diary` (`id`, `exercise`, `lead_time`, `users_id`) VALUES ( Null,'$exercise',1,$users_id)");
    }
}
