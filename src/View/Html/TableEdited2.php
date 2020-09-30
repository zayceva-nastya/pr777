<?php

namespace View\Html;

use TexLab\Html\Table;

class TableEdited2 extends TableEdited
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
                if ($key == "exercise") {
                    $str .= "\t\t<td class='exerciseD'>$cell</td>\n";
                }
                if ($key == "lead_time") {
                    $str .= "\t\t<td class='lead_timeD'>$cell</td>\n";
                }
            }
            $str .= "\t\t<td class='doneDiary'><a  href='?action=del&type=$this->type&id=$row[id]'>✔</a></td>\n";
            $str .= "\t\t<td class='editDiary'><a  id='editExerc' href='?action=showedit&type=$this->type&id=$row[id]'>✏</a></td>\n";
            $str .= "\t</tr>\n";
        }

        $this->data = $str;
        return $this;
    }

}
