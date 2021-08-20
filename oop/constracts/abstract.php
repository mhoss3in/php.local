<?php
abstract class onlineGateway{
    protected $options;
    public function __construct(){

    }

    abstract public function sendRequest();
    abstract public function verifyRequest();
}


class Mellat extends onlineGateway{

    public function sendRequest()
    {
        // TODO: Implement sendRequest() method.
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}