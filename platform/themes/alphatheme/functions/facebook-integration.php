<?php

use Alphasky\Theme\Supports\ThemeSupport;
use Illuminate\Routing\Events\RouteMatched;

app('events')->listen(RouteMatched::class, fn () => ThemeSupport::registerFacebookIntegration());
