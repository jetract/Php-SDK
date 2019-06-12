# AuctionBidderResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the bidder. | [optional] 
**email** | **string** | Email of the bidder. | [optional] 
**firstname** | **string** | Firstname of the bidder. | [optional] 
**lastname** | **string** | Lastname of the bidder. | [optional] 
**company** | [**\Swagger\Client\Model\AuctionConditionResponseBidderCompany**](AuctionConditionResponseBidderCompany.md) |  | [optional] 
**files** | [**\Swagger\Client\Model\AuctionBidderResponseFiles[]**](AuctionBidderResponseFiles.md) | Files which this bidder uploaded. | [optional] 
**ip_address** | **string** | Connection IP Address of the bidder. | [optional] 
**offer_counter** | **float** | The number of offers in this auction of this bidder. | [optional] 
**agreement_approve** | **float** | Approval status of the agreement.&lt;br&gt;0: Not yet approved. &lt;br&gt;1: Is approved. &lt;br&gt; 2: Is rejected. | [optional] 
**agreement_reject_description** | **string** | Description when rejected of the agreement. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


