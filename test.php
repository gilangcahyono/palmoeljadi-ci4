<?php

$images = '{
  "0": "https://via.placeholder.com/640x480.png",
  "1": "https://via.placeholder.com/640x480.png",
  "2": "https://via.placeholder.com/640x480.png",
}';

$result = json_decode($images, true);

echo ($result);
