<?php


namespace Mailer\Formatters;

use Mailer\Contract\Messageable;
use Mailer\Contract\MessageFormatter;

class Events implements MessageFormatter
{
    /**
     * @var Messageable
     */
    private $message = null;
    private $source = '';

    /**
     * @param Messageable $message
     */
    public function setMessage(Messageable $message)
    {
        $this->message = $message;
    }

    public function setSource($name)
    {
        $this->source = $name;
    }
    public function getSource()
    {
        return !empty($this->source) ? $this->source : gethostname();
    }


    /**
     * @return array
     */
    public function format()
    {
        $out = array(
            'brand' => $this->getSource(),
            'event_name' => $this->message->getEvent(),
            'to' => array(
                'client_id' => $this->message->getClientId(),
                'email' => $this->message->getEmail(),
                'first_name' => $this->message->getFirstName(),
                'last_name' => $this->message->getLastName(),
                'lang' => $this->message->getLang(),
            ),
            'vars' => $this->message->getExtras(),
        );
        return $out;
    }

}