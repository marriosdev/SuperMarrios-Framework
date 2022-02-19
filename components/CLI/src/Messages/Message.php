<?php

namespace Firulin\Messages;

interface Message
{
    /**
     * @return string 
     */
    static function send(string $message);
}