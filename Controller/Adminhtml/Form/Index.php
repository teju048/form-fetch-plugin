<?php

namespace Vendor\Module\Controller\Adminhtml\Form;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    // Constructor to inject dependencies
    public function __construct(
        Action\Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    // Execute the controller action to show the form
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }

    // Check if user is allowed to access this page
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Vendor_Module::form_menu'); // Replace with your menu path
    }
}
