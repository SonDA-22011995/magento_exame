<?php
namespace Sale\BigSale\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class ShowDetail extends Template
{

    public function __construct(Context $context,      
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {        
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
	}
	public function gettextdata()
	{
		# code...
		return $this->getText();
	}

    // public function getNumoneData()
    // {
    //     return $this->getNumone();
    // }

    // public function getNumtwoData()
    // {
    //     return $this->getNumtwo();
    // }
}
?>