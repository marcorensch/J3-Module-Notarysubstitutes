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
<?php
if(strlen($sub->zip)): ?>
    <span class="notar-zip"><?php echo $sub->zip;?></span>&nbsp;
<?php endif; ?>
<?php
if(strlen($sub->town)): ?>
    <span class="notar-town"><?php echo $sub->town;?></span>
<?php endif; ?>
