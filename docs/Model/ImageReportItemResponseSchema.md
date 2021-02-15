# ImageReportItemResponseSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_text** | **string** | Текст ошибки | [optional] 
**error_type** | **string** | &#x60;imageLimitExceeded&#x60;: Превышен лимит на количество изображений   &#x60;serverTimeout&#x60;: Сервер не ответил за отведенное время   &#x60;invalidOperation&#x60;: InvalidOperationException   &#x60;timeout&#x60;: Сервер не ответил за отведенное время   &#x60;imageDuplicate&#x60;: Дубликат изображения   &#x60;notSupportedResolution&#x60;: Неподдерживаемое разрешение   &#x60;notFound&#x60;: Изображение не найдено   &#x60;notImage&#x60;: Данные не являются изображением   &#x60;emptyResult&#x60;: Пустой ответ от сервера   &#x60;notSupportedSize&#x60;: Неподдерживаемый размер   &#x60;unknownError&#x60;: Неизвестная ошибка | [optional] 
**offer_id** | **int** | Id объявления | 
**url** | **string** | URL изображения | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


