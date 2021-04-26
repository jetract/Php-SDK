# AuctionOfferItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the offer item. | [optional] 
**delivery_date** | **string** | Delivery date of a given item. YYYY-MM-DD HH:MM:SS format.&lt;br&gt;Only available if it is enabled in the auction configurations. | [optional] 
**note** | **string** | Note of the offer item. | [optional] 
**offer_price** | **float** | Price given to item. | [optional] 
**offer_discount** | **float** | Discount given to offer price. | [optional] 
**offer_discount_type** | **float** | Type of the offer discount.&lt;br&gt;1: Percent value. &lt;br&gt;2: Price value. | [optional] 
**approval_process_status** | **float** | The status of the item to the approval process. Only used in after auction Flow Mechanisms. | [optional] 
**item** | **object** | The information of the auction item. | [optional] 
**offer_vat_rate** | **float** | Vat rate given to item. | [optional] 
**offer_vat_price** | **float** | Vat price given to item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


