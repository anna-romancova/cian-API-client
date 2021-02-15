# Swagger\Client\NotificationsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetNotificationsGet**](NotificationsApi.md#v1GetNotificationsGet) | **GET** /v1/get-notifications | Получить уведомления


# **v1GetNotificationsGet**
> \Swagger\Client\Model\GetUserNotificationsApiResponseSchemaWrapper v1GetNotificationsGet($page_size, $page, $date_from, $employee_id, $date_to)

Получить уведомления

Метод API позволяет посмотреть уведомления, полученные агентством.  В присылаемых пользователю уведомлениях может быть информация о пополнении счета, активации тарифа, предупреждения о санкциях, информация от службы качества, и др.  Пример:      curl -X GET -H 'Authorization: Bearer <ACCESS TOKEN>' https://public-api.cian.ru/v1/get-notifications?page=1&dateFrom=2020-09-21T14:15:46.743046Z&dateTo=2020-10-05T15:47:46.743046Z&employeeId=123456&pageSize=100

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 56; // int | Размер страницы
$page = 56; // int | Номер страницы
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата с которой искать сообщения
$employee_id = 56; // int | id пользователя сотрудника агентства
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата по которую искать сообщения

try {
    $result = $apiInstance->v1GetNotificationsGet($page_size, $page, $date_from, $employee_id, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1GetNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Размер страницы |
 **page** | **int**| Номер страницы |
 **date_from** | **\DateTime**| Дата с которой искать сообщения | [optional]
 **employee_id** | **int**| id пользователя сотрудника агентства | [optional]
 **date_to** | **\DateTime**| Дата по которую искать сообщения | [optional]

### Return type

[**\Swagger\Client\Model\GetUserNotificationsApiResponseSchemaWrapper**](../Model/GetUserNotificationsApiResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

