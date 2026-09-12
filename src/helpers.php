<?php

use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Div;
use Websyspro\Elements\Doms\DocType;

function App(
  array $childs
): App {
  return new App($childs);
}

function DocType(
  array $childs
): DocType {
  return new DocType($childs);
}

function Div(
  array $childs
): Div {
  return new Div($childs);
}