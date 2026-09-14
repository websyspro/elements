<?php

use Websyspro\Logger\Terminal;

/*
 * IconFolder
 * */
$iconFolder = __DIR__ . "/src/Doms/Icons";
$helperFile = __DIR__ . "/src/helpers.php";
$iconsEnums = __DIR__ . "/src/Enums/Icons.php";
$icons = require_once( __DIR__ . "/icons.php" );

function loadIconClass(
  string $class,
  array $details 
): void {
  global $iconFolder;
  foreach( $details as $key => $paths ){
    $pathsList[] = sprintf(
      "\t%s => [ \"%s\", \"%s\" ]", ...[
        ...[ $key ], ...$paths
      ]
    );
  }

  $pathsList = implode(
    ",\r\n", $pathsList
  );

  file_put_contents( "{$iconFolder}/{$class}.php", implode(
    "\r\n", [ "<?php\r\n", "return [\r\n{$pathsList}\r\n];" ]
  ));  

  Terminal::init()
    ->cursorHide()
    ->spc()->green( "Create icon file" )
    ->spc()->line( "- {$class}" );
}

function loadIconEnums(
  string $enums
): void {
  global $iconsEnums;

  /*
   * Create File Contents
   * */
  file_put_contents( $iconsEnums, implode(
    "\r\n", [
      "<?php\r\n",
      "namespace Websyspro\Elements\Enums;\r\n",
      "enum IconList",
      "{",
        "{$enums}",
      "}"
    ]
  ));
}

if( empty( $icons ) === false ){
  foreach( $icons as $class => $details ){
    /*
     * Create File Class
     * **/    
    loadIconClass( $class, $details );

    /*
     * Create Users List
     * **/
    $hellpers[ "enums" ][] = "\tcase {$class};";
    $hellpers[ "users" ][] = sprintf( "use Websyspro\Elements\Doms\Icons\%s;\r\n", $class );
    $hellpers[ "calls" ][] = implode(
      "\r\n", [
        "function {$class}(",
          "\tint \$size,",
          "\tarray \$fill = [ 0,0,0 ],",
          "\tint \$iconWeight = 300",
        "): {$class} {",
          "\treturn new {$class}(\$size, \$fill, \$iconWeight);",
        "}\r\n\r\n",
      ]
    );    
  }
}

loadIconEnums( implode( "\r\n", $hellpers[ "enums" ] ));

exit();
foreach([  "users" => "Icons List", "calls" => "Icons" ] as $key => $tag){
  $position = 0;
  $helpersNew = [];
  $appendsLines = true;

  $helpersLinesOriginal = file( $helperFile );
  foreach( $helpersLinesOriginal as $cursor => $line ){
    if( str_contains( rtrim( $line, "\r\n" ), "/* End {$tag} */" )){
      $appendsLines = true;
    }

    if( $appendsLines === true ){
      $helpersNew[] = $line;
    }

    if( str_contains( rtrim( $line, "\r\n" ), "/* {$tag} */" )){
      $appendsLines = false;
      $position = $cursor + 1;
    }  
  }

  file_put_contents( 
    $helperFile, implode( 
      "", [ 
        ...array_slice( $helpersNew, 0, $position ), ...$hellpers[$key], 
        ...array_slice( $helpersNew, $position, sizeof($helpersNew) - $position )
      ]
    )
  );
}