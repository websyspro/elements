<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Enums\IsCloseDom;
use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;

class ScriptLink
extends Dom
{
  protected DomType $domType = DomType::SCRIPT;
  protected IsCloseDom $isCloseDom = IsCloseDom::Yes;

  public function __construct(
    private string $href
  ){
    parent::__construct(
      [], [], [], [
        "src" => $this->handlerReference( $href )
      ]
    );
  }

  private function handlerProtocol(
    string $reference
  ): string {
    [ $protocol ] = explode(
      "/", mb_strtolower(
        $_SERVER[ "SERVER_PROTOCOL" ]
      )
    );

    return "{$protocol}://{$reference}";
  }

  private function handlerReference(
    string $href
  ): string {
    [ "SERVER_NAME" => $serverName,
      "SERVER_PORT" => $serverPort
    ] = $_SERVER;

    $href = ltrim(
      $href, "/"
    );

    return $serverPort === "80" 
      ? $this->handlerProtocol( "{$serverName}/{$href}" )
      : $this->handlerProtocol( "{$serverName}:{$serverPort}/{$href}" );
  }
}