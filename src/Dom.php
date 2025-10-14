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
  public static function docType(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new DocType($classes, $childs);
  }

  public static function html(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Html($classes, $childs);
  }

  public static function head(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Head($classes, $childs);
  }

  public static function title(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Title($classes, $childs);
  }
  
  public static function meta(
    string|array|null $data = []
  ): AbstractElement {
    return new Meta($data);
  }
 
  public static function body(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Body($classes, array_merge([
      "<script src=\"//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js\"></script>",
      "<script>",
        "WebFont.load({",
          "google: {",
            "families: ['Roboto:100,200,300,400,500,600,700']",
          "}",
        "});",
      "</script>"
    ], $childs ));
  }

  public static function div(
    string|array|null $classes = [],
    string|array|null $childs = []
  ): AbstractElement {
    return new Body($classes, $childs);
  }  
}