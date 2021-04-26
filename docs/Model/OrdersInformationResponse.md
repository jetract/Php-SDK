# OrdersInformationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the order. | [optional] 
**code** | **string** | Code of the order. Automatically generated. | [optional] 
**name** | **string** | Name of the order. | [optional] 
**currency_type** | **string** | Currency type of the order. Examples:&lt;br&gt;TL,USD,EUR | [optional] 
**convert_type** | **string** | Convert type of the order. Examples:&lt;br&gt;1:Request to order,2: Auction/RFQ to order | [optional] 
**decimal_place** | **float** | Decimal place type of the order prices. | [optional] 
**department** | **object** | The order department/project. | [optional] 
**description** | **string** | Attached a description for your suppliers to sees. | [optional] 
**delivery_date** | **string** | Delivery date in terms of YYYY-MM-DD format. | [optional] 
**officer** | **object** | Information of the user who officer the order. | [optional] 
**creator** | **object** | Information of the user who created the order. | [optional] 
**transport_type** | **string** | Transport type of the order | [optional] 
**created_date** | **string** | Order create date. YYYY-MM-DD HH:MM:SS format. | [optional] 
**bidder** | **object** | // | [optional] 
**is_bidder_confirm** | **bool** |  | [optional] 
**active** | **bool** |  | [optional] 
**type** | **float** | Examples:&lt;br&gt;1:Materials,2:Workmanship,3:Materials and workmanship | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


