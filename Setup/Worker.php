<?php

//namespace Plugin\GridExample\Setup;
namespace Plugin\GridExample\Setup;

class Worker extends \Ip\SetupWorker
{

    public function activate()
    {
        $sql = '
        CREATE TABLE IF NOT EXISTS
           ' . ipTable('gridExample') . '
        (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `personOrder` double,
        `FirstName` varchar(255),
        `LastName` varchar(255),
        `Sex` varchar(255),
        `DateModified` date,
        `Phone` varchar(255) ,
        `Email` varchar(255) ,
        `Url` varchar(255),
        `Comment` text,
        `Enabled` boolean,
        `cv` varchar(255),
        PRIMARY KEY (`id`)
        )';

        ipDb()->execute($sql);

    }

    public function deactivate()
    {

    }

    public function remove()
    {

    }

}
