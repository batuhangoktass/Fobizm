<?php


class Utils
{
    public static function messageState(bool $state, string $message)
    {
       return ["status" => $state, "message" => $message];
    }
}