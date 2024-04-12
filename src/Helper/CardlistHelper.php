<?php

namespace NPEU\Module\Cardlist\Site\Helper;

use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Factory;
use Joomla\Database\DatabaseAwareInterface;
use Joomla\Database\DatabaseAwareTrait;
use Joomla\Registry\Registry;

defined('_JEXEC') or die;

/* This module doesn't require a helper but leaving this here in case that changes. */

/**
 * Helper for mod_cardlist
 *
 * @since  1.5
 */
class CardlistHelper implements DatabaseAwareInterface
{
    use DatabaseAwareTrait;


    /*public function getStuff(Registry $config, SiteApplication $app): array
    {
        if (!$app instanceof SiteApplication) {
            return [];
        }
        $db = $this->getDatabase();

        // Do some database stuff here.

        return ["Hello, world."];
    }*/

}
