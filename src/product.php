<?php

class Product{
    public string $pid;
    public string $pname;
    public int $pprice;
    public string $pimage;

    public function __construct(string $pid , string $pname , int $pprice , string $pimage)
    {
        $this->pid = $pid;
        $this->pname = $pname;
        $this->pprice = $pprice;
        $this->pimage = $pimage;
        echo "product object created<br>";
    }

}

?>