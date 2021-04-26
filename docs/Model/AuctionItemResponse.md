# AuctionItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the item. | [optional] 
**amount** | **float** | Amount of the given product. | [optional] 
**unit** | **string** | Unit of the product.&lt;br&gt;Bidder will see Product Amount x Unit | [optional] [default to 'Adet']
**list_price** | **float** | Is only used in JETRACT front-end. Does not effect bidder. Forward auction sales price. | [optional] 
**description** | **string** | Description of the item. | [optional] 
**product** | **object** | Product data of the given item. | [optional] 
**category** | **object** |  | [optional] 
**file_id** | **string** | ID of the item file. | [optional] 
**sales_type** | **float** | Forward auction sales type. 1: Not Sold.&lt;br&gt;2: Sold. | [optional] 
**winner_bidder** | **object** | Only Forward Auction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


