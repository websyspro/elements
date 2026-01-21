<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Commons\Collection;
use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\AssetType;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Interfaces\IAsset;

class Head extends Component
{
  public static Collection $assets;
  public HtmlTag $htmlTag = HtmlTag::HEAD;

  public function addAsset(
    string $key,
    string $asset,
    AssetType $assetType
  ): void {
    if( isset( Head::$assets ) === false ){
      Head::$assets = new Collection();
    }

    $existAssset = Head::$assets->where(
      fn( IAsset $iAsset ) => $iAsset->key === $key
    )->exist();

    if( $existAssset === false ){
      Head::$assets->add(
        new IAsset(
          $key, 
          $asset, 
          $assetType
        )
      );
    }
  }

  private function assets(
  ): void {
    if( isset( Head::$assets ) === false){
      Head::$assets = new Collection([
        new IAsset( "FontUbuntu", "https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap", AssetType::CSS )
      ]);
    }

    Head::$assets->mapper(
      function( IAsset $iAsset ) {
        $iAsset->assetType === AssetType::JS
          ? $this->add( Script::create()->props( [ "src" => $iAsset->filename ])) 
          : $this->add( Style::create()->props( [ "href" => $iAsset->filename ]));
      }
    );    
  }

  public function render(
  ): void {
    $this->assets();
  }

  public static function create(
    array $childs = [],
    array $events = [],
    array $styles = [],
    array $props  = []
  ): Dom {
    return new static(
      array_merge(
        $childs, [
          Link::create()->props( [ "rel" => "preconnect", "href" => "https://fonts.googleapis.com" ]), 
          Link::create()->props( [ "rel" => "preconnect", "href" => "https://fonts.gstatic.com", "crossorigin" => true ]),
          Link::create()->props( [ "rel" => "stylesheet", "href" => "ttps://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"])
        ]
      ), $events, $styles, $props
    );
  }
}