<?php

namespace Websyspro\Elements\Collectons;

use Websyspro\Commons\DataList;
use Websyspro\Elements\Dom;
use Websyspro\Elements\Enums\ConstHtmls;
use Websyspro\Elements\Shareds\StructureStyle;

class Head
extends AbstractElement
{
  public static DataList $styles;
  public static DataList $scripts;
  
  public string $tagElement = "head";

  public static function registerStyle(
    string $styleName,
    string $styleText
  ): void {
    if(isset(Head::$styles) === false){
      Head::$styles = DataList::create([]);
    }

    Head::$styles->add(
      Dom::style( $styleText )->data([
        "style-name" => $styleName
      ])
    );
  }

  public static function registerScript(
    string $scriptName,
    string $scriptText
  ): void {
    if(isset(Head::$scripts) === false){
      Head::$scripts = DataList::create([]);
    }

    Head::$scripts->add(
      Dom::script( $scriptText )->data([
        "script-name" => $scriptName
      ])
    );
  }

  public function getChilds(
  ): string {
    if(isset($this->childList) === false){
      return ConstHtmls::emptyHtml->value;
    }

    return $this->childList
      ->merge(Head::$styles->all())
      ->merge(Head::$scripts->all())->mapper(
        function(AbstractElement|string $abstractElement){
          if(is_string($abstractElement) === true){
            return $abstractElement;
          }

          return $abstractElement->get();
        }
      )->joinNotSpace();
  } 
}