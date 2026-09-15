<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Enums\IsCloseDom;
use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;
use function sprintf;

class StyleLink
extends Dom
{
  protected DomType $domType = DomType::LINK;
  protected IsCloseDom $isCloseDom = IsCloseDom::No;

  public function __construct(
    private string $href
  ){
    parent::__construct(
      [], [], [], [
        "rel" => "stylesheet",
        "href" => $this->defaultHost( $href )
      ]
    );
  }

  private function defaultHost(
    string $href    
  ): string {
    [ "HTTP_REFERER" => $httpReferer
    ] = $_SERVER; 

    return sprintf( "{$httpReferer}/%s", ltrim( $href, "/" ));
  }

}