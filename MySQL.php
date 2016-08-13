<?php

class MySQL implements Storage {
    public function create($name)
    {
        echo 'Inserting data for '. $name . ' using MySQL<br/>';
    }

    public function read()
    {
        echo 'Reading data...';
    }

    public function update()
    {
        echo 'Updating data...';
    }

    public function delete()
    {
        echo 'Deleting data...';
    }
}
