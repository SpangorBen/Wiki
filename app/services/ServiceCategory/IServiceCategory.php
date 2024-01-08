<?php

interface IServiceCategory
{
    public function Add(Category $category);
    public function Update(Category $category);
    public function Delete($Category_ID);
    public function Display();
}

?>