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

use Websyspro\Elements\Shareds\Doctype;
use Websyspro\Elements\Shareds\Document;

Document::create(
  [
    Doctype::create(),
  ]
);

// use Websyspro\Elements\Shareds\Div;

// echo Div::create()
//   ->styles( [ 
//     "background-color" => "rgb(100,0,0)",
//     "border-radius" => "15px",
//     "padding" => "15px 25px", 
//     "color" => "white",
//   ])
//   ->add( "Emerson Thiago" )
//   ->get();

// use Websyspro\Elements\Shareds\Div;
// use Websyspro\Elements\Shareds\Head;

// $head = Head::create()->get();

// $div = Div::create()
//   ->attributes([ "id" => "test" ])
//   ->events([ "click" => "alert('test');", "blur" => "alert('test');" ])
//   ->styles([ "color" => "red", "background-color" => "blue" ])
//   ->add( 
//     Div::create()->add(
//       Div::create()->add(
//         "Sub Hello Words"
//       )
//     )
//   )
//   ->get();
  
// print_r( "..... ..... .... .... .... ... fdsdafsd fdsfasdfds ..." );
// print_r( $head );

// print_r( [ "test" => "EMERSON THIAGO FSDAFSD FSDFSDAFSD"  ]);