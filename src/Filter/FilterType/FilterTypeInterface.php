<?php

namespace Lle\EasyAdminPlusBundle\Filter\FilterType;

use Symfony\Component\HttpFoundation\Request;

/**
 * FilterTypeInterface
 */
interface FilterTypeInterface
{

    public function init($columnName, $label , $alias = 'entity');
    public function configure(array $config = []);

    /**
     * @param array  $data     Data
     * @param string $uniqueId The identifier
     */
    public function apply($query_builder);

    /**
     * @return string
     */
    public function getTemplate();
    
    public function getStateTemplate();

    public function updateDataFromRequest($request);

}
