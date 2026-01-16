<?php

use Websyspro\Elements\Shareds\Div;

echo Div::create()
  ->styles( [ 
    "background-color" => "rgb(100,0,0)",
    "border-radius" => "15px",
    "padding" => "15px 25px", 
    "color" => "white",
  ])
  ->add( "EMERSON THIAGO SOUSA ALBUQUERQUE" )
  ->get();

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