<?php
 
namespace Magenest\Movie\Model;
 
class Actor extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Magenest\Movie\Model\ResourceModel\Actor');
        
    }
}