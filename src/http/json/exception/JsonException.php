<?php
namespace mimbre\http\json\exception;
use mimbre\http\exception\HttpException;

class JsonException extends HttpException
{
  private $_type = "";

  /**
   * Constructor.
   *
   * @param string $message Message
   * @param string $type    Exception type (not required)
   */
  public function __construct($message, $type = "general")
  {
    parent::__construct($message);
    $this->_type = $type;
  }

  /**
   * Gets exception type.
   *
   * @return string
   */
  public function getType()
  {
    return $this->_type;
  }
}
