<?php

/**
 * Includes required files.
 */
require_once 'Bootstrap.php';
require_once PATH_BASE . '/SourceFile.php';
require_once PATH_BASE . '/Minesweeper.php';

$filename = PATH_BASE . '/input.dat';

$source = new SourceFile();
$source->setSource( $filename );
$data = $source->getData();

$minesweeper = new Minesweeper();
$minesweeper->setData( $data );
echo $minesweeper->printSolutions();

exit( 0 );