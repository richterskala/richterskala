<?php
// Enable Kirby StaticBuilder locally
c::set([
    'staticbuilder'            => true,
    'staticbuilder.outputdir'  => 'docs',
    'staticbuilder.baseurl'    => './',
    'staticbuilder.uglyurls'   => true,
    'staticbuilder.extension'  => '/index.html',
]);
// StaticBuilder requires Kirby’s cache to be disabled
c::set('cache', false);
c::set('debug', true);