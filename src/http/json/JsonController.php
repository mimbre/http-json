<?php
namespace mimbre\http\json;
use mimbre\http\HttpController;
use mimbre\http\exception\HttpException;
use mimbre\http\json\exception\ClientException;

class JsonController extends HttpController
{
  /**
   * {@inheritdoc}
   *
   * @param string $name    Parameter name
   * @param array  $options Options (not required)
   *
   * @return mixed|null
   */
  public function getParam($name, $options = [])
  {
    try {
      return parent::getParam($name, $options);
    } catch (HttpException $e) {
      throw new ClientException($e->getMessage());
    }
  }
}
