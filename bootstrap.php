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
    $mediaSource = $jigsaw->getSourcePath() . '/_assets/media';
    $mediaDest = $jigsaw->getDestinationPath() . '/assets/media';

    if (! is_dir($mediaSource)) {
        return;
    }

    if (! is_dir($mediaDest)) {
        mkdir($mediaDest, 0755, true);
    }

    foreach (new FilesystemIterator($mediaSource) as $file) {
        if ($file->isFile()) {
            copy($file->getPathname(), $mediaDest . '/' . $file->getFilename());
        }
    }
});
