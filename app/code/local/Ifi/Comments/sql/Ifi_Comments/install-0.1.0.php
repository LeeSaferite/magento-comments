<?php

/**
 * Install script
 *
 *Table data:
 *
 * @text         comment
 * @int          comment_id, PRIMARY
 * @int          order_id
 * @int          posater_id
 * @timestamp    timestamp
 */

$installer = $this;
$installer->startSetup();
$installer->run(
    "
	CREATE TABLE {$installer->getTable('comments/comment')} (
	comment text,
	comment_id int NOT NULL auto_increment,
	order_id int,
	poster_id int,
	timestamp timestamp NOT NULL default CURRENT_TIMESTAMP,
	PRIMARY KEY (comment_id)
	) ENGINE = InnoDB DEFAULT CHARSET=utf8;
	"
);
$installer->endSetup();
