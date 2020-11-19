# AuctionNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the auction. | 
**type** | **float** | Defines the auction type. Examples&lt;br&gt;1:Reverse Classic Auction&lt;br&gt;3:Reverse British Auction&lt;br&gt;4:Reverse Sealed Auction&lt;br&gt;5:Reverse Sealed Enveloped Auction&lt;br&gt;8:Forward Auction | 
**date** | **string** | Date of the auction of YYYY-MM-DD format. | 
**time** | **string** | Time of the day when auction will be ready to start, HH:mm format. | 
**duration** | **float** | Duration of the auction. Max: 7 days. | 
**budget** | **string** | Budget of the auction. Only used for internal reporting tools. | [optional] 
**minimum_change** | **string** | Minimum amount of change for the next bid.&lt;br&gt;Depending on the auction type it can be reverse or forward change. | [optional] 
**currency** | **string** | Currency type of the Auction. Bidders will give their bids on this currency. | 
**agreement_text** | **string** | Agreement Text that bidders have to accept before participating in the auction. | [default to '<p>Katılımcısı olacağımız E-ihaleye ait ihale dosyasında bulunan t&uuml;m &ccedil;izim ve d&ouml;k&uuml;manları eksiksiz olarak temin ettiğimizi, incelediğimizi ve bu ihale şartları ile ihaleye katılım davetinizi kabul ederek teklif vereceğimizi, e-ihaleye teklif verenin şirketimizin imza yetkilisi olduğunu, e-ihalenin tarafımızca kazanılması halinde 7 g&uuml;n i&ccedil;inde s&ouml;zleşmeyi imzalayacağımızı, s&ouml;zleşmenin 7 g&uuml;n i&ccedil;inde imzalanmaması halinde ikinci en iyi teklif verene ihalenin verilebileceğini kabul, beyan ve taahh&uuml;t ederiz. Gerekli durumlarda ihale s&uuml;resi işveren tarafından uzatılabilmektedir.</p>']
**delivery_required** | **float** | Define if delivery is required for the auction.&lt;br&gt;1:Required&lt;br&gt;2:Not Required | 
**delivery_date** | **string** | Delivery date in terms of YYYY-MM-DD format. | [optional] 
**reminder** | [**\Swagger\Client\Model\AuctionNewReminder**](AuctionNewReminder.md) |  | [optional] 
**publish** | **float** | Draft the auction or publish it. Published auctions will be visible by the bidders.&lt;br&gt;1:Publish&lt;br&gt;2:Draft | 
**list_price** | **float** | Indicate if you are attaching list prices to products.&lt;br&gt;1:Not Included&lt;br&gt;2:Included | [optional] 
**auction_items** | [**\Swagger\Client\Model\AuctionNewAuctionItems[]**](AuctionNewAuctionItems.md) |  | 
**auction_conditions** | [**\Swagger\Client\Model\AuctionNewAuctionConditions[]**](AuctionNewAuctionConditions.md) |  | [optional] 
**bidders** | [**\Swagger\Client\Model\AuctionNewBidders[]**](AuctionNewBidders.md) |  | [optional] 
**bidder_groups** | [**\Swagger\Client\Model\AuctionNewBidderGroups[]**](AuctionNewBidderGroups.md) | If you attach a bidder group to an auction. All members of this group can bid in this auction. | [optional] 
**delivery_address** | **string** | Provide a delivery address to your auction.&lt;br&gt;Required only if deliveryRequired is true! | [optional] 
**note** | **string** | Attach a note for your bidders to see.&lt;br&gt;Example: Please place your bids with VAT included prices. | [optional] 
**department_id** | **string** | Department or Project ID. | 
**auto_time_extension** | [**\Swagger\Client\Model\AuctionNewAutoTimeExtension**](AuctionNewAutoTimeExtension.md) |  | [optional] 
**bid_change_limit** | **float** | Limit bidders to increase to decrease their bids depending on the Auction type.&lt;br&gt;1:No Limit&lt;br&gt;2:Apply Limit | [optional] 
**request_delivery_date_for_items** | **string** |  | [optional] [default to '1']
**visible_offers** | **string** | Number of lowest/highest number of offers to bidders.&lt;br&gt;Only available in Classic Auction types. | [optional] [default to '1']
**visible_rank** | **float** | Allow bidders to see their rank in total amount.&lt;br&gt;Only available in British Auction types. | [optional] 
**transport_type** | **string** | Transport type of the items used in Auction. | [optional] 
**payment_type** | **string** | Payment type of the items used in Auction. | [optional] 
**valid_until_date** | **string** | Valid until date of the items used in Auction. | [optional] 
**bid_limit** | **float** | Maximum/Minimum bid limit. Depending on the auction type it can be reverse or forward change. | [optional] 
**invite_mail_body** | **string** | The content of the outgoing mail when the auction is published. | [optional] 
**invite_mail_subject** | **string** | The subject of the outgoing mail when the auction is published. | 
**files** | [**\Swagger\Client\Model\ProcurementRequestNewFiles[]**](ProcurementRequestNewFiles.md) | Attach files in the auction. | [optional] 
**auto_start** | **float** | Activate if you want the auction to start automatically. | [optional] 
**auto_end** | **float** | Activate if you want the auction to end automatically. | [optional] 
**vat_rate** | **float** | Activate if you want item-based vat rate. | [optional] 
**bidder_vat_rate** | **float** | Activate if you want bidders to provide item-based vat rates. | [optional] 
**item_files** | **float** | Indicate if you are attaching files to items. | [optional] 
**bid_change_type** | **float** | 1: Write bid amount.&lt;br&gt;2: Change amount button. | 
**change_amounts** | [**\Swagger\Client\Model\AuctionNewChangeAmounts[]**](AuctionNewChangeAmounts.md) |  | [optional] 
**time_type** | **float** | Auction time type. &lt;br&gt;1: Auction times are processed in minutes.&lt;br&gt;2: Auction times are processed in seconds. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


