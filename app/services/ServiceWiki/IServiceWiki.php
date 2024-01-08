<?php

interface IServiceWiki
{
    public function Add(Wiki $wiki);
    public function Update(Wiki $wiki);
    public function Delete($Wiki_ID);
    public function Display();
}

?>