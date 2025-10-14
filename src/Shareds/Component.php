<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Commons\DataList;
use Websyspro\Elements\Dom;
use ReflectionClass;

class Component
{
  public function __construct(
    private array $childs = []
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
    $assets[] = Dom::style($this->getFilesByExt("css"));
    $assets[] = Dom::script($this->getFilesByExt("js"));
    return $assets;
  }  

  private function getChilds(
  ): array {
    return $this->childs;
  }

  private function get(
  ): string {
    return Dom::div(
      [], [ array_merge(
        $this->getAssets(),
        $this->getChilds()
      )]
    )->get();
  }

  public static function render(
    array $childs = []
  ): string {
    return (new static($childs))->get();
  }
}