<?php

namespace Websyspro\Elements\Shareds\Abstract;

use ReflectionClass;
use Websyspro\Commons\File;
use Websyspro\Commons\Util;
use Websyspro\Elements\Shareds\Components\Head;
use Websyspro\Elements\Shareds\Link;
use Websyspro\Elements\Shareds\Script;

class Component extends Dom
{
  public function __construct(
    array $childs = [],
    array $events = [],
    array $styles = [],
    array $props  = []
  ){
    parent::__construct(
      $childs,
      $events,
      $styles,
      $props
    );

    $this->addLink();
    $this->addScript();
  }

  private function componentDirectory(
    ReflectionClass $reflectionClass
  ): string {
    return dirname( $reflectionClass->getFileName());
  }  

  private function componentName(
    ReflectionClass $reflectionClass
  ): string {
    [ $className ] = Util::slice(
      explode(
        "\\",
        $reflectionClass->getName()
      ), -1
    );

    return $className;
  }

  private function componentPath(
    string $ext = ""
  ): string {
    $reflectClass = new ReflectionClass(
      $this
    );
    
    return Util::sprintFormat(
      "%s.%s", [
        Util::join(
          DIRECTORY_SEPARATOR, [
            $this->componentDirectory( $reflectClass ),
            $this->componentName( $reflectClass )
          ]
        ), $ext
      ]
    );
  }

  private function isHttps(
  ): bool {
    return (
      empty($_SERVER[ "HTTPS" ]) === false && $_SERVER[ "HTTPS" ] !== "off"
    ) || $_SERVER[ "SERVER_PORT" ] == 443;
  }

  private function server(
  ): string {
    [ "SERVER_NAME" => $serverName,
      "SERVER_PORT" => $serverPort
    ] = $_SERVER;
    
    $serverPort = (int)$serverPort === 80 
      ? "" : ":{$serverPort}";

    return $this->isHttps() 
      ? "https://{$serverName}{$serverPort}" 
      : "http://{$serverName}{$serverPort}";
  }

  private function componentFile(
    string $ext
  ): string|null {
    $componentPath = $this->componentPath( $ext );
    if( File::exist( $componentPath )){
      [ , $path ] = explode( 
        "src",
        $componentPath 
      );

      return strtolower(
        Util::sprintFormat(
          "%s%s", [ $this->server(), str_replace( 
            "\\", "/", $path 
          )]
        )
      );
    }

    return null;
  }

  private function addLink(
  ): void { 
    $componentFile = $this->componentFile( "css" );
    if( $componentFile !== null ){
      Head::addChildStatic([
        Link::create()->props( [ 
          "rel" => "stylesheet", "href" => $componentFile
        ])
      ]); 
    }
  }

  private function addScript(
  ): void { 
    $componentFile = $this->componentFile( "js" );
    if( $componentFile !== null ){
      Head::addChildStatic([
        Script::create()->props( [ 
          "src" => $componentFile
        ])
      ]); 
    }
  }  
}