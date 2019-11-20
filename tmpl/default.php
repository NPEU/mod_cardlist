<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_cardlist
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;


$doc = JFactory::getDocument();

?>

<?php if ($params->get('show_title')): ?>
<p><?php echo $params->get('title'); ?></p>
<?php endif; ?>
<?php if ($params->get('thing')): ?>
<p><?php echo $params->get('thing'); ?></p>
<?php endif; ?>
