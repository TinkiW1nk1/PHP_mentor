<?php

class ReportImport implements iImport
{
    public function dataInsert(array $data)
    {
        $this->render($data);
    }

    private function render(array $data)
    {
        extract($data);
        include 'table.php';
    }
}