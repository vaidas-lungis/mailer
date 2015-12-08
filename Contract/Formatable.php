<?php


namespace Mailer\Contract;


interface Formatable
{
    public function setFormatter(MessageFormatter $formatter);
    public function getFormatted(Messageable $message);
}