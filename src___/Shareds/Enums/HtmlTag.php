<?php

namespace Websyspro\Elements\Shareds\Enums;

enum HtmlTag: string
{
    // Estrutura do documento
    case DOCTYPE = '!DOCTYPE html';
    case HTML = 'html';
    case HEAD = 'head';
    case BODY = 'body';
    case TITLE = 'title';
    case META = 'meta';
    case LINK = 'link';
    case BASE = 'base';
    case STYLE = 'style';

    // Conteúdo de texto
    case P = 'p';
    case SPAN = 'span';
    case DIV = 'div';
    case PRE = 'pre';
    case CODE = 'code';
    case BLOCKQUOTE = 'blockquote';
    case Q = 'q';
    case EM = 'em';
    case STRONG = 'strong';
    case B = 'b';
    case I = 'i';
    case U = 'u';
    case S = 's';
    case SMALL = 'small';
    case MARK = 'mark';
    case SUB = 'sub';
    case SUP = 'sup';
    case BR = 'br';
    case HR = 'hr';

    // Títulos
    case H1 = 'h1';
    case H2 = 'h2';
    case H3 = 'h3';
    case H4 = 'h4';
    case H5 = 'h5';
    case H6 = 'h6';

    // Listas
    case UL = 'ul';
    case OL = 'ol';
    case LI = 'li';
    case DL = 'dl';
    case DT = 'dt';
    case DD = 'dd';

    // Links e mídia
    case A = 'a';
    case IMG = 'img';
    case AUDIO = 'audio';
    case VIDEO = 'video';
    case SOURCE = 'source';
    case TRACK = 'track';
    case PICTURE = 'picture';
    case FIGURE = 'figure';
    case FIGCAPTION = 'figcaption';

    // Tabelas
    case TABLE = 'table';
    case THEAD = 'thead';
    case TBODY = 'tbody';
    case TFOOT = 'tfoot';
    case TR = 'tr';
    case TH = 'th';
    case TD = 'td';
    case CAPTION = 'caption';
    case COLGROUP = 'colgroup';
    case COL = 'col';

    // Formulários
    case FORM = 'form';
    case INPUT = 'input';
    case TEXTAREA = 'textarea';
    case BUTTON = 'button';
    case SELECT = 'select';
    case OPTION = 'option';
    case OPTGROUP = 'optgroup';
    case LABEL = 'label';
    case FIELDSET = 'fieldset';
    case LEGEND = 'legend';
    case DATALIST = 'datalist';
    case OUTPUT = 'output';
    case PROGRESS = 'progress';
    case METER = 'meter';

    // Scripts e embeds
    case SCRIPT = 'script';
    case NOSCRIPT = 'noscript';
    case IFRAME = 'iframe';
    case EMBED = 'embed';
    case OBJECT = 'object';
    case PARAM = 'param';

    // Seções semânticas
    case HEADER = 'header';
    case FOOTER = 'footer';
    case MAIN = 'main';
    case SECTION = 'section';
    case ARTICLE = 'article';
    case ASIDE = 'aside';
    case NAV = 'nav';
    case ADDRESS = 'address';

    // Interativos
    case DETAILS = 'details';
    case SUMMARY = 'summary';
    case DIALOG = 'dialog';

    // Templates
    case TEMPLATE = 'template';
    case SLOT = 'slot';
    case TIME = 'time';
    case SVG = 'svg';
    case PATH = 'path';
}
