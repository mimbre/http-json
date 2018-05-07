<?php
namespace mimbre\http\json\exception;
use mimbre\http\json\exception\JsonException;

/**
 * An exception generated in the 'server-side'.
 */
class ServerError extends JsonException
{

  /**
   * Constructor.
   *
   * @param string $message Message
   * @param string $type    Exception type
   */
  public function __construct($message, $type = "server")
  {
    parent::__construct($message, $type);
  }
}
