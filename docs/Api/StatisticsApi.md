# Swagger\Client\StatisticsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetSearchCoverageGet**](StatisticsApi.md#v1GetSearchCoverageGet) | **GET** /v1/get-search-coverage | Получить охват по объявлению
[**v1GetViewsStatisticsByDaysGet**](StatisticsApi.md#v1GetViewsStatisticsByDaysGet) | **GET** /v1/get-views-statistics-by-days | Получить статистику просмотров и показов телефонов по дням
[**v1GetViewsStatisticsGet**](StatisticsApi.md#v1GetViewsStatisticsGet) | **GET** /v1/get-views-statistics | Получить статистику просмотров и показов телефонов за все время


# **v1GetSearchCoverageGet**
> \Swagger\Client\Model\OfferCoverageResponseSchemaWrapper v1GetSearchCoverageGet($date_from, $offer_id, $date_to)

Получить охват по объявлению

Метод позволяет получить охват по объявлению. Охват – это доля увидевших ваше объявление из тех пользователей, под чей поиск подошёл ваш объект. Остальные пользователи не долистали результаты поиска до вашего объявления.  Пример:      curl -X GET -H 'Authorization: Bearer <ACCESS TOKEN>' https://public-api.cian.ru/v1/get-search-coverage?dateTo=2019-10-30&dateFrom=2019-09-10&offerId=116033160

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime("2013-10-20"); // \DateTime | Дата начала периода
$offer_id = 56; // int | ID объявления в ЦИАН
$date_to = new \DateTime("2013-10-20"); // \DateTime | Дата конца периода

try {
    $result = $apiInstance->v1GetSearchCoverageGet($date_from, $offer_id, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->v1GetSearchCoverageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **\DateTime**| Дата начала периода |
 **offer_id** | **int**| ID объявления в ЦИАН |
 **date_to** | **\DateTime**| Дата конца периода |

### Return type

[**\Swagger\Client\Model\OfferCoverageResponseSchemaWrapper**](../Model/OfferCoverageResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetViewsStatisticsByDaysGet**
> \Swagger\Client\Model\StatsByOfferIdByDaysResponseSchemaWrapper v1GetViewsStatisticsByDaysGet($date_from, $offer_id, $date_to)

Получить статистику просмотров и показов телефонов по дням

Метод возвращает количество просмотров вашего объявления за указанную дату и количество показов номера телефона в объявлении другим людям.  Ограничения на диапазон дат в этом методе. - Дата начала периода должна быть строго больше даты конца периода. - Возможно запрашивать диапазон не более 180 дней.  Пример:      curl -X GET -H 'Authorization: Bearer <ACCESS TOKEN>' https://public-api.cian.ru/v1/get-views-statistics-by-days?offerId=196032948&dateFrom=2020-06-01&dateTo=2020-06-15

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime("2013-10-20"); // \DateTime | Дата с которой искать
$offer_id = 56; // int | ID объявления
$date_to = new \DateTime("2013-10-20"); // \DateTime | Дата до которой искать

try {
    $result = $apiInstance->v1GetViewsStatisticsByDaysGet($date_from, $offer_id, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->v1GetViewsStatisticsByDaysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **\DateTime**| Дата с которой искать |
 **offer_id** | **int**| ID объявления |
 **date_to** | **\DateTime**| Дата до которой искать |

### Return type

[**\Swagger\Client\Model\StatsByOfferIdByDaysResponseSchemaWrapper**](../Model/StatsByOfferIdByDaysResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetViewsStatisticsGet**
> \Swagger\Client\Model\StatsByOfferIdsForAllTimeResponseSchemaWrapper v1GetViewsStatisticsGet($offers_ids)

Получить статистику просмотров и показов телефонов за все время

Метод возвращает количество просмотров вашего объявления и количество показов номера телефона в объявлении другим людям.  Максимально допустимое количество id объявлений – 50.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offers_ids = array(56); // int[] | Список ID объявлений

try {
    $result = $apiInstance->v1GetViewsStatisticsGet($offers_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->v1GetViewsStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers_ids** | [**int[]**](../Model/int.md)| Список ID объявлений |

### Return type

[**\Swagger\Client\Model\StatsByOfferIdsForAllTimeResponseSchemaWrapper**](../Model/StatsByOfferIdsForAllTimeResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

