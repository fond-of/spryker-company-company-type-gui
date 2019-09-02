<?php

namespace FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\Plugin\CompanyGuiExtension;

use Spryker\Zed\CompanyGuiExtension\Dependency\Plugin\CompanyFormExpanderPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CompanyCompanyTypeGui\Communication\CompanyCompanyTypeGuiCommunicationFactory getFactory()
 */
class CompanyTypeCompanyFormExpanderPlugin extends AbstractPlugin implements CompanyFormExpanderPluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder): void
    {
        $companyCompanyTypeFormDataProvider = $this->getFactory()->createCompanyCompanyTypeFormDataProvider();
        $companyCompanyTypeForm = $this->getFactory()->createCompanyCompanyTypeForm();

        $companyCompanyTypeForm->buildForm($builder, $companyCompanyTypeFormDataProvider->getOptions());
    }
}
