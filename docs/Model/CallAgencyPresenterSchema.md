# CallAgencyPresenterSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**call_id** | **int** | ID звонка | [optional] 
**calltracking_phone** | **string** | Подменный номер | 
**date** | [**\DateTime**](\DateTime.md) | Дата звонка | [optional] 
**datetime** | [**\DateTime**](\DateTime.md) | Дата и время звонка | [optional] 
**destination_phone** | **string** | Входящий номер | 
**duration** | **int** | Продолжительность в секундах | 
**employer_id** | **int** | ID сотрудника | [optional] 
**source_phone** | **string** | Исходящий номер | 
**status** | **string** | &#x60;busy&#x60;: Занято   &#x60;hgup&#x60;: Сбросили   &#x60;noAnswer&#x60;: Без ответа   &#x60;success&#x60;: Успешный   &#x60;techProblem&#x60;: Техническая ошибка   &#x60;turnedOff&#x60;: Выключен   &#x60;unknown&#x60;: Неизвестно | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


