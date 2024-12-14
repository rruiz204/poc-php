<?php
$day = "monday";

$message = match ($day) {
  "monday" => "Start",
  "friday" => "End",
  "saturday", "sunday" => "Weekend",
  default => "Normal day",
};

echo $message;