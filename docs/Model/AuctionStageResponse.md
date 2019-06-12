# AuctionStageResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the stage. | [optional] 
**number** | **float** | Number of the stage. | [optional] 
**start_date** | **string** | The stage start date on. YYYY-MM-DD HH:MM:SS format. | [optional] 
**end_date** | **string** | The stage end date on. YYYY-MM-DD HH:MM:SS format. | [optional] 
**status** | **float** | Status of the stage.&lt;br&gt;0:Waiting&lt;br&gt;1:Active&lt;br&gt;2:Ended | [optional] 
**bidders** | [**\Swagger\Client\Model\AuctionStageBidderResponse[]**](AuctionStageBidderResponse.md) | Bidders of the stage. | [optional] 
**best_bidders** | [**\Swagger\Client\Model\AuctionBestBidderResponse[]**](AuctionBestBidderResponse.md) | The best bidders of the action. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


