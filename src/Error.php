<?php

namespace RPurinton\Mir4nft;

class Error extends \Exception implements \Throwable
{
    public function __construct(protected $message, protected $code = 0, protected ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        echo ("Custom Error Handler: " . $this->__toString());
    }

    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
