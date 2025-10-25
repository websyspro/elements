<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Commons\DataList;
use Websyspro\Elements\Dom;
use ReflectionClass;
use Websyspro\Elements\Collectons\Head;

class Component
{
  public function __construct(
    private object $child
  ){}

  private function getBasePath(
  ): string {
    return dirname((
      new ReflectionClass($this)
    )->getFileName());
  } 
  
  private function getFilesByExt(
    string $ext
  ): string {
    $contents = DataList::create([]);
    $globFind = sprintf(
      "{$this->getBasePath()}%s*.%s", DIRECTORY_SEPARATOR, $ext
    );

    foreach (glob($globFind) as $file) {
      $code = trim(file_get_contents($file));
      if ($code !== '') {
        $contents->merge([ $code ]);
      }
    }

    return $contents->joinNotSpace();
  }  

  private function getAssets(
  ): array {
    Head::registerStyle("testCSS", $this->getFilesByExt("css"));
    Head::registerScript("testScripts", $this->getFilesByExt("js"));
    return [];
  }  

  private function getChilds(
  ): array {
    return [ $this->child ];
  }

  public function get(
  ): string {
    return Dom::div(
      [], array_merge(
        $this->getAssets(),
        $this->getChilds()
      )
    )->get();
  }

  public static function render(
  ): object {
    return new static(
      Dom::div([], [ "Test" ])
    );
  }
}