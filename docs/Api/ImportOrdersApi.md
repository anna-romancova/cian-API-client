# Swagger\Client\ImportOrdersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetImagesReportGet**](ImportOrdersApi.md#v1GetImagesReportGet) | **GET** /v1/get-images-report | Получить отчет об изображениях
[**v1GetLastOrderInfoGet**](ImportOrdersApi.md#v1GetLastOrderInfoGet) | **GET** /v1/get-last-order-info | Получить состояние импорта объявлений
[**v1GetOrderGet**](ImportOrdersApi.md#v1GetOrderGet) | **GET** /v1/get-order | Получить отчет по импорту объявлений


# **v1GetImagesReportGet**
> \Swagger\Client\Model\ImageReportResponseSchemaWrapper v1GetImagesReportGet($page, $page_size)

Получить отчет об изображениях

Метод позволяет получить последний актуальный отчет об изображениях объявлений в XML-фиде.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Номер страницы (должен начинаться с 1)
$page_size = 56; // int | Размер страницы (от 1 до 500)

try {
    $result = $apiInstance->v1GetImagesReportGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportOrdersApi->v1GetImagesReportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Номер страницы (должен начинаться с 1) |
 **page_size** | **int**| Размер страницы (от 1 до 500) |

### Return type

[**\Swagger\Client\Model\ImageReportResponseSchemaWrapper**](../Model/ImageReportResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetLastOrderInfoGet**
> \Swagger\Client\Model\OrderInfoResponseSchemaWrapper v1GetLastOrderInfoGet()

Получить состояние импорта объявлений

Метод позволяет получить состояние последнего актуального отчета по импорту объявлений и возвращает информацию об отчете: URL XML-фида, дату проверки фида, наличие или отсутствие проблем с объявлениями и фотографиями в объявлении, номер заказа (номер выгрузки) фида, дату последней обработки фида.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1GetLastOrderInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportOrdersApi->v1GetLastOrderInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OrderInfoResponseSchemaWrapper**](../Model/OrderInfoResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetOrderGet**
> \Swagger\Client\Model\UnloadReportResponseSchemaWrapper v1GetOrderGet()

Получить отчет по импорту объявлений

Метод позволяет получить последний актуальный отчет по импорту объявлений и возвращает информацию об отчете: URL XML-фида, дату проверки фида, наличие или отсутствие проблем с объявлениями и фотографиями в объявлении, номер заказа (номер выгрузки) фида, дату последней обработки фида.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImportOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1GetOrderGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportOrdersApi->v1GetOrderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UnloadReportResponseSchemaWrapper**](../Model/UnloadReportResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

