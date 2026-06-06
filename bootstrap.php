<?php

use Illuminate\Container\Container;
use TightenCo\Jigsaw\Events\EventBus;

/** @var Container $container */
/** @var EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 */

$events->afterBuild(function ($jigsaw) {
    $assetsSource = $jigsaw->getSourcePath() . '/_assets';
    $assetsDest = $jigsaw->getDestinationPath() . '/assets';

    foreach (['media', 'css'] as $dir) {
        $src = $assetsSource . '/' . $dir;
        $dest = $assetsDest . '/' . $dir;

        if (! is_dir($src)) {
            continue;
        }

        if (! is_dir($dest)) {
            mkdir($dest, 0755, true);
        }

        foreach (new FilesystemIterator($src) as $file) {
            if ($file->isFile()) {
                copy($file->getPathname(), $dest . '/' . $file->getFilename());
            }
        }
    }
});
