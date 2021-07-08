<?php
namespace Magenest\HelloWorld\Controller\Index;
class Subscription extends \Magento\Framework\App\Action\Action {
    public function execute() {
    $subscription = $this->_objectManager->create('Magenest\HelloWorld\Model\Subscription');
    $subscription->setFirstname('tung');
    $subscription->setLastname('nguyen');
    $subscription->setEmail('nguyensontung@example.com');
    $subscription->setMessage('A short message to test');
    $subscription->save();
    $this->getResponse()->setBody('success');}
}
