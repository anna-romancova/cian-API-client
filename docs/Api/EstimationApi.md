# Swagger\Client\EstimationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetEstimationAndBtiGet**](EstimationApi.md#v1GetEstimationAndBtiGet) | **GET** /v1/get-estimation-and-bti | Получить оценку по адресу


# **v1GetEstimationAndBtiGet**
> \Swagger\Client\Model\GetEstimationAndBtiResponseSchemaWrapper v1GetEstimationAndBtiGet($address, $floor_type, $repair_type)

Получить оценку по адресу

Метод API позволяет получить оценку м² в многоэтажном доме и данные БТИ по адресу.  Доступ к методу платный. Для получения доступа, напишите на b2bdatasales@cian.ru

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EstimationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Адрес
$floor_type = "floor_type_example"; // string | Тип этажа
$repair_type = "repair_type_example"; // string | Тип ремонта

try {
    $result = $apiInstance->v1GetEstimationAndBtiGet($address, $floor_type, $repair_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstimationApi->v1GetEstimationAndBtiGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Адрес |
 **floor_type** | **string**| Тип этажа | [optional]
 **repair_type** | **string**| Тип ремонта | [optional]

### Return type

[**\Swagger\Client\Model\GetEstimationAndBtiResponseSchemaWrapper**](../Model/GetEstimationAndBtiResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

