<?php declare(strict_types=1);

trait LoggerTrait
{
  public function info(string $message)
  {
    echo '[INFO]: ' . $message;
  }

  public function error(string $message)
  {
    echo '[ERROR]: ' . $message;
  }

  public function warn(string $message)
  {
    echo '[WARN]: ' . $message;
  }
}

class Product
{
  use LoggerTrait;

  public function demo(): void
  {
    $this->info("testing traits");
  }
}

$product = new Product();
$product->demo();