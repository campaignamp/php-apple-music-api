<?php

namespace AppleMusic\Api;


use AppleMusic\ResourceObjects\Playlist;

class Playlists extends AbstractApi
{
    /**
     * @param $id
     * @param array $include
     * @return array|null
     */
    public function get($id, $include = [])
    {
        return $this->multiple('catalog/{storefront}/playlists', $id, Playlist::class, [
            'include' => implode(',', $include)
        ]);
    }
}