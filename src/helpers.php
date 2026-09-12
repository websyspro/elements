<?php

use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Div;
use Websyspro\Elements\Doms\DocType;

function App(
  mixed ...$childs
): App {
  return new App($childs);
}

function DocType(
  mixed ...$childs
): DocType {
  return new DocType($childs);
}

function Div(
  mixed ...$childs
): Div {
  return new Div($childs);
}