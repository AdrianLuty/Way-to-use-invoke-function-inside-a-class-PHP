<?php
class helloW{
  function __invoke()
  {
    echo "Hello World!";
  }
}
$str = new helloW;
$str();
?>
