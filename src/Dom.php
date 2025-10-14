<?php

namespace Websyspro\Elements;

use Websyspro\Elements\Collectons\AbstractElement;
use Websyspro\Elements\Collectons\Body;
use Websyspro\Elements\Collectons\DocType;
use Websyspro\Elements\Collectons\Head;
use Websyspro\Elements\Collectons\Html;
use Websyspro\Elements\Collectons\Meta;
use Websyspro\Elements\Collectons\Title;

class Dom
{
  public static function DocType(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new DocType($classes, $childs);
  }

  public static function Html(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Html($classes, $childs);
  }

  public static function Head(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Head($classes, $childs);
  }

  public static function Title(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Title($classes, $childs);
  }
  
  public static function Meta(
    string|array|null $data = []
  ): AbstractElement {
    return new Meta($data);
  }
 
  public static function Body(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Body($classes, $childs);
  }

  public static function Div(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Body($classes, $childs);
  }  
}