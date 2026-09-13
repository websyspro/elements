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
}