<?php
/**
 * @package    List of Notars Module
 *
 * @author     nx-designs | Marco Rensch <support@nx-designs.ch>
 * @copyright  Copyright© 2021 by nx-designs
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.nx-designs.ch
 */

use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die;

?>

<div class="sub-name-comb">
    <span class="sub-name"><?php echo $sub->name;?></span><br>
    <span class="sub-street"><?php echo $sub->street;?></span><br>
    <span class="sub-zip"><?php echo $sub->zip;?></span>&nbsp;<span class="notar-town"><?php echo $sub->town;?></span>
</div>
