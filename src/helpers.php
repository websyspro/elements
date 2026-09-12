<?php

use Websyspro\Elements\Doms\Div;

function Div(
  array $childs
): Div {
  return new Div($childs);
}