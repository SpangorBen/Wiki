<?php

interface IServiceUser
{
    public function Add(User $user);
    public function Update(User $user);
    public function Delete($User_ID);
    public function Display();
}

?>