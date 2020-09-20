<?php

namespace View\Html;


class TableforAddExercise extends Table
{
    protected $type;

    public function setControllerType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setHeaders(array $headers)
    {
        parent::setHeaders($headers);
        $this->headers .= "\t<th></th>\n\t<th></th>\n";
        return $this;
    }

    public function data(array $data)
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "\t<tr>\n";
            foreach ($row as $key => $cell) {
                if (($key != "id") && ($key != "group_id")) {
//                    $str .= "\t\t<td>$cell</td>\n";
                    if ($key == "exercise") {
                        $str .= "\t\t<td class='exercise'>$cell</td>\n";
                    }
                    if ($key == "description") {
                        $str .= "\t\t<td class='description'>$cell</td>\n";
                    }
                    if ($key == "lead_time") {
                        $str .= "\t\t<td class='lead_time'>$cell</td>\n";
                    }
                    if ($key == "gifs") {
                        $str .= "\t\t<td class='gifs'>$cell</td>\n";
                    }
                }


//                $str .= "\t\t<td>$cell</td>\n";
            }
            $str .= "\t\t<td>" .
                "<a role='button' href='?action=addexercise&type=diaryid&id=$row[id]&exercise=$row[exercise]' class=' pull btn btn-success'>" .
                "Добавить в план</a></td>\n";

        }

        $this->data = $str;
        return $this;
    }
}
