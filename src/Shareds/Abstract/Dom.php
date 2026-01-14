<?php

namespace Websyspro\Elements\Shareds\Abstract;

use Websyspro\Commons\Collection;
use Websyspro\Commons\Util;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

abstract class Dom implements IComponent
{
  public HtmlTag $htmlTag = HtmlTag::DIV;
  public bool $isClosedTag = true;

  public function __construct(
    private Collection $childs = new Collection(),
    private Collection $events = new Collection(),
    private Collection $styles = new Collection(),
    private Collection $attributes = new Collection()
  ){}

  public function add(
    object|array|string $child
  ): Dom {
    $heList = Util::isArray( 
      $child
    );

    if( $heList === true ){
      $this->childs->merge( $child );
    } else {
      $this->childs->add( $child );
    }

    return $this;
  }

  public function events(
    array $events
  ): Dom {
    if( Util::isArray( $events )){
      $this->events->merge( $events );
    }

    return $this;
  }  

  public function styles(
    array $styles
  ): Dom {
    if( Util::isArray( $styles )){
      $this->styles->merge( $styles );
    }

    return $this;
  }

  public function attributes(
    array $attributes
  ): Dom {
    if( Util::isArray( $attributes )){
      $this->attributes->merge( $attributes );
    }
    
    return $this;
  }

  private function attributeList(
  ): array {
    return $this->attributes->mapper(
      fn(string $value, string $key) => Util::sprintFormat(
        "%s=\"%s\"", [ $key, $value ]
      )
    )->all();
  }

  private function eventList(
  ): array {
    return $this->events->mapper(
      fn(string $event, string $key) => Util::sprintFormat(
        "on%s=\"%s\"", [ $key, $event ]
      )
    )->all();
  }
  
  private function styleList(
  ): array {
    if($this->styles->exist() === false){
      return [];
    }

    $styles = $this->styles->mapper(
      fn(string $value, string $key) => Util::sprintFormat(
        "%s:%s", [ $key, $value ]
      )
    )->join( ";" );

    return [ Util::sprintFormat(
      "style=\"%s\"", [ $styles ]
    )];
  }  

  private function childList(
  ): string {
    return $this->childs->mapper(
      function(object|string $child){
        if( Util::isString( $child )){
          return $child;
        }

        return $child->get();
      }
    )->joinNotSpace();
  }

  public function init(
  ): void {}  

  public function render(
  ): void {}

  public function get(
  ): string {
    $this->init();
    $this->render();

    $props = new Collection(
      Util::merge(
        $this->attributeList(),
        Util::merge(
          $this->eventList(),
          $this->styleList()
        )
      )
    );

    if( $this->isClosedTag === true ){
      return $props->exist()
        ? "<{$this->htmlTag->value} {$props->joinWithSpace()}>{$this->childList()}</{$this->htmlTag->value}>" 
        : "<{$this->htmlTag->value}>{$this->childList()}</{$this->htmlTag->value}>";
    } else {
      return $props->exist() 
        ? "<{$this->htmlTag->value} {$props->joinWithSpace()}/>"
        : "<{$this->htmlTag->value}/>";
    }
  }

  public static function create(
  ): Dom {  
    return new static();
  }
}