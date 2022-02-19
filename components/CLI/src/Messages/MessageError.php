<?php

namespace Firulin\Messages;
use Firulin\Messages\Message;

class MessageError implements Message
{
    static function send(string $message)
    {
        return "\033[1;31m". "[" .date("H:m:s") ."] » ".$message."\033[0m\n";
    }
}