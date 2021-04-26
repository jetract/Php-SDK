# OrderItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the order item. | [optional] 
**amount** | **float** | Amount of the order item. | [optional] 
**unit** | **string** | Unit of the order item. | [optional] 
**currency_type** | **string** | Currency type of the order item. | [optional] 
**description** | **string** | Description of the order item. | [optional] 
**convert_type** | **string** | Convert type of the order. Examples:&lt;br&gt;1:Request to order,2: Auction/RFQ to order | [optional] 
**vat** | **float** | Vat of the order item. | [optional] 
**price** | **float** | Price of the order item. | [optional] 
**delivery_date** | **string** | Delivery Date of the order item. YYYY-MM-DD format. | [optional] 
**created_date** | **string** | Order item create date. YYYY-MM-DD HH:MM:SS format. | [optional] 
**product** | **object** | Product data of the given item. | [optional] 
**category** | **object** |  | [optional] 
**convert_log** | **object** |  | [optional] 
**received_amounts** | **object[]** | Information of the order items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


