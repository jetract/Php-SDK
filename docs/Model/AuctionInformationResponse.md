# AuctionInformationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iD** | **string** | ID of the auction. | [optional] 
**code** | **string** | Code of the auction. Automatically generated. | [optional] 
**name** | **string** | Name of the auction. | [optional] 
**type** | **float** | Defines the auction type. Examples&lt;br&gt;1:Reverse Classic Auction&lt;br&gt;3:Reverse British Auction&lt;br&gt;4:Reverse Sealed Auction&lt;br&gt;5:Reverse Sealed Enveloped Auction | [optional] 
**bidChangeLimit** | **float** | Limit bidders to increase to decrease their bids depending on the Auction type.&lt;br&gt;1:No Limit&lt;br&gt;2:Apply Limit | [optional] 
**bidLimit** | **float** | Maximum/Minimum bid limit. Depending on the auction type it can be reverse or forward change.&lt;br&gt;When not specified, returns zero value. | [optional] 
**budget** | **float** | Budget of the auction. Only used for internal reporting tools.&lt;br&gt;When not specified, returns zero value. | [optional] 
**minimumChange** | **float** | Minimum amount of change for the next bid.&lt;br&gt;Depending on the auction type it can be reverse or forward change.&lt;br&gt;When not specified, returns zero value. | [optional] 
**currency** | **string** | Currency type of the Auction. Bidders will give their bids on this currency. | [optional] 
**visibleRank** | **bool** | Allow bidders to see their rank in total amount.&lt;br&gt;Only available in British Auction types. | [optional] 
**listPrice** | **float** |  | [optional] 
**agreementText** | **string** | Agreement Text that bidders have to accept before participating in the auction. | [optional] 
**note** | **string** | Attached a note for your suppliers to sees. | [optional] 
**deliveryDate** | [**\DateTime**](\DateTime.md) | Delivery date in terms of YYYY-MM-DD HH:MM:SS format. | [optional] 
**autoTimeExtension** | [**\Jetract\Model\AuctionInformationResponseAutoTimeExtension**](AuctionInformationResponseAutoTimeExtension.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Date of the auction of YYYY-MM-DD HH:MM:SS format. | [optional] 
**duration** | **float** | Duration of the auction. | [optional] 
**defaultDuration** | **float** | Duration of the auction is not included time extension. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | End Date of the auction of YYYY-MM-DD HH:MM:SS format. | [optional] 
**reminder** | [**\Jetract\Model\AuctionInformationResponseReminder**](AuctionInformationResponseReminder.md) |  | [optional] 
**publish** | **float** | Draft the auction or publish it. Published auctions will be visible by the bidders.&lt;br&gt;1:Publish&lt;br&gt;2:Draft | [optional] 
**status** | **float** | status of the auction.&lt;br&gt;1:Waiting (Auction opened, but not yet started.).&lt;br&gt;2:Active (Auction started and currently active.).&lt;br&gt;3:Approval process (Auction is ended and not approval process start yet.).&lt;br&gt;4:Completed (Procurement process is completed for auction.). | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | The auction start date on. YYYY-MM-DD HH:MM:SS format. | [optional] 
**transportType** | **string** | If the value is empty, bidders will choose the own transport type. | [optional] 
**inviteMailTitle** | **string** | The subject of the outgoing mail when the auction is published. | [optional] 
**inviteMailBody** | **string** | The content of the outgoing mail when the auction is published. | [optional] 
**validUntilDate** | [**\DateTime**](\DateTime.md) | If the value is empty, bidders will choose the validity date. YYYY-MM-DD HH:MM:SS format when is not empty. | [optional] 
**paymentTypeID** | **string** | If the value is empty, bidders will choose the own payment type. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Auction create date. YYYY-MM-DD HH:MM:SS format. | [optional] 
**approvalProcess** | [**\Jetract\Model\AuctionInformationResponseApprovalProcess**](AuctionInformationResponseApprovalProcess.md) |  | [optional] 
**department** | [**\Jetract\Model\AuctionInformationResponseDepartment**](AuctionInformationResponseDepartment.md) |  | [optional] 
**orderID** | **string** | ID of the order if the auction converted to order. | [optional] 
**creator** | [**\Jetract\Model\AuctionInformationResponseCreator**](AuctionInformationResponseCreator.md) |  | [optional] 
**timeControl** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


