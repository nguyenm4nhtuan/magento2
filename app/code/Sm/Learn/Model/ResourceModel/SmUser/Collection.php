<?php

namespace Sm\Learn\Model\ResourceModel\SmUser;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Sm\Learn\Model\SmUser', 'Sm\Learn\Model\ResourceModel\SmUser');
    }
}
