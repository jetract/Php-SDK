# ProcurementRequestInformationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the procurement request. | [optional] 
**code** | **string** | Code of the procurement request. Automatically generated. | [optional] 
**name** | **string** | Name of the procurement request. | [optional] 
**note** | **string** | Note attached to your procurement request. | [optional] 
**priority** | **float** | The priority level of your purchase request. Examples:&lt;br&gt;1:Low&lt;br&gt;2:Normal&lt;br&gt;4:Critical | [optional] 
**request_type** | **float** | The status of your purchase request. Types:&lt;br&gt;0:Waiting&lt;br&gt;1:Converted to Order&lt;br&gt;2:Converted to RFQ&lt;br&gt;3:Converted to Auction | [optional] 
**delivery_date** | **string** | Delivery date in terms of YYYY-MM-DD HH:MM:SS format. | [optional] 
**created_date** | **string** | Procurement request create date. YYYY-MM-DD HH:MM:SS format. | [optional] 
**address** | [**\Swagger\Client\Model\ProcurementRequestAddressResponse**](ProcurementRequestAddressResponse.md) |  | [optional] 
**items** | [**\Swagger\Client\Model\ProcurementRequestItemResponse[]**](ProcurementRequestItemResponse.md) | Items of the procurement request. | [optional] 
**department** | **object** | The procurement request department/project. | [optional] 
**creator** | **object** | Information of the user who created the procurement request. | [optional] 
**requester** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


