<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Customer\Communication\Table\CustomerTablePluginExecutor;

use Generated\Shared\Transfer\CustomerTransfer;

interface CustomerTablePluginExecutorInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     * @param string[] $buttons
     *
     * @return string[]
     */
    public function execute(CustomerTransfer $customerTransfer, array $buttons): array;
}
