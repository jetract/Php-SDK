# BidderAuctionsInformationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the auction. | [optional] 
**code** | **string** | Code of the auction. Automatically generated. | [optional] 
**name** | **string** | Name of the auction. | [optional] 
**type** | **float** | Defines the auction type. Examples&lt;br&gt;1:Reverse Classic Auction&lt;br&gt;3:Reverse British Auction&lt;br&gt;4:Reverse Sealed Auction&lt;br&gt;5:Reverse Sealed Enveloped Auction | [optional] 
**bid_limit** | **float** | Maximum/Minimum bid limit. Depending on the auction type it can be reverse or forward change.&lt;br&gt;When not specified, returns zero value. | [optional] 
**minimum_change** | **float** | Minimum amount of change for the next bid.&lt;br&gt;Depending on the auction type it can be reverse or forward change.&lt;br&gt;When not specified, returns zero value. | [optional] 
**currency** | **string** | Currency type of the Auction. Bidders will give their bids on this currency. | [optional] 
**visible_rank** | **float** | Allow bidders to see their rank in total amount.&lt;br&gt;Only available in British Auction types. | [optional] 
**list_price** | **float** |  | [optional] 
**agreement_text** | **string** | Agreement Text that bidders have to accept before participating in the auction. | [optional] 
**note** | **string** | Attached a note for your suppliers to sees. | [optional] 
**delivery_date** | **string** | Delivery date in terms of YYYY-MM-DD HH:MM:SS format. | [optional] 
**date** | **string** | Date of the auction of YYYY-MM-DD HH:MM:SS format. | [optional] 
**duration** | **float** | Duration of the auction. | [optional] 
**default_duration** | **float** | Duration of the auction is not included time extension. | [optional] 
**end_date** | **string** | End Date of the auction of YYYY-MM-DD HH:MM:SS format. | [optional] 
**status** | **float** | status of the auction.&lt;br&gt;1:Waiting (Auction opened, but not yet started.).&lt;br&gt;2:Active (Auction started and currently active.).&lt;br&gt;3:Approval process (Auction is ended and not approval process start yet.).&lt;br&gt;4:Completed (Procurement process is completed for auction.). | [optional] 
**start_date** | **string** | The auction start date on. YYYY-MM-DD HH:MM:SS format. | [optional] 
**transport_type** | **string** | If the value is empty, bidders will choose the own transport type. | [optional] 
**valid_until_date** | **string** | If the value is empty, bidders will choose the validity date. YYYY-MM-DD HH:MM:SS format when is not empty. | [optional] 
**payment_type_id** | **string** | If the value is empty, bidders will choose the own payment type. | [optional] 
**created_date** | **string** | Auction create date. YYYY-MM-DD HH:MM:SS format. | [optional] 
**creator** | **object** | Information of the user who created the auction. | [optional] 
**vat_rate** | **float** | Activated item-based vat rate of this auction. | [optional] 
**bidder_vat_rate** | **float** | Activated bidders to provide item-based vat rates. | [optional] 
**item_files** | **float** | Indicated if you are attaching files to items. | [optional] 
**request_delivery_date_for_items** | **float** | Indicated if you are requesting delivery date to items. | [optional] 
**agreement_approve** | **float** | Bidders approve of the agreement text to the auction. &lt;br&gt;0:Not yet approve. &lt;br&gt;1: Approved. &lt;br&gt;2: Not approved. | [optional] 
**visible_offers** | **float** | Number of lowest/highest number of offers to bidders.&lt;br&gt;Only available in Classic Auction types. | [optional] 
**company** | **object** | Information of the company who created the auction. | [optional] 
**bid_change_type** | **float** | 1: Write bid amount.&lt;br&gt;2: Increase amount button. | [optional] 
**change_amounts** | **object[]** | If the bidChangeType is 2, the amounts of the buttons to be shown. | [optional] 
**sales_count** | **float** | Number of items sold. | [optional] 
**auction_current_price** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


