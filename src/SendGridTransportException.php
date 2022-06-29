<?php

namespace UncleCheese\SendGridMailer;

use Exception;
use SendGrid\Response;
use Swift_TransportException;

class SendGridTransportException extends Swift_TransportException
{
    /**
     * @var null|Response
     */
    private $response;

    public function __construct(string $message, int $code = 0, ?Exception $previous = null, ?Response $response = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }

    public function getResponse(): ?Response
    {
        return $this->response;
    }
}
