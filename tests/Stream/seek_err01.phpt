--TEST--
Stream::seek() error: no arguments
--FILE--
<?php
$resource = fopen('php://memory', 'w+');
$stream = new HttpMessage\Stream($resource);

try {
    $stream->seek();
} catch (Error $e) {
    echo $e->getMessage();
}
?>
--EXPECT--
HttpMessage\Stream::seek() expects at least 1 parameter, 0 given
