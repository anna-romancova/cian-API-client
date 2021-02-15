# Swagger\Client\BillingApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetMyBalanceGet**](BillingApi.md#v1GetMyBalanceGet) | **GET** /v1/get-my-balance | Получить текущий баланс
[**v1GetOfferActiveServicesGet**](BillingApi.md#v1GetOfferActiveServicesGet) | **GET** /v1/get-offer-active-services | Получить активные услуги по объявлениям
[**v1GetOperationsGet**](BillingApi.md#v1GetOperationsGet) | **GET** /v1/get-operations | Получить список операций


# **v1GetMyBalanceGet**
> \Swagger\Client\Model\BalanceModelSchemaWrapper v1GetMyBalanceGet()

Получить текущий баланс

Метод API позволяет получить текущий баланс пользователя, количество бонусов, количество баллов, которые можно потратить на аукцион.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1GetMyBalanceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->v1GetMyBalanceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BalanceModelSchemaWrapper**](../Model/BalanceModelSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetOfferActiveServicesGet**
> \Swagger\Client\Model\GetActualAppliedServicesApiResponseSchemaWrapper v1GetOfferActiveServicesGet($offer_ids)

Получить активные услуги по объявлениям

Метод API позволяет получить активные на текущую дату услуги, примененные к выбранному объявлению или нескольким объявлениям агентства.  Пример:      curl -X GET -H 'Authorization: Bearer <ACCESS TOKEN>' https://public-api.cian.ru/v1/get-offer-active-services?offerIds=214937422&offerIds=218965501

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_ids = array(56); // int[] | Список объявлений

try {
    $result = $apiInstance->v1GetOfferActiveServicesGet($offer_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->v1GetOfferActiveServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_ids** | [**int[]**](../Model/int.md)| Список объявлений |

### Return type

[**\Swagger\Client\Model\GetActualAppliedServicesApiResponseSchemaWrapper**](../Model/GetActualAppliedServicesApiResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetOperationsGet**
> \Swagger\Client\Model\OperationsByUserListResponseSchemaWrapper v1GetOperationsGet($from, $page_size, $to, $page, $operation_type, $employee_id)

Получить список операций

Метод API позволяет получить биллинговые операции (списание, пополнение, срез по балансу) для каждого из сотрудников мастер-аккаунта.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начало периода
$page_size = 56; // int | Размер страницы (начиная с 1).
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конец периода
$page = 56; // int | Номер страницы (начиная с 1).
$operation_type = "operation_type_example"; // string | Тип операций для поиска
$employee_id = 56; // int | Id сотрудника для получения событий по нему. Если не передан - вернёт операции для мастер-аккаунта.

try {
    $result = $apiInstance->v1GetOperationsGet($from, $page_size, $to, $page, $operation_type, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->v1GetOperationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Начало периода |
 **page_size** | **int**| Размер страницы (начиная с 1). |
 **to** | **\DateTime**| Конец периода |
 **page** | **int**| Номер страницы (начиная с 1). |
 **operation_type** | **string**| Тип операций для поиска |
 **employee_id** | **int**| Id сотрудника для получения событий по нему. Если не передан - вернёт операции для мастер-аккаунта. | [optional]

### Return type

[**\Swagger\Client\Model\OperationsByUserListResponseSchemaWrapper**](../Model/OperationsByUserListResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

