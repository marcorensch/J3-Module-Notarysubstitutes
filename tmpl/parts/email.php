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

if(property_exists($col,'button') && $col->button){
    $btnCls = 'uk-button uk-button-'. $col->buttonsize . ' uk-button-'.$col->buttonstyle;
    if($col->icon_button){
        $lbl = '<i uk-icon="icon: mail" class="uk-preserve-width"></i>';
    }else {
        $lbl = \Joomla\CMS\Language\Text::_('SEND_EMAIL_TO_NOTAR');
    }
}else{
    $btnCls = '';
    $lbl = $sub->$active_column;
}
$html = '<a class="uk-text-nowrap  '.$btnCls.'" href="mailto:'.$sub->$active_column.'">' .$lbl. '</a>';
if(strlen($sub->$active_column)):
    ?>
    <span class="sub-<?php echo $col->column;?>"><?php echo $html;?></span>
<?php endif;?>
