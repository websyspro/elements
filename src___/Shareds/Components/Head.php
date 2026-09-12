<?php

namespace Websyspro\Elements\Shareds\Components;

use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Commons\Util;
use Websyspro\Elements\Shareds\Link;
use Websyspro\Elements\Shareds\Script;

class Head extends Component
{
  public static array $childsStaticsScripts = [];
  public static array $childsStaticsLinks = [];

  public static array $childsStatics = [];

  public HtmlTag $htmlTag = HtmlTag::HEAD;

  public static function addChildStatic(
    array $childs
  ): void {
    Util::mapper(
      $childs,
      function( object $child ) {
        if( $child instanceof Link ){
          $childExist = Util::inArray( 
            $child, Head::$childsStaticsLinks
          );

          if( $childExist === false ){
            Head::$childsStaticsLinks[] = $child;
          }
        } else if( $child instanceof Script ){
          $childExist = Util::inArray( 
            $child, Head::$childsStaticsScripts
          );

          if( $childExist === false ){
            Head::$childsStaticsScripts[] = $child;
          }
        } else {
          Head::$childsStatics[] = $child;
        }
      }
    );
  } 

  public function childList(
  ): string {
    krsort( Head::$childsStaticsLinks );
    krsort( Head::$childsStaticsScripts );

    return $this->childs->merge(
      array_merge(
        Head::$childsStatics,
        Head::$childsStaticsLinks,
        Head::$childsStaticsScripts
      )
    )->mapper( fn( Dom|string $child ) => (
      Util::isString( $child ) 
        ? $child : $child->get()
    )
    )->joinNotSpace();
  }

  public static function create(
  ): Dom {
    return new static;
  }
}