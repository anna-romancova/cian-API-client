# Swagger\Client\AgentsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetAgentsGet**](AgentsApi.md#v1GetAgentsGet) | **GET** /v1/get-agents | Получить список сотрудников


# **v1GetAgentsGet**
> \Swagger\Client\Model\AgentsListResponseSchemaWrapper v1GetAgentsGet($page_size, $page, $query, $statuses, $user_ids)

Получить список сотрудников

Метод API позволяет получить список сотрудников агентства, зная идентификатор мастер-аккаунта агентства.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 56; // int | Размер страницы.
$page = 56; // int | Номер запрашиваемой страницы.
$query = "query_example"; // string | Поисковый запрос
$statuses = array("statuses_example"); // string[] | Статусы
$user_ids = array(56); // int[] | Список сотрудников, которых нужно вернуть в ответе. Если не задан - вернуть информацию по всем сотрудникам.

try {
    $result = $apiInstance->v1GetAgentsGet($page_size, $page, $query, $statuses, $user_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->v1GetAgentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Размер страницы. |
 **page** | **int**| Номер запрашиваемой страницы. |
 **query** | **string**| Поисковый запрос | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Статусы | [optional]
 **user_ids** | [**int[]**](../Model/int.md)| Список сотрудников, которых нужно вернуть в ответе. Если не задан - вернуть информацию по всем сотрудникам. | [optional]

### Return type

[**\Swagger\Client\Model\AgentsListResponseSchemaWrapper**](../Model/AgentsListResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

