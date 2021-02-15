# OperationByUserModelSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **double** | Сумма операции | [optional] 
**comment** | **string** | Описание для пользователя | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Дата совершения операции | [optional] 
**log_object_type** | **string** | &#x60;flat&#x60;: Аренда квартир   &#x60;user&#x60;: Пользователь   &#x60;office&#x60;: Аренда продажа офисов   &#x60;suburban&#x60;: Аренда, продажа загородной недвижимости   &#x60;vc&#x60;: Вакансии   &#x60;flat2&#x60;: Продажа квартир | [optional] 
**offer_id** | **int** | Id объявления | [optional] 
**type** | **string** | &#x60;withdrawal&#x60;: Списание   &#x60;deposit&#x60;: Пополнение   &#x60;balance&#x60;: Срез по балансу   &#x60;infoMessage&#x60;: Информационное сообщение | [optional] 
**user_id** | **int** | Id пользователя | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


