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
     * @return array
     */
    public function format();
}