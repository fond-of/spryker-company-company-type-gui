<?php

namespace FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Form\DataProvider;

use FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Form\CompanyCompanyTypeForm;
use FondOfSpryker\Zed\CompanyCompanyTypeGui\Dependency\Facade\CompanyCompanyTypeGuiToCompanyTypeFacadeInterface;

class CompanyCompanyTypeFormDataProvider
{
    /**
     * @var \FondOfSpryker\Zed\CompanyCompanyTypeGui\Dependency\Facade\CompanyCompanyTypeGuiToCompanyTypeFacadeInterface
     */
    protected $companyTypeFacade;

    /**
     * @param \FondOfSpryker\Zed\CompanyCompanyTypeGui\Dependency\Facade\CompanyCompanyTypeGuiToCompanyTypeFacadeInterface $companyTypeFacade
     */
    public function __construct(CompanyCompanyTypeGuiToCompanyTypeFacadeInterface $companyTypeFacade)
    {
        $this->companyTypeFacade = $companyTypeFacade;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return [
            CompanyCompanyTypeForm::OPTIONS_COMPANY_TYPE => $this->getCompanyTypeOptions(),
        ];
    }

    /**
     * @return array
     */
    protected function getCompanyTypeOptions(): array
    {
        $companyTypeOptions = [];
        $companyTypeCollectionTransfer = $this->companyTypeFacade->getCompanyTypes();

        foreach ($companyTypeCollectionTransfer->getCompanyTypes() as $companyTypeTransfer) {
            $companyTypeOptions[$companyTypeTransfer->getName()] = $companyTypeTransfer->getIdCompanyType();
        }

        return $companyTypeOptions;
    }
}
