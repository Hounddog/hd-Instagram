<?php

namespace HD\Instagram\Api;

use HdApiClient\Api\AbstractApi;
use HD\Instagram\Collection\RepositoryCollection;

class Tags extends AbstractApi
{
    /**
     * Get Recent Media
     *
     * @link http://instagram.com/developer/endpoints/tags/#get_tags_media_recent
     *
     * @param  string $tag
     * @param array $params
     * @return RepositoryCollection
     */
    public function recent($tag, array $params = array())
    {
        $httpClient =$this->getClient()->getHttpClient();
        $collection = new RepositoryCollection($httpClient, 'tags/'.$tag.'/media/recent', $params);

        return $collection;
    }

    public function tagName()
    {
        # code...
    }

    public function search()
    {
        # code...
    }
}