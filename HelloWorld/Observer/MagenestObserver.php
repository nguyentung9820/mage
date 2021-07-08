<?php
namespace Magenest\HelloWorld\Observer;
use Magento\Framework\Event\ObserverInterface;
class MagenestObserver implements ObserverInterface
{
	/** @var \Psr\Log\LoggerInterface $logger */
	protected $logger;
	public function __construct(\Psr\Log\LoggerInterface $logger)
	{
		$this->logger = $logger;
	}
	public function execute(\Magento\Framework\Event\Observer $observer)
	{	
		// die();
		$test = $observer->getEvent()->getProduct();
		// var_dump($test);
		$test = array_replace($test,['name' => 'ok']);
		// var_dump($ok);
		// $observer->setName($ok);
		var_dump($test);
		// foreach($test as $hi){
		// 	echo $hi;
		// }
		$this->logger->debug('Registered');
	}
}