<?php
namespace AsfalothDe\CePageTeaserBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use AsfalothDe\CePageTeaserBundle\CePageTeaserBundle;

/**
 * Class Plugin
 *
 * @package AsfalothDe\CePageTeaser\ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(CePageTeaserBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
