<?php

use Websyspro\Elements\Shareds\Components\Body;
use Websyspro\Elements\Shareds\Components\Head;
use Websyspro\Elements\Shareds\Div;
use Websyspro\Elements\Shareds\Doctype;
use Websyspro\Elements\Shareds\Document;
use Websyspro\Elements\Shareds\Html;

Document::create(
  [
    Doctype::create(),
    Html::create()->add(
      [
        Head::create(),
        Body::create()->add(
          Div::create()->add(
            "Hello World!!!"
          )
        )
      ]
    )
  ]
);