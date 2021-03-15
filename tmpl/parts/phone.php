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

$active_column = $col->column;
if(strlen($sub->$active_column)):
    $html = '<a class="uk-text-nowrap" href="tel:'.$sub->$active_column.'">' .$sub->$active_column. '</a>';

    ?>
    <span class="sub-<?php echo $col->column;?>"><?php echo $html;?></span>
<?php endif;?>
