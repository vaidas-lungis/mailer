<?php


namespace Mailer\Contract;


interface MessageFormatter
{
    /**
     * @param Messageable $message
     * @return void
     */
    public function setMessage(Messageable $message);

    /**
     * @return string
     */
    public function format();
}