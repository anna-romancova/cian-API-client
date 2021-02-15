# AgentResponseSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance** | [**\Swagger\Client\Model\AgentBalanceResponseSchema**](AgentBalanceResponseSchema.md) | Баланс сотрудника | [optional] 
**email** | **string** | Адрес email | [optional] 
**first_name** | **string** | Имя | [optional] 
**last_name** | **string** | Фамилия | [optional] 
**limits** | [**\Swagger\Client\Model\AgentSpendLimitResponseSchema**](AgentSpendLimitResponseSchema.md) | Лимиты сотрудника | [optional] 
**phones** | [**\Swagger\Client\Model\AgentPhoneResponseSchema[]**](AgentPhoneResponseSchema.md) | Телефоны сотрудника | 
**state** | **string** | &#x60;request&#x60;: Отправлена заявка на добавление агента к агентству   &#x60;active&#x60;: Активный агент   &#x60;processing&#x60;: Агент в процессе активации/блокировки   &#x60;blocked&#x60;: Заблокированный агент   &#x60;deleted&#x60;: Удаленный агент   &#x60;deletedAndHidden&#x60;: Удаленный агент | 
**user_id** | **int** | Id пользователя | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


