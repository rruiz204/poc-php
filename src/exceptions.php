<?php declare(strict_types=1);

try {
  throw new Exception("Example Exception");
} catch (Exception $err) {
  echo $err->getMessage();
}
