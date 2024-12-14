<?php

declare(strict_types=1);

function sum(int $a, int $b): int {
  return $a + $b;
}


enum State {
  case PEDING;
  case COMPLETED;
  case CANCELED;
}

function getState(State $state): string {
  return match($state) {
    State::PEDING => "Pending...",
    State::COMPLETED => "Completed!!!",
    State::CANCELED => "Canceled :(",
  };
}

echo getState(State::CANCELED);