<?php

namespace koolreport\stateless\sessions;

use SessionHandlerInterface;

class SessionHandler implements SessionHandlerInterface
{
    public function __construct()
    {

    }
    public function start()
    {
        session_start();        
    }

    public function close():bool
    {
        return true;
    }
    public function destroy(string $id):bool
    {
        return true;
    }

    public function gc(int $max_lifetime):int|false
    {
        return false;
    }
    public function open(string $path, string $name):bool
    {
        return true;
    }
    public function read(string $id):bool
    {
        return false;
    }
    public function write(string $id, string $data):bool
    {
        return true;
    }
}