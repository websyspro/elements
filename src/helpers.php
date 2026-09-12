<?php

use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Div;

function App(
  mixed ...$childs
): App {
  return new App($childs);
}

function Div(
  mixed ...$childs
): Div {
  return new Div($childs);
}