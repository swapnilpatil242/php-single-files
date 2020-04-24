<?php

  echo "... This is the include1Home.php, Before include...\n";
  include 'Abc.php';
  // require 'Abc.php';
  echo "... This is the include1Home.php, After include...\n";

  // Main difference between include and require is,
  // When you include any file whether Is it found or not, file code will be execute properly and will show warnings only
  // When you use require and file not found then file code will be stop exection and through error.
