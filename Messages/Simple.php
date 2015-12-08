<?php


namespace Mailer\Messages;


use Mailer\Contract\Messageable;

class Simple implements Messageable
{
    /**
     * @var string
     */
    private $event = '';

    /**
     * @var int
     */
    private $clientId = 0;

    /**
     * @var null
     */
    private $email = null;

    /**
     * @var string
     */
    private $first_name = '';

    /**
     * @var string
     */
    private $last_name = '';

    /**
     * @var string
     */
    private $lang = 'en';

    private $extras = array();

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang = 'en')
    {
        $this->lang = $lang;
    }

    /**
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param array $vars
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }


}
