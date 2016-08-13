<?php

class Task
{
    use Hello;

    private $title = '';
    private $duration = '';
    private $user = '';
    private $db;

    public function __construct(User $user, Storage $db)
    {
        $this->user = $user;
        $this->db = $db;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        $this->db->create($this->title);
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getTask(): string
    {
        return $this->title . ' was done by ' . $this->user->getName() . ' for ' . $this->duration;
    }
}






