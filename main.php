<?php

$recursiveIteratorIterators = (
  new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator( 
      "D:/Nova pasta (2)/elements/src/Shareds/List", FilesystemIterator::SKIP_DOTS
    )
  )
);

function loadIcon(
  string $file,
  string $class
): string {
  $content = implode(
    PHP_EOL, [
      "<?php\r\n",
      "namespace Websyspro\Elements\Doms\Icons;\r\n",
      "use Websyspro\Elements\Enums\IconTypeWeight;",
      "use Websyspro\Elements\Doms\Icon;\r\n",
      "class %s",
      "extends Icon",
      "{",
        "\tprotected function handlerWeight(",
          "\t\tIconTypeWeight \$iconWeightType",
        "\t): array {",
          "\t\treturn match( \$iconWeightType->value ){",
            "%s",
          "\t\t};",
        "\t}",
      "}"
    ]
  );

  return sprintf(
    $content, str_replace( ".php", "", $class ), implode( ",\r\n", array_map(
      fn( string $line ) => (
        sprintf( "\t\t\t%s", rtrim(trim($line), "," ) )
      ), array_slice( file( $file ), 17, 7 )
    ))
  );
}


foreach ($recursiveIteratorIterators as $iterator){
  file_put_contents( 
    "D:/defaults/elements/src/Doms/Icons/{$iterator->getFilename()}", loadIcon(
      $iterator->getPathname(), $iterator->getFilename()
    )
  );

  $uses[] = sprintf(
    "use Websyspro\Elements\Doms\Icons\%s;\r\n",
      str_replace( ".php", "", $iterator->getFilename() )
  );

  $helpersCalls[] = sprintf(
    implode(
      "\r\n", [
        "function %s(",
          "\tint \$size,",
          "\tarray \$fill = [ 0,0,0 ],",
          "\tIconTypeWeight \$iconTypeWeight = IconTypeWeight::iw300",
        "): %s {",
          "\treturn %s(\$size, \$fill, \$iconTypeWeight);",
        "}\r\n\r\n",
      ]
    ),
    str_replace( ".php", "", $iterator->getFilename() ),
    str_replace( ".php", "", $iterator->getFilename() ),
    str_replace( ".php", "", $iterator->getFilename() ) 
  );
}

$usesCursor = 0;
$callCursor = 0;
$helpersNew = [];
$appendsLines = true;
$helpersLinesOriginal = file( "./src/helpers.php" );
foreach( $helpersLinesOriginal as $cursor => $line ){
  
  if( str_contains( rtrim( $line, "\r\n" ), "/* End Icons List */" )){
    $appendsLines = true;
  }

  if( str_contains( rtrim( $line, "\r\n" ), "/* End Icons */" )){
    $appendsLines = true;
  }

  if( $appendsLines === true ){
    $helpersNew[] = $line;
  }

  if( str_contains( rtrim( $line, "\r\n" ), "/* Icons List */" )){
    $appendsLines = false;
    $usesCursor = $cursor + 1;
  }

  if( str_contains( rtrim( $line, "\r\n" ), "/* Icons */" )){
    $appendsLines = false;
    $callCursor = $cursor + 1;
  }  
}

file_put_contents( "src/helpers.php", implode( 
  "", [
    ...array_slice($helpersNew, 0, $usesCursor),
    ...$uses,
    ...array_slice($helpersNew, $usesCursor, -1 ),
    ...array_slice($helpersCalls, 0 ),
    ...array_slice($helpersNew, -1 )
  ]
));