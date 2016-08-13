<?php
class User {
    use Hello;

    protected $name = '';
    protected $profession = '';
    protected $email = '';
    private $db = '';

    public function __construct(\Storage $db)
    {
        $this->db = $db;
    }

    public function register($name, $profession, $email)
    {
        $this->name = $name;
        $this->profession = $profession;
        $this->email = $email;

        $this->db->create($this->name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProfession()
    {
        return $this->profession;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
//
//$name = 'Sumon';
//$profession = 'Software Engineer';
//$email = 'me@sumonselim.com';
//
//$user1 = new User();
//$user1->register($name, $profession, $email);
//$user1->show();
//
//$name = 'Mahfuz';
//$profession = 'WordPress Engineer';
//$email = 'mahfuz@sumonselim.com';
//
//$user2 = new User();
//$user2->register($name, $profession, $email);
//$user2->show();
