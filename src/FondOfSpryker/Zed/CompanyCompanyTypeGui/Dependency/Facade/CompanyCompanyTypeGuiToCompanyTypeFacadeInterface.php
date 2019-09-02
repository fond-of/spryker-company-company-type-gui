<?php

namespace FondOfSpryker\Zed\CompanyCompanyTypeGui\Dependency\Facade;

use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;

interface CompanyCompanyTypeGuiToCompanyTypeFacadeInterface
{
    /**
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getCompanyTypes(): CompanyTypeCollectionTransfer;
}
