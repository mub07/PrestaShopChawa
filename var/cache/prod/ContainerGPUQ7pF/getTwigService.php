<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

$a = new \Twig\Loader\ChainLoader();

$b = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
$b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Product'), 'Product');
$b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm'), 'Twig');
$b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Common'), 'Common');
$b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters'), 'AdvancedParameters');
$b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters'), 'ShopParameters');
$b->addPath((\dirname(__DIR__, 4).'/app/../modules'), 'Modules');
$b->addPath((\dirname(__DIR__, 4).'/mails/themes'), 'MailThemes');
$b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views'), 'PrestaShopCore');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
$b->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
$b->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
$b->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
$b->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Bundle/Resources/views'), 'ApiPlatform');
$b->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Bundle/Resources/views'), '!ApiPlatform');
$b->addPath((\dirname(__DIR__, 4).'/templates/bundles/PrestaShopBundle'), 'PrestaShop');
$b->addPath((\dirname(__DIR__, 4).'/src/PrestaShopBundle/Resources/views'), 'PrestaShop');
$b->addPath((\dirname(__DIR__, 4).'/src/PrestaShopBundle/Resources/views'), '!PrestaShop');
$b->addPath((\dirname(__DIR__, 4).'/templates'));
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Email'), 'email');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Email'), '!email');
$b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

$a->addLoader(($this->services['prestashop.twig.modules.loader'] ?? $this->load('getPrestashop_Twig_Modules_LoaderService.php')));
$a->addLoader($b);

$this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'debug' => false, 'strict_variables' => false, 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

$c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
$d = new \Symfony\Bridge\Twig\AppVariable();
$d->setEnvironment('prod');
$d->setDebug(false);
if ($this->has('security.token_storage')) {
    $d->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
}
if ($this->has('request_stack')) {
    $d->setRequestStack($c);
}

$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('8.1.1', '%s?%s'), new \Symfony\Component\Asset\Context\RequestStackContext($c, '', false)), [])));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
$instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->load('getTwig_Extension_RoutingService.php')));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
$instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
$instance->addExtension(new \PrestaShopBundle\Twig\LocaleExtension(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->date_format_lite));
$instance->addExtension(($this->services['prestashop.twig.extension.stringloader'] ?? ($this->services['prestashop.twig.extension.stringloader'] = new \Twig\Extension\StringLoaderExtension())));
$instance->addExtension(($this->services['prestashop.twig.extension.layout'] ?? $this->load('getPrestashop_Twig_Extension_LayoutService.php')));
$instance->addExtension(($this->services['prestashop.twig.extension.translation'] ?? $this->load('getPrestashop_Twig_Extension_TranslationService.php')));
$instance->addExtension(($this->services['prestashop.twig.extension.data_formatter'] ?? ($this->services['prestashop.twig.extension.data_formatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension())));
$instance->addExtension(($this->services['prestashop.twig.extension.hook'] ?? $this->load('getPrestashop_Twig_Extension_HookService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.column'] ?? $this->load('getPrestashop_Bundle_Twig_Extension_ColumnService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.documentation_link_provider_extension'] ?? $this->load('getPrestashop_Bundle_Twig_Extension_DocumentationLinkProviderExtensionService.php')));
$instance->addExtension(($this->services['prestashop.twig.extension.context_iso_code_provider_extension'] ?? $this->load('getPrestashop_Twig_Extension_ContextIsoCodeProviderExtensionService.php')));
$instance->addExtension(($this->services['prestashop.twig.extension.path_with_back_url_extension'] ?? $this->load('getPrestashop_Twig_Extension_PathWithBackUrlExtensionService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.color_brightness_calculator_extension'] ?? $this->load('getPrestashop_Bundle_Twig_Extension_ColorBrightnessCalculatorExtensionService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.js_router_metadata_extension'] ?? $this->load('getPrestashop_Bundle_Twig_Extension_JsRouterMetadataExtensionService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.localization_extension'] ?? $this->load('getPrestashop_Bundle_Twig_Extension_LocalizationExtensionService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.number_extension'] ?? ($this->services['prestashop.bundle.twig.extension.number_extension'] = new \PrestaShopBundle\Twig\Extension\NumberExtension())));
$instance->addExtension(($this->services['prestashop.twig.extension.multistore_components_extension'] ?? $this->load('getPrestashop_Twig_Extension_MultistoreComponentsExtensionService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.multistore_url'] ?? $this->load('getPrestashop_Bundle_Twig_Extension_MultistoreUrlService.php')));
$instance->addExtension(($this->services['prestashop.bundle.twig.extension.entity_search_extension'] ?? ($this->services['prestashop.bundle.twig.extension.entity_search_extension'] = new \PrestaShopBundle\Twig\Extension\EntitySearchExtension())));
$instance->addExtension(new \PrestaShop\TranslationToolsBundle\Twig\Extension\TranslationExtension());
$instance->addGlobal('app', $d);
$instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
    'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
    'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
], [
    'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
    'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
    'Symfony\\Component\\Form\\FormRenderer' => '?',
])));
$instance->addGlobal('webpack_server', false);
$instance->addGlobal('multistore_field_prefix', 'multistore_');
$instance->addGlobal('modify_all_shops_prefix', 'modify_all_shops_');
$instance->addGlobal('disabling_switch_prefix', 'disabling_switch_');
(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

return $instance;
