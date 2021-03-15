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

<div class="sub-notar-name">
    <span class="sub-notar-title"><?php echo $sub->n_title;?> </span>
    <span class="sub-notar-firstname"><?php echo $sub->n_firstname;?> </span>
    <span class="sub-notar-lastname"><?php echo $sub->n_lastname;?></span><br>
    <?php if (strlen($sub->n_company)) { echo '<span class="sub-notar-company">'.$sub->n_company.'</span><br>';} ?>
    <span class="sub-notar-street"><?php echo $sub->n_street;?></span><br>
    <span class="sub-notar-zip"><?php echo $sub->n_zip;?></span>&nbsp;<span class="notar-town"><?php echo $sub->n_town;?></span>
</div>
