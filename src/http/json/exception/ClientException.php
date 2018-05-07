<?php
namespace mimbre\http\json\exception;
use mimbre\http\json\exception\JsonException;

/**
 * An exception generated in the 'client-side'.
 */
class ClientException extends JsonException
{
  /**
   * Constructor.
   *
   * @param string $message Message
   * @param string $type    Exception type
   */
  public function __construct($message, $type = "client")
  {
    parent::__construct($message, $type);
  }
}
