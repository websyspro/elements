<?php

namespace Websyspro\Elements\Shareds\Interfaces;

use Websyspro\Elements\Shareds\Enums\AssetType;

class IAsset
{
  public function __construct(
    public string $key,
    public string $filename,
    public AssetType $assetType,
  ){}
}