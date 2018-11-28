<?php
// Enable Kirby StaticBuilder locally
c::set('staticbuilder', true);
c::set('staticbuilder.baseurl', './');
// StaticBuilder requires Kirby’s cache to be disabled
c::set('cache', false);