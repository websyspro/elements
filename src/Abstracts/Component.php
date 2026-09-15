<?php

namespace Websyspro\Elements\Abstracts;

use Websyspro\DevTools\Interfaces\DevTools;
use ReflectionClass;
use Websyspro\Elements\Doms\Head;
use function defined;

abstract class Component 
extends Dom
{
  private function handlerDevTools(
    DevTools|null $devTools = null
  ): DevTools|null {
    if( defined( "DevTools_Base_Dir" ) === false ){
      return $devTools;
    }

    if( file_exists( DevTools_Base_Dir . "devTools.php" ) === false ){
      return $devTools;
    }

    $devTools = require DevTools_Base_Dir . "devTools.php";
    if( $devTools instanceof DevTools ){
      return $devTools;
    } else return $devTools;
  }

  private function handlerDirectory(
  ): string|null {
    $handlerClass = new ReflectionClass($this);
    if( $handlerClass instanceof ReflectionClass ){
      return str_replace(
        [ "\\", "/" ], "/", dirname(
          $handlerClass->getFileName()
        )
      );
    }

    return null;
  }

  private function handlerStaticPath(
    string $baseIncludes,
    string $staticFile
  ): string {
    return sprintf( "%s%s%s", DevTools_Base_Dir, $baseIncludes, $staticFile );
  }

  private function handlerStaticFiles(
  ): void {
    [ $baseIncludes ] = $this->handlerDevTools()->includes;
    if( $baseIncludes !== null ){
      [ $_, $baseReference ] = explode(
        $baseIncludes, $this->handlerDirectory()
      );

      [ $shortName ] = array_reverse(
        explode( "\\", get_class( $this ) )
      );

      /*
       * Define staticScripts
       * Define staticStyles
       * */
      $handlerStaticScript = "{$baseReference}/{$shortName}.js";
      $handlerStaticStyle = "{$baseReference}/{$shortName}.css";

      /*
       * Add DOM in HEAD
       */
      if( $this->handlerStaticPath( $baseIncludes, $handlerStaticScript )){
        // Head::addStaticChild( StyleLink( $handlerStaticScript ));
      }

      
      /*
      * Add DOM in HEAD
      */
      if( $this->handlerStaticPath( $baseIncludes, $handlerStaticStyle )){
        Head::addStaticChild( StyleLink( $handlerStaticStyle ));
      }
    }
  }

  public function get(
    array $props = []
  ): string {
    $this->handlerStaticFiles();
    return parent::get( $props );
  }
}