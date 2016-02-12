<?php namespace Mmieluch\LaravelVfsProvider;

use League\Flysystem\Vfs\VfsAdapter as OriginalVfsAdapter;

/**
 * Class VfsAdapter
 *
 * @package Mmieluch\LaravelVfsProvider
 * @author  Michał Mieluch <michal.mieluch@bluefroglondon.com>
 */
class VfsAdapter extends OriginalVfsAdapter
{

    /**
     * Get the path prefix.
     *
     * @return string path prefix
     */
    public function getPathPrefix()
    {
        return $this->pathPrefix;
    }

}
