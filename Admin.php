<?php

class Admin extends User
{
    private $can_delete_user = true;

    public function deleteUser(User $user)
    {
        if ($this->can_delete_user) {
            $user->name = '';
            $user->profession = '';
            $user->email = '';
        }
    }
}
