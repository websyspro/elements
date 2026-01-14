<?php

use Websyspro\Elements\Shareds\Div;
use Websyspro\Elements\Shareds\Head;

$head = Head::create()->get();

$div = Div::create()
  ->attributes([ "id" => "test" ])
  ->events([ "click" => "alert('test');", "blur" => "alert('test');" ])
  ->styles([ "color" => "red", "background-color" => "blue" ])
  ->add( 
    Div::create()->add(
      Div::create()->add(
        "Sub Hello Words"
      )
    )
  )
  ->get();

print_r( $head );