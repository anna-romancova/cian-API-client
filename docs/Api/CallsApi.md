# Swagger\Client\CallsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetCallRecordGet**](CallsApi.md#v1GetCallRecordGet) | **GET** /v1/get-call-record | Получить запись звонка
[**v1GetCallsReportGet**](CallsApi.md#v1GetCallsReportGet) | **GET** /v1/get-calls-report | Получить отчет по звонкам


# **v1GetCallRecordGet**
> v1GetCallRecordGet($call_id)

Получить запись звонка

Получить запись звонка по `callId`. В ответе будет файл в формате `audio/mpeg`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$call_id = 56; // int | ID звонка

try {
    $apiInstance->v1GetCallRecordGet($call_id);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->v1GetCallRecordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_id** | **int**| ID звонка |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GetCallsReportGet**
> \Swagger\Client\Model\GetCallsReportForAgencyResponseSchemaWrapper v1GetCallsReportGet($page_size, $page, $employer_id, $date_from, $date_to)

Получить отчет по звонкам

Получить отчет по звонкам с фильтрацией по датам и ID сотрудника

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 56; // int | Размер страницы
$page = 56; // int | Номер страницы
$employer_id = 56; // int | ID сотрудника
$date_from = new \DateTime("2013-10-20"); // \DateTime | Дата начала периода (включительно)
$date_to = new \DateTime("2013-10-20"); // \DateTime | Дата конца периода (включительно)

try {
    $result = $apiInstance->v1GetCallsReportGet($page_size, $page, $employer_id, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->v1GetCallsReportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Размер страницы |
 **page** | **int**| Номер страницы |
 **employer_id** | **int**| ID сотрудника | [optional]
 **date_from** | **\DateTime**| Дата начала периода (включительно) | [optional]
 **date_to** | **\DateTime**| Дата конца периода (включительно) | [optional]

### Return type

[**\Swagger\Client\Model\GetCallsReportForAgencyResponseSchemaWrapper**](../Model/GetCallsReportForAgencyResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

