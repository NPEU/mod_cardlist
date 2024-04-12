<?php

namespace NPEU\Module\Cardlist\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

/**
 * Dispatcher class for mod_cardlist
 *
 * @since  4.4.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Returns the layout data.
     *
     * @return  array
     */
    protected function getLayoutData(): array
    {
        $data   = parent::getLayoutData();

        /*
        This module doesn't require any extra data but leaving this here in case that changes.
        $params = $data['params'];
        $data['stuff'] = $this->getHelperFactory()
            ->getHelper('CardlistHelper')
            ->getStuff($data['params'], $this->getApplication());*/

        return $data;
    }
}
