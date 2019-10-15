<?php

namespace PortoSpire\SuiteCRMClient;

/**
 * The configuration provider for the PortoSpireSuiteCRMClient module
 *
 */
class ConfigProvider
{

    const VERSION = "0.0.4";
    
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates' => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies(): array
    {
        return [
            'factories' => [
                PortoSpire\SuiteCRMClient\Servics\SuiteCrm::class => PortoSpire\SuiteCRMClient\Service\SuiteCrmFactory::class,
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates(): array
    {
        return [
            'paths' => [
            ],
        ];
    }

}