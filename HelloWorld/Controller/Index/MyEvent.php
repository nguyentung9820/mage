<?php
namespace Magenest\HelloWorld\Controller\Index;
use Magento\Framework\App\Action\Action;
class MyEvent extends Action
    {
/** @var \Magento\Framework\View\Result\PageFactory */
    protected $resultPageFactory;
    

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
            $this->resultPageFactory = $resultPageFactory;
            parent::__construct($context);
    }
 
    /**
    * Index action
    *
    * @return $this
    */
    public function execute()
    {
        $product = ['name' => 'ps5'];

        $resultPage = $this->resultPageFactory->create();
        $this->_eventManager->dispatch('magenest_event', ['product' => $product]);
        return $resultPage; 
   
    }
}