<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;
use function is_string;

class Head
extends Dom
{
  protected DomType $domType = DomType::HEAD;

  protected static array $statics = [];

  public function __construct(
    private array $childs = []
  ){
    parent::__construct();
  }

  public static function addStaticChild(
    Dom $static
  ): void {
    if( $static instanceof StyleLink || $static instanceof ScriptLink ){
      if( $static instanceof StyleLink ){
        $isAddStatic = array_filter(
          static::$statics, function( mixed $item ) use( $static ) {
            if( $item instanceof StyleLink ){
              return $item->href === $static->href;
            }

            return false;
          }    
        );

        if( empty($isAddStatic) === false ){
          return ;
        }
      } else
      if( $static instanceof ScriptLink ){
        $isAddStatic = array_filter(
          static::$statics, function( mixed $item ) use( $static ) {
            if( $item instanceof ScriptLink ){
              return $item->src === $static->src;
            }

            return false;
          }    
        );

        if( empty($isAddStatic) === false ){
          return ;
        }        
      }
    }

    static::$statics = [
      ...static::$statics, 
      ...[ $static ]
    ];
  }
  
  private function defaultChilds(
  ): array {
    return [ 
      ...[
        new Meta([ "charset" => "UTF-8" ]),
        new Meta([ "name" => "viewport", "content" => "width=device-width, initial-scale=1.0" ])
      ], ...$this->childs, ...static::$statics 
    ];
  }

  public function handlerChild(
  ): string {
    return implode( 
      "", array_map(
        fn( object|string $child ) => (
          is_string( $child ) 
            ? $child : $child->get()
        ), $this->defaultChilds()
      )
    );
  }  
}