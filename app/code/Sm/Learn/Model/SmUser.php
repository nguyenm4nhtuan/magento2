<?php

namespace Sm\Learn\Model;

use \Magento\Framework\Model\AbstractModel;

class SmUser extends AbstractModel
{


    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init('Sm\Learn\Model\ResourceModel\SmUser');
    }


}

