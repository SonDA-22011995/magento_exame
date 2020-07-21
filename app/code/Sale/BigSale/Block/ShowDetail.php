<?php 
namespace Sale\BigSale\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\Product;


class ShowDetail extends Template {
	private $abstractFrontend;
	private $product;

	
    public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Catalog\Model\Product $product,
		array $data =[]
		)
	{
		parent::__construct($context, $data);
		$this->product = $product;
	}
	public function getAttribute(int $attribute_code)
	{
		# code...
		$text = $this->product->getAttributeText($attribute_code);
		return $text;

	}
	
	
   


}




?>