<?php

use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Div;
use Websyspro\Elements\Doms\DocType;

function App(
  mixed ...$childs
): mixed {
  return new App($childs);
}

function DocType(
): DocType {
  return new DocType();
}

function Div(
  mixed ...$childs
): Div {
  return new Div($childs);
}