<?php

namespace Websyspro\Elements\Collectons;

use Websyspro\Commons\DataList;
use Websyspro\Elements\Enums\ConstHtmls;

class AbstractElement
{
  public string $tagElement = "div";
  public bool $isEndTag = true;
  public array $isElementEndBar = [
    "img"
  ];

  public DataList $childList;
  public DataList $classList;
  public DataList $dataList;
  public DataList $cssList;
  public DataList $eventList;

  public function __construct(
    string|array|null $classes = [],
    string|array|null $childs = []
  ){
    $this->classList = DataList::create($classes);
    $this->childList = DataList::create($childs);
  }

  public function css(
    array $css = []
  ): mixed {
    if(isset($this->cssList) === false){
      $this->cssList = DataList::create([]);
    }

    $this->cssList->add($css);
    return $this; 
  }

  public function data(
    array $data = []
  ): mixed {
    if(isset($this->dataList) === false){
      $this->dataList = DataList::create([]);
    }

    $this->dataList->add($data);
    return $this; 
  }

  public function events(
    array $event = []
  ): mixed {
    if(isset($this->eventList) === false){
      $this->eventList = DataList::create([]);
    }

    $this->dataList->add($event);
    return $this;
  }

  public function getClasses(
  ): string {
    if(isset($this->classList) === false){
      return ConstHtmls::emptyHtml->value;
    }

    return $this->classList->joinWithSpace();    
  }

  public function getDatas(
  ): string {
    if(isset($this->dataList) === false){
      return ConstHtmls::emptyHtml->value;
    }

    return $this->dataList->mapper(
      fn(string $value, string $key) => (
        "{$key}=\"{$value}\""
      )
    )->joinWithComma(); 
  }  

  private function getCsss(
  ): string {
    if(isset($this->cssList) === false){
      return ConstHtmls::emptyHtml->value;
    }

    return $this->cssList->mapper(
      fn(string $value, string $key) => (
        "{$key}: {$value}"
      )
    )->join(";");    
  }

  private function getEvents(
  ): string {
    if(isset($this->eventList) === false){
      return ConstHtmls::emptyHtml->value;
    }

    return $this->eventList->mapper(
      fn(string $value, string $key) => (
        "on{$key}=\"{$value}\""
      )
    )->joinWithComma();    
  }  
  
  private function getChilds(
  ): string {
    if(isset($this->childList) === false){
      return ConstHtmls::emptyHtml->value;
    }

    return $this->childList->mapper(
      function(AbstractElement|string $abstractElement){
        if(is_string($abstractElement) === true){
          return $abstractElement;
        }

        return $abstractElement->get();
      }
    )->joinNotSpace();
  }

  private function getAttributes(
  ): string {
    $attributes = (
      DataList::create([
        $this->getClasses(),
        $this->getEvents(),
        $this->getDatas(),
        $this->getCsss()
      ])->where(
        fn(string $attribute) => (
          empty(trim($attribute)) === false
        )
      )
    );

    if($attributes->exist() === false){
      return ConstHtmls::emptyHtml->value;
    }

    return DataList::create([
      ConstHtmls::emptyHtml->value, $attributes->joinWithSpace()
    ])->joinWithSpace();
  }

  public function get(
  ): string {
    if($this->isEndTag === false){
      if(in_array($this->tagElement, $this->isElementEndBar) === true){
        return DataList::create([
          "<{$this->tagElement}{$this->getAttributes()}/>"
        ])->joinNotSpace();
      } else {
        return DataList::create([
          "<{$this->tagElement}{$this->getAttributes()}>"
        ])->joinNotSpace();        
      }

    }

    return DataList::create([
      "<{$this->tagElement}{$this->getAttributes()}>",
        "{$this->getChilds()}",
      "</{$this->tagElement}>"
    ])->joinNotSpace();
  }
}