# AnnouncementReportItemResponseSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | **string[]** | Список ошибок публикации объявления. | [optional] 
**external_id** | **string** | Внешний Id объявления. | [optional] 
**offer_id** | **int** | Id объявления. | [optional] 
**status** | **string** | &#x60;Draft&#x60;: 11 - Черновик   &#x60;Published&#x60;: 12 - Опубликовано   &#x60;Deactivated&#x60;: 14 - Деактивировано (ранее было скрыто Hidden)   &#x60;Refused&#x60;: 15 - Отклонено модератором   &#x60;Deleted&#x60;: 16 - Удалён   &#x60;Sold&#x60;: 17 - Продано/Сдано   &#x60;Moderate&#x60;: 18 - Требует модерации  Данный статус исчез - оставим для совместимости   &#x60;RemovedByModerator&#x60;: 19 - Удалено модератором   &#x60;Blocked&#x60;: 20 - объявление снято с публикации по причине применения санкции \&quot;приостановки публикации\&quot; | [optional] 
**url** | **string** | Ссылка на объявление. | [optional] 
**warnings** | **string[]** | Предупреждения при публикации объявления. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


