<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.modules_provider' shared service.

return $this->services['prestashop.translation.modules_provider'] = new \PrestaShopBundle\Translation\Provider\ModulesProvider(($this->services['prestashop.translation.database_loader'] ?? $this->load('getPrestashop_Translation_DatabaseLoaderService.php')), (\dirname(__DIR__, 4).'/app/../translations'));
