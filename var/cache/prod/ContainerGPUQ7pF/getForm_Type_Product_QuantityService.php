<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.quantity' shared service.

@trigger_error('The "form.type.product.quantity" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

return $this->services['form.type.product.quantity'] = new \PrestaShopBundle\Form\Admin\Product\ProductQuantity(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
