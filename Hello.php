<?php
trait Hello
{
    public function hello()
    {
        echo 'calling from ' . __CLASS__;
    }
}
