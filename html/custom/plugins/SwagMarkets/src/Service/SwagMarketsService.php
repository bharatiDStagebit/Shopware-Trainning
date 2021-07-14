<?php


namespace Swag\Markets\Service;

use Doctrine\DBAL\Connection;

class SwagMarketsService
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return mixed[]
     */
    public function getVariationsUsedByProducts()
    {
        $queryBuilder = $this->connection->createQueryBuilder();

        $queryBuilder
            ->select('LOWER(HEX(pg.id)) AS id, pgt.name AS name, LOWER(HEX(l.translation_code_id)) AS language')
            ->from('product_option', 'po')
            ->leftJoin('po', 'product', 'p', 'p.id = po.product_id')
            ->leftJoin('po', 'property_group_option', 'pgo', 'po.property_group_option_id = pgo.id')
            ->leftJoin('pgo', 'property_group', 'pg', 'pgo.property_group_id = pg.id')
            ->leftJoin('pg', 'property_group_translation', 'pgt', 'pg.id = pgt.property_group_id')
            ->leftJoin('pgt', 'language', 'l', 'pgt.language_id = l.id')
            ->addGroupBy('pg.id')
            ->addGroupBy('pgt.name');

        return $queryBuilder->execute()->fetchAll(2);
    }
}
