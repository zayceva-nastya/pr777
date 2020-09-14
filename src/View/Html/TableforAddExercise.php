<?php

namespace View\Html;


class TableforAddExercise  extends Table
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
            foreach ($row as $cell) {
                $str .= "\t\t<td>$cell</td>\n";
            }
            $str .= "\t\t<td>" .
                "<a role='button' href='?action=addexercise&type=diaryid&id=$row[id]&exercise=$row[exercise]' class='btn btn-success'>" .
                "Pull</a></td>\n";

        }

        $this->data = $str;
        return $this;
    }
}
