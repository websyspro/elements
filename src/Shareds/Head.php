<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Commons\Collection;
use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Abstract\IComponent;
use Websyspro\Elements\Shareds\Enums\AssetType;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Interfaces\IAsset;

final class Head extends Component implements IComponent 
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
    if( isset( Head::$assets )){
      Head::$assets->mapper(
        function( IAsset $iAsset ) {
          $iAsset->assetType === AssetType::JS
            ? $this->add( Script::create()->attributes( [ "src" => $iAsset->filename ])) 
            : $this->add( Style::create()->attributes( [ "href" => $iAsset->filename ]));
        }
      );
    }
  }

  public function render(
  ): void {
    $this->assets();
    $this->add(
      Title::create()->add(
        "Hello Word!!!"
      )
    );
  }
}