<?php
/**
 * @package    nm_substitutes
 *
 * @author     marcorensch <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Date\Date;

defined('_JEXEC') or die;

class ModNmSubstitutesHelper{
    public static function getActiveSubstitutes($params){
        $date = Date::getInstance();
        $timezone = Factory::getUser()->getTimezone();
        $date->setTimezone($timezone);

        $sorting = $params->get('sort_by','a.name') . ' ' . $params->get('sort_dir','ASC');

        $db = Factory::getDbo();

        $query = $db->getQuery(true);

        $query->select(
            array('a.*')
        )
            ->select($db->quoteName(
                array('b.title','b.firstname','b.lastname','b.street','b.zip','b.town','b.company'),
                array('n_title','n_firstname','n_lastname','n_street','n_zip','n_town','n_company')
            ));
        $query->from($db->quoteName('#__notarmanager_notary_substitute','a'));
        $query->join('INNER', $db->quoteName('#__notarmanager_notar', 'b') . ' ON ' . $db->quoteName('a.notar') . ' = ' . $db->quoteName('b.id'));
        $query->where(
            [
                $db->quoteName('a.published') . ' = 1',
                $db->quoteName('a.listing_registered') . ' <= ' . $db->quote($date->toSQL())
            ]
        )
            ->andWhere(
                [
                    $db->quoteName('a.listing_cancelled') . ' = ' . $db->quote('0000-00-00 00:00:00') ,
                    $db->quoteName('a.listing_cancelled') . ' > ' . $db->quote($date->toSQL())
                ]
            );

        $query->order($sorting);

        if($params->get('debug-query',0)) echo '<pre>' . var_export($query->dump(),1) . '</pre>';
        if($params->get('debug',0)) echo '<pre>' . var_export($sorting,1) . '</pre>';
        $db->setQuery($query);
        $results = $db->loadObjectList();

        if($params->get('debug',0)) echo '<pre>' . var_export($results,1) . '</pre>';


        return $results;
    }

    public static function getLastChange($subs){
        // Get last modified
        usort($subs, function($a, $b) {return strcmp($a->created, $b->created);});
        $lastChange = $subs[0]->created;
        // Check for modifications
        usort($subs, function($a, $b) {return strcmp($a->modified, $b->modified);});
        if($subs[0]->modified > $lastChange){
            $lastChange = $subs[0]->modified;
        }

        // and sort it back as needed
        //usort($notars, function($a, $b) {return strcmp($a->name, $b->name);});


        return $lastChange;
    }

}
