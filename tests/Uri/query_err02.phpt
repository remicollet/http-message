--TEST--
Uri::withQuery() error: missing argument
--FILE--
<?php
try {
    (new HttpMessage\Uri)->withQuery();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
HttpMessage\Uri::withQuery() expects exactly 1 parameter, 0 given
