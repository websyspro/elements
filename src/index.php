<?php

/*
Document::render( [
  Dom::docType( [ "html" ]),
  Dom::html( [ "lang" => "pt" ])->add( [
    Dom::head( [])->add( [
      Dom::title( [])->add( [
        "Websyspro"
      ])
    ]),
    Dom::body()->add( [
      HeaderView::render(),
      MainView::render(),
      FootView::render()
    ])
  ])
]);
*/

use Websyspro\Elements\Shareds\Body;
use Websyspro\Elements\Shareds\Div;
use Websyspro\Elements\Shareds\Doctype;
use Websyspro\Elements\Shareds\Document;
use Websyspro\Elements\Shareds\Head;
use Websyspro\Elements\Shareds\Html;
use Websyspro\Elements\Shareds\Title;

Document::create(
  [
    Doctype::create(),
    Html::create()->add(
      [
        Head::create()->add(
          Title::create( 
            [ "Websyspro" ]
          )
        ),
        Body::create()->add(
          [
            Div::create()->add(
              "Hello World este"
            )
          ]
        )
      ]
    )
  ]
);