<?php
namespace Magenest\HelloWorld\Plugin\Catalog;
class UpdateName
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = "name of product";
        return $result;
    }
}