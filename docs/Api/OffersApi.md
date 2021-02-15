# Swagger\Client\OffersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetMyOffersGet**](OffersApi.md#v1GetMyOffersGet) | **GET** /v1/get-my-offers | Получить объявления


# **v1GetMyOffersGet**
> \Swagger\Client\Model\AnnouncementInfoResponseSchemaWrapper v1GetMyOffersGet($source, $statuses, $users_ids)

Получить объявления

С помощью метода можно получить объявления по агентству, отфильтровав объявления по статусу, источнику и списку сотрудников.  Предположим, агентству нужно получить все свои объявления: уже снятые с публикации и опубликованные на текущий момент. При этом необходимо видеть только те объявления, которые были созданы агентом вручную, а не загружены через XML-фид. Объявления должны быть отфильтрованы по id агента, который опубликовал их.  Пример:      curl -X GET -H 'Authorization: Bearer <ACCESS TOKEN>' https://public-api.cian.ru/v1/get-my-offers?source=manual&statuses=inactive&statuses=published  Возможно получить только те объявления, которые были созданы определенными агентами (id 106815 и 106816). Для этого в параметры запроса нужно передать еще поле usersIds c идентификаторами сотрудников.  Пример:      curl -X GET -H 'Authorization: Bearer <ACCESS TOKEN>' https://public-api.cian.ru/v1/get-my-offers?source=manual&statuses=inactive&statuses=published&usersIds=106815&usersIds=106816  Параметры не являются обязательными для заполнения. В случае отправки пустого запроса в ответе будут указаны все когда-либо существовавшие объявления агентства.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source = "source_example"; // string | Источник объявления
$statuses = array("statuses_example"); // string[] | Статусы
$users_ids = array(56); // int[] | Список пользователей (сабов)

try {
    $result = $apiInstance->v1GetMyOffersGet($source, $statuses, $users_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->v1GetMyOffersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | **string**| Источник объявления | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Статусы | [optional]
 **users_ids** | [**int[]**](../Model/int.md)| Список пользователей (сабов) | [optional]

### Return type

[**\Swagger\Client\Model\AnnouncementInfoResponseSchemaWrapper**](../Model/AnnouncementInfoResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

