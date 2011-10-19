<?php

namespace Evolution\Spyc;
use Evolution\Kernel\Service;

Service::bind('Evolution\Spyc\Bundle::load', 'yaml:load');
Service::bind('Evolution\Spyc\Bundle::dump', 'yaml:dump');
