<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit343ce3a37ca6321141df60e6eb5e84bd
{
    public static $files = array (
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        'cc56288302d9df745d97c934d6a6e5f0' => __DIR__ . '/..' . '/topthink/think-queue/src/common.php',
        '6bfa2db14bcd36db12d0b2121e50b8f2' => __DIR__ . '/..' . '/zoujingli/think-library/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\helper\\' => 13,
            'think\\composer\\' => 15,
            'think\\' => 6,
        ),
        'l' => 
        array (
            'library\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'WePay\\' => 6,
            'WeOpen\\' => 7,
            'WeMini\\' => 7,
            'WeChat\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'O' => 
        array (
            'OSS\\' => 4,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'A' => 
        array (
            'AliPay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-queue/src',
        ),
        'library\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/think-library/library',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'WePay\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay',
        ),
        'WeOpen\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen',
        ),
        'WeMini\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini',
            1 => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini',
        ),
        'WeChat\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat',
            1 => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeChat',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'OSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'AliPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay',
        ),
    );

    public static $classMap = array (
        'AliPay\\App' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/App.php',
        'AliPay\\Bill' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/Bill.php',
        'AliPay\\Pos' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/Pos.php',
        'AliPay\\Scan' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/Scan.php',
        'AliPay\\Transfer' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/Transfer.php',
        'AliPay\\Wap' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/Wap.php',
        'AliPay\\Web' => __DIR__ . '/..' . '/zoujingli/wechat-developer/AliPay/Web.php',
        'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/Controller/QrCodeController.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\Configuration' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/DependencyInjection/Configuration.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\EndroidQrCodeExtension' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/DependencyInjection/EndroidQrCodeExtension.php',
        'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/EndroidQrCodeBundle.php',
        'Endroid\\QrCode\\Bundle\\Twig\\Extension\\QrCodeExtension' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/Twig/Extension/QrCodeExtension.php',
        'Endroid\\QrCode\\Exceptions\\DataDoesntExistsException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/DataDoesntExistsException.php',
        'Endroid\\QrCode\\Exceptions\\FreeTypeLibraryMissingException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/FreeTypeLibraryMissingException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionFailedException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageFunctionFailedException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionUnknownException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageFunctionUnknownException.php',
        'Endroid\\QrCode\\Exceptions\\ImageSizeTooLargeException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageSizeTooLargeException.php',
        'Endroid\\QrCode\\Exceptions\\ImageTypeInvalidException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageTypeInvalidException.php',
        'Endroid\\QrCode\\Exceptions\\VersionTooLargeException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/VersionTooLargeException.php',
        'Endroid\\QrCode\\Factory\\QrCodeFactory' => __DIR__ . '/..' . '/endroid/qr-code/src/Factory/QrCodeFactory.php',
        'Endroid\\QrCode\\QrCode' => __DIR__ . '/..' . '/endroid/qr-code/src/QrCode.php',
        'OSS\\Core\\MimeTypes' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/MimeTypes.php',
        'OSS\\Core\\OssException' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssException.php',
        'OSS\\Core\\OssUtil' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssUtil.php',
        'OSS\\Http\\RequestCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore.php',
        'OSS\\Http\\RequestCore_Exception' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore_Exception.php',
        'OSS\\Http\\ResponseCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/ResponseCore.php',
        'OSS\\Model\\BucketInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketInfo.php',
        'OSS\\Model\\BucketListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketListInfo.php',
        'OSS\\Model\\CnameConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CnameConfig.php',
        'OSS\\Model\\CorsConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsConfig.php',
        'OSS\\Model\\CorsRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsRule.php',
        'OSS\\Model\\GetLiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelHistory.php',
        'OSS\\Model\\GetLiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelInfo.php',
        'OSS\\Model\\GetLiveChannelStatus' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelStatus.php',
        'OSS\\Model\\LifecycleAction' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleAction.php',
        'OSS\\Model\\LifecycleConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleConfig.php',
        'OSS\\Model\\LifecycleRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleRule.php',
        'OSS\\Model\\ListMultipartUploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListMultipartUploadInfo.php',
        'OSS\\Model\\ListPartsInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListPartsInfo.php',
        'OSS\\Model\\LiveChannelConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelConfig.php',
        'OSS\\Model\\LiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelHistory.php',
        'OSS\\Model\\LiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelInfo.php',
        'OSS\\Model\\LiveChannelListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelListInfo.php',
        'OSS\\Model\\LoggingConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LoggingConfig.php',
        'OSS\\Model\\ObjectInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectInfo.php',
        'OSS\\Model\\ObjectListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectListInfo.php',
        'OSS\\Model\\PartInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PartInfo.php',
        'OSS\\Model\\PrefixInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PrefixInfo.php',
        'OSS\\Model\\RefererConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/RefererConfig.php',
        'OSS\\Model\\StorageCapacityConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/StorageCapacityConfig.php',
        'OSS\\Model\\UploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/UploadInfo.php',
        'OSS\\Model\\WebsiteConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/WebsiteConfig.php',
        'OSS\\Model\\XmlConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/XmlConfig.php',
        'OSS\\OssClient' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/OssClient.php',
        'OSS\\Result\\AclResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AclResult.php',
        'OSS\\Result\\AppendResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AppendResult.php',
        'OSS\\Result\\BodyResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/BodyResult.php',
        'OSS\\Result\\CallbackResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CallbackResult.php',
        'OSS\\Result\\CopyObjectResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CopyObjectResult.php',
        'OSS\\Result\\DeleteObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/DeleteObjectsResult.php',
        'OSS\\Result\\ExistResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ExistResult.php',
        'OSS\\Result\\GetCnameResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCnameResult.php',
        'OSS\\Result\\GetCorsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCorsResult.php',
        'OSS\\Result\\GetLifecycleResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLifecycleResult.php',
        'OSS\\Result\\GetLiveChannelHistoryResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelHistoryResult.php',
        'OSS\\Result\\GetLiveChannelInfoResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelInfoResult.php',
        'OSS\\Result\\GetLiveChannelStatusResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelStatusResult.php',
        'OSS\\Result\\GetLocationResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLocationResult.php',
        'OSS\\Result\\GetLoggingResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLoggingResult.php',
        'OSS\\Result\\GetRefererResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetRefererResult.php',
        'OSS\\Result\\GetStorageCapacityResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetStorageCapacityResult.php',
        'OSS\\Result\\GetWebsiteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetWebsiteResult.php',
        'OSS\\Result\\HeaderResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/HeaderResult.php',
        'OSS\\Result\\InitiateMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/InitiateMultipartUploadResult.php',
        'OSS\\Result\\ListBucketsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListBucketsResult.php',
        'OSS\\Result\\ListLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListLiveChannelResult.php',
        'OSS\\Result\\ListMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListMultipartUploadResult.php',
        'OSS\\Result\\ListObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListObjectsResult.php',
        'OSS\\Result\\ListPartsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListPartsResult.php',
        'OSS\\Result\\PutLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutLiveChannelResult.php',
        'OSS\\Result\\PutSetDeleteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutSetDeleteResult.php',
        'OSS\\Result\\Result' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/Result.php',
        'OSS\\Result\\SymlinkResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/SymlinkResult.php',
        'OSS\\Result\\UploadPartResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/UploadPartResult.php',
        'Qiniu\\Auth' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Auth.php',
        'Qiniu\\Cdn\\CdnManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Cdn/CdnManager.php',
        'Qiniu\\Config' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Config.php',
        'Qiniu\\Etag' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Etag.php',
        'Qiniu\\Http\\Client' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Client.php',
        'Qiniu\\Http\\Error' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Error.php',
        'Qiniu\\Http\\Request' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Request.php',
        'Qiniu\\Http\\Response' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Response.php',
        'Qiniu\\Processing\\ImageUrlBuilder' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/ImageUrlBuilder.php',
        'Qiniu\\Processing\\Operation' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/Operation.php',
        'Qiniu\\Processing\\PersistentFop' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/PersistentFop.php',
        'Qiniu\\Rtc\\AppClient' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Rtc/AppClient.php',
        'Qiniu\\Storage\\ArgusManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/ArgusManager.php',
        'Qiniu\\Storage\\BucketManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/BucketManager.php',
        'Qiniu\\Storage\\FormUploader' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/FormUploader.php',
        'Qiniu\\Storage\\ResumeUploader' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/ResumeUploader.php',
        'Qiniu\\Storage\\UploadManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/UploadManager.php',
        'Qiniu\\Zone' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Zone.php',
        'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => __DIR__ . '/..' . '/symfony/options-resolver/Debug/OptionsResolverIntrospector.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/AccessException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/ExceptionInterface.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/MissingOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoConfigurationException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Options' => __DIR__ . '/..' . '/symfony/options-resolver/Options.php',
        'Symfony\\Component\\OptionsResolver\\OptionsResolver' => __DIR__ . '/..' . '/symfony/options-resolver/OptionsResolver.php',
        'We' => __DIR__ . '/..' . '/zoujingli/wechat-developer/We.php',
        'WeChat\\Card' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Card.php',
        'WeChat\\Contracts\\BasicAliPay' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/BasicAliPay.php',
        'WeChat\\Contracts\\BasicPushEvent' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/BasicPushEvent.php',
        'WeChat\\Contracts\\BasicWeChat' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/BasicWeChat.php',
        'WeChat\\Contracts\\BasicWePay' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/BasicWePay.php',
        'WeChat\\Contracts\\DataArray' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/DataArray.php',
        'WeChat\\Contracts\\DataError' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/DataError.php',
        'WeChat\\Contracts\\MyCurlFile' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/MyCurlFile.php',
        'WeChat\\Contracts\\Tools' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/Tools.php',
        'WeChat\\Custom' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Custom.php',
        'WeChat\\Exceptions\\InvalidArgumentException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidArgumentException.php',
        'WeChat\\Exceptions\\InvalidDecryptException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidDecryptException.php',
        'WeChat\\Exceptions\\InvalidInstanceException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidInstanceException.php',
        'WeChat\\Exceptions\\InvalidResponseException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidResponseException.php',
        'WeChat\\Exceptions\\LocalCacheException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/LocalCacheException.php',
        'WeChat\\Limit' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Limit.php',
        'WeChat\\Media' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Media.php',
        'WeChat\\Menu' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Menu.php',
        'WeChat\\Mini' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeChat/Mini.php',
        'WeChat\\Oauth' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Oauth.php',
        'WeChat\\Pay' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Pay.php',
        'WeChat\\Product' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Product.php',
        'WeChat\\Qrcode' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Qrcode.php',
        'WeChat\\Receive' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Receive.php',
        'WeChat\\Scan' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Scan.php',
        'WeChat\\Script' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Script.php',
        'WeChat\\Shake' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Shake.php',
        'WeChat\\Tags' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Tags.php',
        'WeChat\\Template' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Template.php',
        'WeChat\\User' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/User.php',
        'WeChat\\Wifi' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Wifi.php',
        'WeMini\\Account' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Account.php',
        'WeMini\\Basic' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Basic.php',
        'WeMini\\Code' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Code.php',
        'WeMini\\Crypt' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Crypt.php',
        'WeMini\\Domain' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Domain.php',
        'WeMini\\Plugs' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Plugs.php',
        'WeMini\\Poi' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Poi.php',
        'WeMini\\Qrcode' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Qrcode.php',
        'WeMini\\Template' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Template.php',
        'WeMini\\Tester' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Tester.php',
        'WeMini\\Total' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Total.php',
        'WeMini\\User' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/User.php',
        'WeOpen\\Login' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen/Login.php',
        'WeOpen\\MiniApp' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen/MiniApp.php',
        'WeOpen\\Service' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen/Service.php',
        'WePay\\Bill' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/Bill.php',
        'WePay\\Coupon' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/Coupon.php',
        'WePay\\Order' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/Order.php',
        'WePay\\Redpack' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/Redpack.php',
        'WePay\\Refund' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/Refund.php',
        'WePay\\Transfers' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/Transfers.php',
        'WePay\\TransfersBank' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WePay/TransfersBank.php',
        'app\\admin\\command\\Update' => __DIR__ . '/../..' . '/application/admin/command/Update.php',
        'app\\admin\\command\\update\\UpdateAdmin' => __DIR__ . '/../..' . '/application/admin/command/update/UpdateAdmin.php',
        'app\\admin\\command\\update\\UpdateAll' => __DIR__ . '/../..' . '/application/admin/command/update/UpdateAll.php',
        'app\\admin\\command\\update\\UpdateConfig' => __DIR__ . '/../..' . '/application/admin/command/update/UpdateConfig.php',
        'app\\admin\\command\\update\\UpdatePlugs' => __DIR__ . '/../..' . '/application/admin/command/update/UpdatePlugs.php',
        'app\\admin\\command\\update\\UpdateService' => __DIR__ . '/../..' . '/application/admin/command/update/UpdateService.php',
        'app\\admin\\command\\update\\UpdateWechat' => __DIR__ . '/../..' . '/application/admin/command/update/UpdateWechat.php',
        'app\\admin\\controller\\Auth' => __DIR__ . '/../..' . '/application/admin/controller/Auth.php',
        'app\\admin\\controller\\Config' => __DIR__ . '/../..' . '/application/admin/controller/Config.php',
        'app\\admin\\controller\\Index' => __DIR__ . '/../..' . '/application/admin/controller/Index.php',
        'app\\admin\\controller\\Login' => __DIR__ . '/../..' . '/application/admin/controller/Login.php',
        'app\\admin\\controller\\Menu' => __DIR__ . '/../..' . '/application/admin/controller/Menu.php',
        'app\\admin\\controller\\Message' => __DIR__ . '/../..' . '/application/admin/controller/Message.php',
        'app\\admin\\controller\\Node' => __DIR__ . '/../..' . '/application/admin/controller/Node.php',
        'app\\admin\\controller\\Queue' => __DIR__ . '/../..' . '/application/admin/controller/Queue.php',
        'app\\admin\\controller\\User' => __DIR__ . '/../..' . '/application/admin/controller/User.php',
        'app\\admin\\controller\\api\\Message' => __DIR__ . '/../..' . '/application/admin/controller/api/Message.php',
        'app\\admin\\controller\\api\\Plugs' => __DIR__ . '/../..' . '/application/admin/controller/api/Plugs.php',
        'app\\admin\\controller\\api\\Update' => __DIR__ . '/../..' . '/application/admin/controller/api/Update.php',
        'app\\admin\\queue\\JobsBase' => __DIR__ . '/../..' . '/application/admin/queue/JobsBase.php',
        'app\\admin\\service\\Auth' => __DIR__ . '/../..' . '/application/admin/service/Auth.php',
        'app\\admin\\service\\Message' => __DIR__ . '/../..' . '/application/admin/service/Message.php',
        'app\\admin\\service\\Queue' => __DIR__ . '/../..' . '/application/admin/service/Queue.php',
        'app\\index\\controller\\Index' => __DIR__ . '/../..' . '/application/index/controller/Index.php',
        'app\\service\\controller\\Config' => __DIR__ . '/../..' . '/application/service/controller/Config.php',
        'app\\service\\controller\\Index' => __DIR__ . '/../..' . '/application/service/controller/Index.php',
        'app\\service\\controller\\api\\Client' => __DIR__ . '/../..' . '/application/service/controller/api/Client.php',
        'app\\service\\controller\\api\\Push' => __DIR__ . '/../..' . '/application/service/controller/api/Push.php',
        'app\\service\\handler\\Publish' => __DIR__ . '/../..' . '/application/service/handler/Publish.php',
        'app\\service\\handler\\Receive' => __DIR__ . '/../..' . '/application/service/handler/Receive.php',
        'app\\service\\handler\\Wechat' => __DIR__ . '/../..' . '/application/service/handler/Wechat.php',
        'app\\service\\logic\\Build' => __DIR__ . '/../..' . '/application/service/logic/Build.php',
        'app\\service\\logic\\Wechat' => __DIR__ . '/../..' . '/application/service/logic/Wechat.php',
        'app\\store\\controller\\Goods' => __DIR__ . '/../..' . '/application/store/controller/Goods.php',
        'app\\store\\controller\\GoodsCate' => __DIR__ . '/../..' . '/application/store/controller/GoodsCate.php',
        'app\\store\\controller\\Member' => __DIR__ . '/../..' . '/application/store/controller/Member.php',
        'app\\store\\controller\\Order' => __DIR__ . '/../..' . '/application/store/controller/Order.php',
        'app\\store\\controller\\Page' => __DIR__ . '/../..' . '/application/store/controller/Page.php',
        'app\\store\\controller\\api\\Goods' => __DIR__ . '/../..' . '/application/store/controller/api/Goods.php',
        'app\\store\\controller\\api\\Member' => __DIR__ . '/../..' . '/application/store/controller/api/Member.php',
        'app\\store\\controller\\api\\Notify' => __DIR__ . '/../..' . '/application/store/controller/api/Notify.php',
        'app\\store\\controller\\api\\Page' => __DIR__ . '/../..' . '/application/store/controller/api/Page.php',
        'app\\store\\controller\\api\\Wechat' => __DIR__ . '/../..' . '/application/store/controller/api/Wechat.php',
        'app\\store\\controller\\api\\member\\Address' => __DIR__ . '/../..' . '/application/store/controller/api/member/Address.php',
        'app\\store\\controller\\api\\member\\Center' => __DIR__ . '/../..' . '/application/store/controller/api/member/Center.php',
        'app\\store\\controller\\api\\member\\Order' => __DIR__ . '/../..' . '/application/store/controller/api/member/Order.php',
        'app\\store\\service\\Goods' => __DIR__ . '/../..' . '/application/store/service/Goods.php',
        'app\\store\\service\\Order' => __DIR__ . '/../..' . '/application/store/service/Order.php',
        'app\\wechat\\command\\Fans' => __DIR__ . '/../..' . '/application/wechat/command/Fans.php',
        'app\\wechat\\command\\fans\\FansAll' => __DIR__ . '/../..' . '/application/wechat/command/fans/FansAll.php',
        'app\\wechat\\command\\fans\\FansBlack' => __DIR__ . '/../..' . '/application/wechat/command/fans/FansBlack.php',
        'app\\wechat\\command\\fans\\FansList' => __DIR__ . '/../..' . '/application/wechat/command/fans/FansList.php',
        'app\\wechat\\command\\fans\\FansTags' => __DIR__ . '/../..' . '/application/wechat/command/fans/FansTags.php',
        'app\\wechat\\controller\\Config' => __DIR__ . '/../..' . '/application/wechat/controller/Config.php',
        'app\\wechat\\controller\\Fans' => __DIR__ . '/../..' . '/application/wechat/controller/Fans.php',
        'app\\wechat\\controller\\Keys' => __DIR__ . '/../..' . '/application/wechat/controller/Keys.php',
        'app\\wechat\\controller\\Menu' => __DIR__ . '/../..' . '/application/wechat/controller/Menu.php',
        'app\\wechat\\controller\\News' => __DIR__ . '/../..' . '/application/wechat/controller/News.php',
        'app\\wechat\\controller\\api\\Js' => __DIR__ . '/../..' . '/application/wechat/controller/api/Js.php',
        'app\\wechat\\controller\\api\\Push' => __DIR__ . '/../..' . '/application/wechat/controller/api/Push.php',
        'app\\wechat\\controller\\api\\Review' => __DIR__ . '/../..' . '/application/wechat/controller/api/Review.php',
        'app\\wechat\\controller\\api\\Tools' => __DIR__ . '/../..' . '/application/wechat/controller/api/Tools.php',
        'app\\wechat\\queue\\Jobs' => __DIR__ . '/../..' . '/application/wechat/queue/Jobs.php',
        'app\\wechat\\service\\Fans' => __DIR__ . '/../..' . '/application/wechat/service/Fans.php',
        'app\\wechat\\service\\Media' => __DIR__ . '/../..' . '/application/wechat/service/Media.php',
        'app\\wechat\\service\\Wechat' => __DIR__ . '/../..' . '/application/wechat/service/Wechat.php',
        'library\\Controller' => __DIR__ . '/..' . '/zoujingli/think-library/library/Controller.php',
        'library\\File' => __DIR__ . '/..' . '/zoujingli/think-library/library/File.php',
        'library\\driver\\Local' => __DIR__ . '/..' . '/zoujingli/think-library/library/driver/Local.php',
        'library\\driver\\Oss' => __DIR__ . '/..' . '/zoujingli/think-library/library/driver/Oss.php',
        'library\\driver\\Qiniu' => __DIR__ . '/..' . '/zoujingli/think-library/library/driver/Qiniu.php',
        'library\\logic\\Delete' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Delete.php',
        'library\\logic\\Form' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Form.php',
        'library\\logic\\Input' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Input.php',
        'library\\logic\\Logic' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Logic.php',
        'library\\logic\\Page' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Page.php',
        'library\\logic\\Query' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Query.php',
        'library\\logic\\Save' => __DIR__ . '/..' . '/zoujingli/think-library/library/logic/Save.php',
        'library\\tools\\Cors' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Cors.php',
        'library\\tools\\Crypt' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Crypt.php',
        'library\\tools\\Csv' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Csv.php',
        'library\\tools\\Data' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Data.php',
        'library\\tools\\Express' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Express.php',
        'library\\tools\\Http' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Http.php',
        'library\\tools\\Node' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Node.php',
        'library\\tools\\Options' => __DIR__ . '/..' . '/zoujingli/think-library/library/tools/Options.php',
        'think\\Queue' => __DIR__ . '/..' . '/topthink/think-queue/src/Queue.php',
        'think\\composer\\Plugin' => __DIR__ . '/..' . '/topthink/think-installer/src/Plugin.php',
        'think\\composer\\ThinkExtend' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkExtend.php',
        'think\\composer\\ThinkFramework' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkFramework.php',
        'think\\composer\\ThinkTesting' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkTesting.php',
        'think\\helper\\Arr' => __DIR__ . '/..' . '/topthink/think-helper/src/Arr.php',
        'think\\helper\\Hash' => __DIR__ . '/..' . '/topthink/think-helper/src/Hash.php',
        'think\\helper\\Str' => __DIR__ . '/..' . '/topthink/think-helper/src/Str.php',
        'think\\helper\\Time' => __DIR__ . '/..' . '/topthink/think-helper/src/Time.php',
        'think\\helper\\hash\\Bcrypt' => __DIR__ . '/..' . '/topthink/think-helper/src/hash/Bcrypt.php',
        'think\\helper\\hash\\Md5' => __DIR__ . '/..' . '/topthink/think-helper/src/hash/Md5.php',
        'think\\queue\\CallQueuedHandler' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/CallQueuedHandler.php',
        'think\\queue\\Connector' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Connector.php',
        'think\\queue\\Job' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Job.php',
        'think\\queue\\Listener' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Listener.php',
        'think\\queue\\Queueable' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Queueable.php',
        'think\\queue\\ShouldQueue' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/ShouldQueue.php',
        'think\\queue\\Worker' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Worker.php',
        'think\\queue\\command\\Listen' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Listen.php',
        'think\\queue\\command\\Restart' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Restart.php',
        'think\\queue\\command\\Subscribe' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Subscribe.php',
        'think\\queue\\command\\Work' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Work.php',
        'think\\queue\\connector\\Database' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Database.php',
        'think\\queue\\connector\\Redis' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Redis.php',
        'think\\queue\\connector\\Sync' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Sync.php',
        'think\\queue\\connector\\Topthink' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Topthink.php',
        'think\\queue\\job\\Database' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Database.php',
        'think\\queue\\job\\Redis' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Redis.php',
        'think\\queue\\job\\Sync' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Sync.php',
        'think\\queue\\job\\Topthink' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Topthink.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit343ce3a37ca6321141df60e6eb5e84bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit343ce3a37ca6321141df60e6eb5e84bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit343ce3a37ca6321141df60e6eb5e84bd::$classMap;

        }, null, ClassLoader::class);
    }
}
