<?php

namespace FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication;

use FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Form\CompanyCompanyTypeForm;
use FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Form\DataProvider\CompanyCompanyTypeFormDataProvider;
use FondOfSpryker\Zed\CompanyCompanyTypeGui\CompanyCompanyTypeGuiDependencyProvider;
use FondOfSpryker\Zed\CompanyCompanyTypeGui\Dependency\Facade\CompanyCompanyTypeGuiToCompanyTypeFacadeInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class CompanyCompanyTypeGuiCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyCompanyTypeGui\Dependency\Facade\CompanyCompanyTypeGuiToCompanyTypeFacadeInterface
     */
    protected function getCompanyTypeFacade(): CompanyCompanyTypeGuiToCompanyTypeFacadeInterface
    {
        return $this->getProvidedDependency(CompanyCompanyTypeGuiDependencyProvider::FACADE_COMPANY_TYPE);
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Form\DataProvider\CompanyCompanyTypeFormDataProvider
     */
    public function createCompanyCompanyTypeFormDataProvider(): CompanyCompanyTypeFormDataProvider
    {
        return new CompanyCompanyTypeFormDataProvider($this->getCompanyTypeFacade());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Form\CompanyCompanyTypeForm
     */
    public function createCompanyCompanyTypeForm(): CompanyCompanyTypeForm
    {
        return new CompanyCompanyTypeForm();
    }
}
