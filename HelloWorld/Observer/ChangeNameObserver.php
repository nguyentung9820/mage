<?php
namespace Magenest\HelloWorld\Observer;
use Magento\Framework\Event\Observer;

use Magento\Framework\Event\ObserverInterface;
class ChangeNameObserver implements ObserverInterface
{
	/** @var \Psr\Log\LoggerInterface $logger */
	protected $logger;
	protected $_customerInterface;
	public function __construct(
		\Psr\Log\LoggerInterface $logger,
		\Magento\Customer\Api\Data\CustomerInterface $customerInterface	)
	{
		$this->_customerInterface = $customerInterface;
		$this->logger = $logger;
	}
	
	public function execute(\Magento\Framework\Event\Observer $observer)
	{	$object = $observer->getData('customer');
		// var_dump($object);
		// die();
		$object->setData('firstname','magenest');
		$observer->setData('customer', $object);
		
	}
}