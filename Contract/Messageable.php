<?php


namespace Mailer\Contract;

interface Messageable
{
    /**
     * @return int
     */
    public function getClientId();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    public function setLang($lang = 'en');

    /**
     * @return mixed
     */
    public function getLang();

    /**
     * @return mixed
     */
    public function getEvent();


    public function setExtras(array $extras);
    public function getExtras();
}