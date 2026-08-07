<?php

use Websyspro\Elements\Shareds\Document as DocumentClass;
use Websyspro\Elements\Shareds\Doctype as DoctypeClass;
use Websyspro\Elements\Shareds\Html as HtmlClass;
use Websyspro\Elements\Shareds\Components\Head as HeadClass;
use Websyspro\Elements\Shareds\Components\Body as BodyClass;
use Websyspro\Elements\Shareds\Div as DivClass;
use Websyspro\Elements\Shareds\H1 as H1Class;
use Websyspro\Elements\Shareds\H2 as H2Class;
use Websyspro\Elements\Shareds\H3 as H3Class;
use Websyspro\Elements\Shareds\Paragraph as ParagraphClass;
use Websyspro\Elements\Shareds\Href as HrefClass;
use Websyspro\Elements\Shareds\Img as ImgClass;
use Websyspro\Elements\Shareds\Article as ArticleClass;
use Websyspro\Elements\Shareds\Header as HeaderClass;
use Websyspro\Elements\Shareds\Footer as FooterClass;
use Websyspro\Elements\Shareds\Table as TableClass;
use Websyspro\Elements\Shareds\Strong as StrongClass;
use Websyspro\Elements\Shareds\Style as StyleClass;
use Websyspro\Elements\Shareds\Script as ScriptClass;
use Websyspro\Elements\Shareds\Link as LinkClass;
use Websyspro\Elements\Shareds\Meta as MetaClass;
use Websyspro\Elements\Shareds\Title as TitleClass;
use Websyspro\Elements\Shareds\THead as THeadClass;
use Websyspro\Elements\Shareds\TBody as TBodyClass;
use Websyspro\Elements\Shareds\TFoot as TFootClass;
use Websyspro\Elements\Shareds\TRow as TRowClass;
use Websyspro\Elements\Shareds\THeadColumn as THeadColumnClass;
use Websyspro\Elements\Shareds\TBodyColumn as TBodyColumnClass;
use Websyspro\Elements\Shareds\Svg as SvgClass;
use Websyspro\Elements\Shareds\Path as PathClass;
use Websyspro\Elements\Shareds\Time as TimeClass;

function Document(array $childs = []): void {
    DocumentClass::create($childs);
}

function Doctype() {
    return DoctypeClass::create();
}

function Html() {
    return HtmlClass::create();
}

function Head() {
    return HeadClass::create();
}

function Body() {
    return BodyClass::create();
}

function Div(string $class = "") {
    return DivClass::create($class);
}

function H1() {
    return H1Class::create();
}

function H2() {
    return H2Class::create();
}

function H3() {
    return H3Class::create();
}

function P() {
    return ParagraphClass::create();
}

function A(string $url) {
    return HrefClass::create($url);
}

function Img(string $src, string $alt = "") {
    return ImgClass::create($src, $alt);
}

function Article() {
    return ArticleClass::create();
}

function HtmlHeader() {
    return HeaderClass::create();
}

function Footer() {
    return FooterClass::create();
}

function Table() {
    return TableClass::create();
}

function Strong() {
    return StrongClass::create();
}

function Style() {
    return StyleClass::create();
}

function Script() {
    return ScriptClass::create();
}

function HtmlLink() {
    return LinkClass::create();
}

function Meta() {
    return MetaClass::create();
}

function Title() {
    return TitleClass::create();
}

function THead() {
    return THeadClass::create();
}

function TBody() {
    return TBodyClass::create();
}

function TFoot() {
    return TFootClass::create();
}

function TRow() {
    return TRowClass::create();
}

function TH() {
    return THeadColumnClass::create();
}

function TD() {
    return TBodyColumnClass::create();
}

function Svg(int $size, string $fill = "#000", string $viewBox = "0 -960 960 960", string $path = "") {
    return SvgClass::create($size, $fill, $viewBox, $path);
}

function Path(string $path) {
    return PathClass::create($path);
}

function HtmlTime(string $datetime) {
    return TimeClass::create($datetime);
}
