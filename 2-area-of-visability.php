<?php
//public – открытые, или общедоступные;
//
//protected – защищенные;
//
//private – закрытые.

class Page {
    protected $title = 'Index Page';

    public  function getTitle()  {
        return $this->title;
    }
}

$index = new Page();
//приведет к ошибке
echo $index->title;