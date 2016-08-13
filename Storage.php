<?php

interface Storage
{
    public function create($name);

    public function read();

    public function update();

    public function delete();
}


abstract class AbstractStorage
{
    public function connection()
    {
        echo 'Connection established...';
    }

    abstract public function create();
}

class OurStorage extends AbstractStorage {
    public function connection()
    {
        parent::connection();
    }

    public function create()
    {
        // TODO: Implement crseate() method.
        echo 'Create method implemented';
    }
}
