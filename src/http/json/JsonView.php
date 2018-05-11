<?php
namespace mimbre\http\json;
use mimbre\http\json\exception\JsonException;
use mimbre\http\HttpView;

abstract class JsonView extends HttpView
{
  /**
   * {@inheritdoc}
   *
   * @return void
   */
  public function printDocument()
  {
    header("Content-Type: application/json; charset=utf-8");

    try {
      $this->controller->processRequest();
    } catch (JsonException $e) {
      $message = substr(preg_replace('/\s+/', ' ', $e->getMessage()), 0, 150);
      header("HTTP/1.0 400 $message");

      echo json_encode(
        [
          "type" => $e->getType(),
          "message" => $e->getMessage()
        ]
      );

      throw $e;
    }

    echo json_encode($this->getDocument());
  }
}
