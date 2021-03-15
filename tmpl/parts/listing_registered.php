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

if(strlen($sub->$active_column)):
    $active_column = $col->column;
    $date = HtmlHelper::date($sub->$active_column, 'd.m.Y');
?>
    <span class="sub-<?php echo $col->column;?>"><?php echo $date;?></span>
<?php endif;?>
