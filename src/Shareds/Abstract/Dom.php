<?php

namespace Websyspro\Elements\Shareds\Abstract;

use Websyspro\Commons\Collection;
use Websyspro\Commons\Util;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Dom
{
  public Collection $childs;
  public Collection $events;
  public Collection $styles;
  public Collection $props;
  public HtmlTag $htmlTag = HtmlTag::DIV;
  public bool $isClosedTag = true;

  public function __construct(
    array $childs = [],
    array $events = [],
    array $styles = [],
    array $props  = []
  ){
    $this->childs = new Collection( $childs );
    $this->events = new Collection( $events );
    $this->styles = new Collection( $styles );
    $this->props  = new Collection( $props );

    $this->render();
  }

  public function add(
    object|array|string $child
  ): Dom {
    if( $child instanceof Collection ){
      $child = $child->all();
    }

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

  public function props(
    array $props
  ): Dom {
    if( Util::isArray( $props )){
      $this->props->merge( $props );
    }
    
    return $this;
  }

  private function attributeList(
  ): array {
    return $this->props->mapper(
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

  public function childList(
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

  public function render(
  ): void {}

  public function get(
  ): string {
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
}