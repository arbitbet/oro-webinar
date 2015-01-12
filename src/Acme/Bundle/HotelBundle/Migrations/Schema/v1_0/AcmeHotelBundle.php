<?php

namespace Acme\Bundle\HotelBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class AcmeHotelBundle implements Migration
{
    /**
     * @inheritdoc
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /** Generate table acme_hotel **/
        $table = $schema->createTable('acme_hotel');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->setPrimaryKey(['id']);
        $table->addIndex(['name'], 'hotel_name_idx', []);
        /** End of generate table acme_hotel **/
    }
}
