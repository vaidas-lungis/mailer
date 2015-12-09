<?php


namespace Mailer;

use Mailer\Contract\Formatable;
use Mailer\Contract\Messageable;
use Mailer\Contract\MessageFormatter;

class Notification implements Formatable
{
    /**
     * @var MessageFormatter
     */
    private $formatter = null;

    private $source = null;

    public function setSource($name)
    {
        $this->source = $name;
    }

    /**
     * @param MessageFormatter $formatter
     */
    public function setFormatter(MessageFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param Messageable $message
     * @return string
     */
    public function getFormatted(Messageable $message)
    {
        $this->formatter->setSource($this->source);
        $this->formatter->setMessage($message);
        return $this->formatter->format();
    }


}
