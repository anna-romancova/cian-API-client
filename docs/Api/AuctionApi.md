# Swagger\Client\AuctionApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GetAuctionGet**](AuctionApi.md#v1GetAuctionGet) | **GET** /v1/get-auction | Получить информацию по ставкам на объявления


# **v1GetAuctionGet**
> \Swagger\Client\Model\GetAnnouncementsConcurrencyInfoResponseSchemaWrapper v1GetAuctionGet($offer_ids)

Получить информацию по ставкам на объявления

Метод позволяет получить информацию по примененным к объявлению ставкам.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_ids = array(56); // int[] | Ids объявлений

try {
    $result = $apiInstance->v1GetAuctionGet($offer_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionApi->v1GetAuctionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_ids** | [**int[]**](../Model/int.md)| Ids объявлений |

### Return type

[**\Swagger\Client\Model\GetAnnouncementsConcurrencyInfoResponseSchemaWrapper**](../Model/GetAnnouncementsConcurrencyInfoResponseSchemaWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

