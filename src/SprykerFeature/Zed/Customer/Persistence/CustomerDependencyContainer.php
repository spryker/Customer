<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace SprykerFeature\Zed\Customer\Persistence;

use SprykerFeature\Zed\Customer\Persistence\Propel\SpyCustomerAddressQuery;
use SprykerEngine\Zed\Kernel\Persistence\AbstractPersistenceDependencyContainer;
use SprykerFeature\Zed\Customer\Persistence\Propel\SpyCustomerQuery;
use SprykerFeature\Zed\Sales\Persistence\Propel\SpySalesOrderQuery;

class CustomerDependencyContainer extends AbstractPersistenceDependencyContainer
{

    /**
     * @return SpyCustomerQuery
     */
    public function createSpyCustomerQuery()
    {
        return SpyCustomerQuery::create();
    }

    /**
     * @return SpyCustomerAddressQuery
     */
    public function createSpyCustomerAddressQuery()
    {
        return SpyCustomerAddressQuery::create();
    }

    /**
     * @return SpySalesOrderQuery
     */
    public function createSpySalesOrderQuery()
    {
        return SpySalesOrderQuery::create();
    }

}
