<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Right now is %s\n", Carbon::now()->toDateTimeString());