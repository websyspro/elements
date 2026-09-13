<?php

use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Body;
use Websyspro\Elements\Doms\Div;
use Websyspro\Elements\Doms\DocType;
use Websyspro\Elements\Doms\Head;
use Websyspro\Elements\Doms\Html;
use Websyspro\Elements\Doms\Link;
use Websyspro\Elements\Doms\Meta;

function App(
  mixed ...$childs
): mixed {
  return new App($childs);
}

function DocType(
): DocType {
  return new DocType();
}

function Html(
  mixed ...$childs
): Html {
  return new Html($childs);
}

function Head(
  mixed ...$childs
): Head {
  return new Head($childs);
}

function Meta(
  mixed ...$props
): Meta {
  return new Meta($props);
}

function StyledLink(
  string $href
): Link {
  return new Link($href);
}

function Body(
  mixed ...$childs
): Body {
  return new Body($childs);
}

function Div(
  mixed ...$childs
): Div {
  return new Div($childs);
}