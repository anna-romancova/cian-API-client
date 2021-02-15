# Swagger\Client\ModerationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetComplaintsGet**](ModerationApi.md#v1GetComplaintsGet) | **GET** /v1/get-complaints | Получить жалобы


# **v1GetComplaintsGet**
> \Swagger\Client\Model\GetModerationComplaintResponseSchemaWrapper v1GetComplaintsGet($page, $page_size, $date_from, $date_to)

Получить жалобы

Метод API позволяет получить жалобы на объявления.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Номер страницы
$page_size = 56; // int | Размер страницы
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата с которой искать
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата до которой искать

try {
    $result = $apiInstance->v1GetComplaintsGet($page, $page_size, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->v1GetComplaintsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Номер страницы |
 **page_size** | **int**| Размер страницы |
 **date_from** | **\DateTime**| Дата с которой искать | [optional]
 **date_to** | **\DateTime**| Дата до которой искать | [optional]

### Return type

[**\Swagger\Client\Model\GetModerationComplaintResponseSchemaWrapper**](../Model/GetModerationComplaintResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

