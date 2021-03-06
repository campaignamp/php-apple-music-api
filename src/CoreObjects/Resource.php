<?php

namespace AppleMusic\CoreObjects;


class Resource
{
    /**
     * @var string Persistent identifier of the resource. This member is required.
     */
    public $id;

    /**
     * @var string The type of resource. This member is required.
     */
    public $type;

    /**
     * @var string A URL subpath that fetches the resource as the primary object. This member is only present in responses.
     */
    public $href;

    /**
     * @var array Attributes belonging to the resource (can be a subset of the attributes). The members are the names of the attributes defined in the object model.
     */
    public $attributes;

    /**
     * @var array Relationships belonging to the resource (can be a subset of the relationships). The members are the names of the relationships defined in the object model.
     */
    public $relationships;

    /**
     * @var array Information about the request or response. The members may be any of the endpoint parameters.
     */
    public $meta;
}