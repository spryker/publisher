<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Publisher\Dependency\Facade;

interface PublisherToEventBehaviorFacadeInterface
{
    /**
     * @param array $resources
     * @param array $ids
     *
     * @return void
     */
    public function executeResolvedPluginsBySources(array $resources, array $ids = []): void;

    /**
     * @return string[]
     */
    public function getAvailableResourceNames(): array;
}
