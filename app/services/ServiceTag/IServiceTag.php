<?php

interface IServiceTag
{
    public function Add(Tag $tag);
    public function Update(Tag $tag);
    public function Delete($Tag_ID);
    public function Display();
}

?>