# OfferAppliedServiceModelSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paid_by_service_package** | **bool** | Оплачен за счет Пакета прожвижения | 
**paid_till** | [**\DateTime**](\DateTime.md) | Оплачена до | [optional] 
**price** | **double** | Стоимость за тарифицационный период | 
**service_types** | **string[]** | &#x60;FreeObject&#x60;: Бесплатная публикация   &#x60;DebitObject&#x60;: Платная публикация   &#x60;PremiumObject&#x60;: Премиум публикация   &#x60;Top3&#x60;: Тор 3   &#x60;Highlight&#x60;: Выделение цветом   &#x60;calltracking&#x60;: Подмена номера, Calltracking, оно же \&quot;защита номера\&quot;   &#x60;XmlImport&#x60;: Выгрузка объявлений через XML   &#x60;SubscriptionForPackage&#x60;: Абонентская плата за пакет   &#x60;StatusPro&#x60;: Признак статуса ПРО   &#x60;ServicePackageActivation&#x60;: Массовый пакет   &#x60;Penalty&#x60;: Штрафное списание   &#x60;OrderCancellation&#x60;: Отмена платежа   &#x60;OrderTransfer&#x60;: перенос платежа   &#x60;TechSpend&#x60;: Произвольное списание   &#x60;TechTransfer&#x60;: Перенос произвольной суммы   &#x60;BonusPaymentExpiration&#x60;: Списание истекшего бонусного пополнения   &#x60;auction&#x60;: Списание за аукцион   &#x60;demand&#x60;: Списание за заявку на спрос   &#x60;demandPackage&#x60;: Списание за пакет заявок на спрос   &#x60;cplCalltracking&#x60;: Коллтрекинг по модели CPL | 
**start_date** | [**\DateTime**](\DateTime.md) | Дата подключения | 
**tariffication_duration** | **int** | Период оплаты услуги в микросекундах | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


