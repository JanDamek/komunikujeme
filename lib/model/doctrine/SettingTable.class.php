<?php

/**
 * SettingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SettingTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SettingTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Setting');
    }
}