<?php

namespace LyApi\extend\LADoc;

class Extend{
    public function CreateDoc($config){
        $api = new BootstrapApiDoc($config);
        return $api->getHtml();
    }
}