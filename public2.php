<?php
class pgdca
{
    public $a=10;
    public $b=10;
    function add()
    {
        echo $this->a;
        echo "<br>";
        echo $this->b;
    }
}
$obj=new pgdca;
$obj->add();
?>