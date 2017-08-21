<?php

namespace AppleMusic\Api;


use AppleMusic\ResourceObjects\MusicVideo;

class MusicVideos extends AbstractApi
{
    /**
     * @param $id
     * @param array $inclide
     * @return array|null
     */
    public function get($id, $include = [])
    {
        return $this->multiple('catalog/{storefront}/music-videos', $id, MusicVideo::class, [
            'include' => implode(',', $include)
        ]);
    }
}