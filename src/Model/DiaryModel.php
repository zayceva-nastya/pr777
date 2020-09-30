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
            ->setFrom('`users`,`diary`')
            ->setWhere("`users`.`id` = `diary`.`users_id`  AND `diary` . `users_id` = $user_id")
            ->setOrderBy('`diary`.`id`DESC')
            ->getPage($page);
    }

    public function getAddExercise(int $users_id, string $exercise)
    {
        $data = date('Y-m-d H:i:s');
        $this->runSQL("INSERT INTO `diary` (`id`, `exercise`, `lead_time`, `users_id`) VALUES ( Null,'$exercise',1,$users_id)");
    }

    public function randPlan1(int $users_id)
    {
        $this->runSQL("INSERT INTO `diary` (`id`, `exercise`, `lead_time`, `users_id`) VALUES( Null,'Классическая планка на локтях ','30 сек',$users_id),( Null,'Обратные скручивания','10 повторений',$users_id), ( Null,'Ходьба на месте','10 мин',$users_id)");
    }
    public function randPlan2(int $users_id)
    {
        $this->runSQL("INSERT INTO `diary` (`id`, `exercise`, `lead_time`, `users_id`) VALUES( Null,'Лодочка с руками вверх ','10 повторений',$users_id),( Null,'Велосипед в боковой планке','10 повторений',$users_id), ( Null,'Повороты корпуса','20 повторений',$users_id)");
    }
    public function randPlan3(int $users_id)
    {
        $this->runSQL("INSERT INTO `diary` (`id`, `exercise`, `lead_time`, `users_id`) VALUES( Null,'Упрощенный велосипед на предплечьях ','10 повторений',$users_id),( Null,'Поочередный подъем ноги к локтю','10 повторений',$users_id), ( Null,'Наклоны к ногам','16 повторений',$users_id)");
    }

    public function pageCountDiary(int $users_id)
    {
        return ceil($this->runSQL("SELECT COUNT(*) as count FROM diary, users WHERE `users`.`id` = `diary`.`users_id` AND `diary` . `users_id` = $users_id")[0]['count'] / $this->pageSize);
    }
}
