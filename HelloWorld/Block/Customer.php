<?php
namespace Magenest\HelloWorld\Block;
use Magento\Framework\View\Element\Template;
class Customer extends Template
{
    protected $_customerfactory;
    // public function __construct(
    //     \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerFactory
    //     )
    // {
    //     $this->_customerfactory = $customerFactory;
    // }
    public function getCustomer(){
        // $customer = $this->_customerfactory->create();
        return 'ok';
    }
}