<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformGraphQL\GraphQL\Resolver\LocationGuesser;

use eZ\Publish\API\Repository\Values\Content\Content;
use eZ\Publish\API\Repository\Values\Content\Location;

interface LocationFilter
{
    /**
     * Given a Content and a LocationList, filters out locations.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Content $content
     * @param \EzSystems\EzPlatformGraphQL\GraphQL\Resolver\LocationGuesser\LocationList $locationList
     */
    public function filter(Content $content, LocationList $locationList): void;
}