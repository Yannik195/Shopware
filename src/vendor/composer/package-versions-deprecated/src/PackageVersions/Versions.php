<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'shopware/production';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aws/aws-sdk-php' => '3.133.6@cd7bd2fdd159146ef6c7eeb90b73fae4fd11da57',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'composer/ca-bundle' => '1.2.10@9fdb22c2e97a614657716178093cd1da90a64aa8',
  'composer/composer' => '2.0.14@92b2ccbef65292ba9f2004271ef47c7231e2eed5',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'composer/semver' => '3.2.5@31f3ea725711245195f62e54ffa402d8ef2fdba9',
  'composer/spdx-licenses' => '1.5.5@de30328a7af8680efdc03e396aad24befd513200',
  'composer/xdebug-handler' => '2.0.2@84674dd3a7575ba617f5a76d7e9e29a7d3891339',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'dompdf/dompdf' => 'v1.0.2@8768448244967a46d6e67b891d30878e0e15d25c',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'elasticsearch/elasticsearch' => 'v7.11.0@277cd5e182827c59c23e146a836a30470c0f879d',
  'enqueue/amqp-tools' => '0.10.9@1a2bdcacf0b56c677df965544baa1801d8dd95e1',
  'enqueue/dbal' => '0.10.11@cd98c02c951978eaf5d1e226fbef29bd7723484b',
  'enqueue/dsn' => '0.10.8@729fabaae6b24189d14598033b174bd72e825e9a',
  'enqueue/enqueue' => '0.10.9@4bc475f9ebd447951eecc45063a135c089f3f8a0',
  'enqueue/enqueue-bundle' => '0.10.12@579240bf58e340a32ed7d6b6b8d7f7f127532262',
  'enqueue/null' => '0.10.9@25614c0b058a8535766b018289a69f288dca97a8',
  'ezimuel/guzzlestreams' => '3.0.1@abe3791d231167f14eb80d413420d1eab91163a8',
  'ezimuel/ringphp' => '1.1.2@0b78f89d8e0bb9e380046c31adfa40347e9f663b',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'firebase/php-jwt' => 'v5.4.0@d2113d9b2e0e349796e72d2a63cf9319100382d2',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'google/auth' => 'v1.16.0@c747738d2dd450f541f09f26510198fbedd1c8a0',
  'google/cloud-core' => 'v1.42.2@f3fff3ca4af92c87eb824e5c98aaf003523204a2',
  'google/cloud-storage' => 'v1.17.0@626e910530f0b9463a15563f697a66f1cfbd6369',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'laminas/laminas-code' => '4.4.2@54251ab2b16c41c6980387839496b235f5f6e10b',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.4@71cf170102c8371ccd933fa4df6252086d144de6',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.4@f3ad69181b8afed2c9edf7be5a2918144ff4ea32',
  'league/flysystem-aws-s3-v3' => '1.0.29@4e25cc0582a36a786c31115e419c6e40498f6972',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'league/oauth2-server' => '8.2.4@622eaa1f28eb4a2dea0cfc7e4f5280fac794e83c',
  'marc1706/fast-image-size' => 'v1.1.6@3a3a2b036be20f43fa06ce00dfa754df503e6684',
  'monolog/monolog' => '2.3.2@71312564759a7db5b789296369c1a264efc43aad',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'nyholm/psr7' => '1.4.0@23ae1f00fbc6a886cbe3062ca682391b9cc7c37b',
  'ongr/elasticsearch-dsl' => 'v7.2.1@8c75b819a32a422c393272295fe5e81e8cbd7ec7',
  'padaliyajay/php-autoprefixer' => '1.3@f05f374f0c1e463db62209613f52b38bf4b52430',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'queue-interop/amqp-interop' => '0.8.2@a893c72832784ca846fcc1bd86274a6a449a1ab7',
  'queue-interop/queue-interop' => '0.8.1@117043fd38490f8b5516622cd4b697b33a89ce2b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.1@eaca1dc1054ddd10cbd83c1461907bee6fb528fa',
  'ramsey/uuid' => '4.2.1@fe665a03df4f056aa65af552a96e1976df8c8dae',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'rize/uri-template' => '0.3.3@6e0b97e00e0f36c652dd3c37b194ef07de669b82',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'scssphp/scssphp' => '1.0.6@5b3c9d704950d8f9637f5110c36c281ec47dc13c',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'sensio/framework-extra-bundle' => 'v5.5.6@b49f079d8a87a6e6dd434062085ff5a132af466b',
  'shopware/administration' => '6.4.3.1@3ae38abad294682bae0d6fdc682624147f5f136c',
  'shopware/core' => '6.4.3.1@7ffce13d7366e8585c32362b103a8ef4169470d5',
  'shopware/elasticsearch' => '6.4.3.1@4b317ddc3499e925d8254409b8dd72970bf9df49',
  'shopware/recovery' => '6.4.3.1@a8cbc2eb4dbbc8c18f22a81965a5045354f3b485',
  'shopware/storefront' => '6.4.3.1@7ed9b98f87f2828d93e1ae0b3561957e932eeecd',
  'sroze/messenger-enqueue-transport' => '0.4.0@a698418e702ecb29aa51ee2e40e40c90798057f0',
  'superbalist/flysystem-google-storage' => '7.2.2@87e2f450c0e4b5200fef9ffe6863068cc873d734',
  'symfony/amqp-messenger' => 'v5.3.4@7444d23daba4551f550d4a19c4d10c6eefa87615',
  'symfony/asset' => 'v5.3.4@9bd222a8fdd13ecca91384e403247103198f80a1',
  'symfony/cache' => 'v5.3.4@944db6004fc374fbe032d18e07cce51cc4e1e661',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.3.4@4268f3059c904c61636275182707f81645517a37',
  'symfony/console' => 'v5.3.6@51b71afd6d2dc8f5063199357b9880cea8d8bfe2',
  'symfony/debug-bundle' => 'v5.3.4@356c7d2acb6bc93b1c091255068ccfb9ad55a3e0',
  'symfony/dependency-injection' => 'v5.3.4@5a825e4b386066167a8b55487091cb62beec74c2',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-messenger' => 'v5.3.4@f67e8f9f7d0e14d079c655c4c51440c388238e76',
  'symfony/dotenv' => 'v5.3.6@b6d44663cff8c9880ee64d232870293a11e14cd6',
  'symfony/error-handler' => 'v5.3.4@281f6c4660bcf5844bb0346fe3a4664722fe4c73',
  'symfony/event-dispatcher' => 'v5.3.4@f2fd2208157553874560f3645d4594303058c4bd',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.4@17f50e06018baec41551a71a15731287dbaab186',
  'symfony/framework-bundle' => 'v5.3.4@2c5ed14a5992a2d04dfdb238a5f9589bab0a68d8',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.6@a8388f7b7054a7401997008ce9cd8c6b0ab7ac75',
  'symfony/http-kernel' => 'v5.3.6@60030f209018356b3b553b9dbd84ad2071c1b7e0',
  'symfony/inflector' => 'v5.3.4@b4a221138afa358f0833ec98de613108b6d25acf',
  'symfony/intl' => 'v5.3.4@f1d1420771b3a94fcf2fda06728c61eba5de4b90',
  'symfony/mailer' => 'v5.3.4@c1f83da2296741110be35dd779f2a9e412cec466',
  'symfony/messenger' => 'v5.3.4@1500e5be63724f90fb9fb55f78ebfb46b3305ede',
  'symfony/mime' => 'v5.3.4@633e4e8afe9e529e5599d71238849a4218dd497b',
  'symfony/monolog-bridge' => 'v5.3.4@a0d881165b902a04f41e873426aa52a068064ac4',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v5.3.4@a603e5701bd6e305cfc777a8b50bf081ef73105e',
  'symfony/password-hasher' => 'v5.3.4@61dd1e90fa0ebf6f4982787b1e033a9606357d7e',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.3.4@d16634ee55b895bd85ec714dadc58e4428ecf030',
  'symfony/property-access' => 'v5.3.4@098681253076af7070df7d9debe5f75733eea189',
  'symfony/property-info' => 'v5.3.4@0f42009150679a7a256eb6ee106401af5d974ed2',
  'symfony/proxy-manager-bridge' => 'v5.3.4@76e61f33f6a34a340bf6e02211214f466e8e1dba',
  'symfony/psr-http-message-bridge' => 'v2.1.0@81db2d4ae86e9f0049828d9343a72b9523884e5d',
  'symfony/redis-messenger' => 'v5.3.4@1eed27264bc2b965c37460bb2e36b602ed6ba694',
  'symfony/routing' => 'v5.3.4@0a35d2f57d73c46ab6d042ced783b81d09a624c4',
  'symfony/security-core' => 'v5.3.6@69b9a6a62d8914f10010646619bcd4485a71f119',
  'symfony/security-csrf' => 'v5.3.4@94b533195cf7fb21f3fae8ce349861c6401d969e',
  'symfony/serializer' => 'v5.3.4@f04e368e3cb35948550c7e95cc8918cb7e761c0c',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'symfony/translation' => 'v5.3.4@d89ad7292932c2699cbe4af98d72c5c6bbc504c1',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.3.4@587c45ef49256279502b4a29146b9e87ad23426f',
  'symfony/twig-bundle' => 'v5.3.4@345965b40c1847ebdbb2ab0eb98c71a98a5e167b',
  'symfony/validator' => 'v5.3.6@4a87a29d0ebca780a90b7aaba02bc04f5678eb36',
  'symfony/var-dumper' => 'v5.3.6@3dd8ddd1e260e58ecc61bb78da3b6584b3bfcba0',
  'symfony/var-exporter' => 'v5.3.4@b7898a65fc91e7c41de7a88c7db9aee9c0d432f0',
  'symfony/yaml' => 'v5.3.6@4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'twig/intl-extra' => 'v3.3.0@919e8f945c30bd3efeb6a4d79722cda538116658',
  'twig/string-extra' => 'v3.3.0@8a8bb5631e8e27573fae741211b9c752b9b0b428',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'zircote/swagger-php' => '3.1.0@9d172471e56433b5c7061006b9a766f262a3edfd',
  'bheller/images-generator' => '1.0.1@50b61fe1dcf1b72b6a830debec4db22afd1e8ee1',
  'dms/phpunit-arraysubset-asserts' => 'v0.2.1@8e3673a70019a60df484e36fc3271d63cbdc40ea',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'johnkary/phpunit-speedtrap' => 'v3.3.0@9ba81d42676da31366c85d3ff8c10a8352d02030',
  'league/flysystem-memory' => '1.0.2@d0e87477c32e29f999b4de05e64c1adcddb51757',
  'mbezhanov/faker-provider-collection' => '1.2.1@076c00f0d438f12ec7da0fdaadbfb7940913763e',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'opis/json-schema' => '1.0.19@1bcb3582881d0692d002537a4472964280f71313',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.8@191768ccd5c85513b4068bdbe99bb6390c7d54fb',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'smalot/pdfparser' => 'v0.14.0@ec72a99028ba5e21a0acad92047b85e128cbf81f',
  'symfony/browser-kit' => 'v5.3.4@c1e3f64fcc631c96e2c5843b666db66679ced11c',
  'symfony/dom-crawler' => 'v5.3.4@2dd8890bd01be59a5221999c05ccf0fcafcb354f',
  'symfony/phpunit-bridge' => 'v5.3.4@bc368b765a651424b19f5759953ce2873e7d448b',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/web-profiler-bundle' => 'v5.3.5@95fb24b09551688a09cffac95a2ddbb907833f07',
  'tecnickcom/tcpdf' => '6.4.2@172540dcbfdf8dc983bc2fe78feff48ff7ec1c76',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'shopware/production' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
