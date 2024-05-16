<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_cardlist
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\String\StringHelper;


$doc = Factory::getDocument();
$hx = StringHelper::increment($params->get('header_tag'));
?>
<?php if ($module->showtitle): ?>
<<?php echo $params->get('header_tag'); ?>><?php echo $module->title; ?></<?php echo $params->get('header_tag'); ?>>
<?php endif; ?>

<?php if (!empty($params->get('cards'))) : ?>
<div>
<?php foreach ($params->get('cards') as $card) :

if (!empty($card->link && !empty($card->link_text))) {
    $card->body .= '<p><a href="' . $card->link .'">' . $card->link_text . '</a></p>';
}

$full_link = false;

if (!empty($card->link) && (bool) $params->get('link_full')) {
    $full_link = true;
}

?>
    <div>
    <?php echo $full_link ? '<a href="' . $card->link .'">' : ''; ?>

        <?php if (!empty($card->header_image)) : ?>
        <img src="<?php echo $card->header_image; ?>" alt="<?php echo $card->header_image_alt; ?>">
        <?php endif; ?>

        <<?php echo $hx; ?>><?php echo $card->title; ?></<?php echo $hx; ?>>

        <?php if (!empty($card->body)) : ?>
        <div>
            <?php echo $card->body; ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($card->footer)) : ?>
        <?php echo $card->footer; ?>
        <?php endif; ?>

        <?php if (!empty($card->footer_image)) : ?>
        <img src="<?php echo $card->footer_image; ?>" alt="<?php echo $card->footer_image_alt; ?>">
        <?php endif; ?>

    <?php echo $full_link ? '</a>' : ''; ?>
    </div>
<?php endforeach; ?>
</div>
<?php endif; ?>