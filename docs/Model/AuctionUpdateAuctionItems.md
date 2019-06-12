# AuctionUpdateAuctionItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Item ID. | 
**category_id** | **string** | ID of the sub category. You cannot provide MASTER category! | 
**product_id** | **string** | ID of the product. You cannot provide MASTER or SUB category! | 
**amount** | **float** | Amount of the given product. | 
**unit** | **string** | Unit of the product.&lt;br&gt;Bidder will see Product Amount x Unit | [default to 'Adet']
**description** | **string** | Add a description to this product. | [optional] 
**list_price** | **float** | Is only used in JETRACT front-end. Does not effect bidder. | [optional] 
**new** | **bool** | Defines if this is a new product. | [optional] 
**file_id** | **string** | ID of the item file. (optional) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


