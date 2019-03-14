# AuctionNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the auction. | [optional] 
**type** | **float** | Defines the auction type. Examples&lt;br&gt;1:Reverse Classic Auction&lt;br&gt;3:Reverse British Auction&lt;br&gt;4:Reverse Sealed Auction&lt;br&gt;5:Reverse Sealed Enveloped Auction | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Date of the auction of YYYY-MM-DD format. | [optional] 
**time** | **string** | Time of the day when auction will be ready to start. | [optional] [default to '13:00']
**duration** | **float** | Duration of the auction. Max: 7 days. | [optional] 
**budget** | **float** | Budget of the auction. Only used for internal reporting tools. | [optional] 
**minimumChange** | **float** | Minimum amount of change for the next bid.&lt;br&gt;Depending on the auction type it can be reverse or forward change. | [optional] 
**currency** | **string** | Currency type of the Auction. Bidders will give their bids on this currency. | [optional] 
**agreementText** | **string** | Agreement Text that bidders have to accept before participating in the auction. | [optional] [default to '<p>Katılımcısı olacağımız E-ihaleye ait ihale dosyasında bulunan t&uuml;m &ccedil;izim ve d&ouml;k&uuml;manları eksiksiz olarak temin ettiğimizi, incelediğimizi ve bu ihale şartları ile ihaleye katılım davetinizi kabul ederek teklif vereceğimizi, e-ihaleye teklif verenin şirketimizin imza yetkilisi olduğunu, e-ihalenin tarafımızca kazanılması halinde 7 g&uuml;n i&ccedil;inde s&ouml;zleşmeyi imzalayacağımızı, s&ouml;zleşmenin 7 g&uuml;n i&ccedil;inde imzalanmaması halinde ikinci en iyi teklif verene ihalenin verilebileceğini kabul, beyan ve taahh&uuml;t ederiz. Gerekli durumlarda ihale s&uuml;resi işveren tarafından uzatılabilmektedir.</p>']
**deliveryRequired** | **float** | Define if delivery is required for the auction.&lt;br&gt;1:Required&lt;br&gt;2:Not Required | [optional] 
**deliveryDate** | [**\DateTime**](\DateTime.md) | Delivery date in terms of YYYY-MM-DD format. | [optional] 
**reminder** | [**\Jetract\Model\AuctionNewReminder**](AuctionNewReminder.md) |  | [optional] 
**publish** | **float** | Draft the auction or publish it. Published auctions will be visible by the bidders.&lt;br&gt;1:Publish&lt;br&gt;2:Draft | [optional] 
**listPrice** | **float** | Indicate if you are attaching list prices to products.&lt;br&gt;1:Not Included&lt;br&gt;2:Included | [optional] 
**auctionItems** | [**\Jetract\Model\AuctionNewAuctionItems[]**](AuctionNewAuctionItems.md) |  | [optional] 
**auctionConditions** | [**\Jetract\Model\AuctionNewAuctionConditions[]**](AuctionNewAuctionConditions.md) |  | [optional] 
**bidders** | [**\Jetract\Model\AuctionNewBidders[]**](AuctionNewBidders.md) |  | [optional] 
**bidderGroups** | [**\Jetract\Model\AuctionNewBidderGroups[]**](AuctionNewBidderGroups.md) | If you attach a bidder group to an auction. All members of this group can bid in this auction. | [optional] 
**deliveryAddress** | **string** | Provide a delivery address to your auction.&lt;br&gt;Required only if deliveryRequired is true! | [optional] 
**note** | **string** | Attach a note for your bidders to see.&lt;br&gt;Example: Please place your bids with VAT included prices. | [optional] 
**departmentID** | **string** | Department or Project ID. | [optional] 
**autoTimeExtension** | [**\Jetract\Model\AuctionNewAutoTimeExtension**](AuctionNewAutoTimeExtension.md) |  | [optional] 
**bidChangeLimit** | **float** | Limit bidders to increase to decrease their bids depending on the Auction type.&lt;br&gt;1:No Limit&lt;br&gt;2:Apply Limit | [optional] 
**requestDeliveryDateForItems** | **float** |  | [optional] 
**visibleOffers** | **float** | Number of lowest/highest number of offers to bidders.&lt;br&gt;Only available in Classic Auction types. | [optional] 
**visibleRank** | **bool** | Allow bidders to see their rank in total amount.&lt;br&gt;Only available in British Auction types. | [optional] [default to false]
**transportType** | **string** | Transport type of the items used in Auction. | [optional] 
**paymentType** | **string** | Payment type of the items used in Auction. | [optional] 
**validUntilDate** | [**\DateTime**](\DateTime.md) | Valid until date of the items used in Auction. | [optional] 
**bidLimit** | **float** | Maximum/Minimum bid limit. Depending on the auction type it can be reverse or forward change. | [optional] 
**inviteMailBody** | **string** | The content of the outgoing mail when the auction is published. | [optional] 
**inviteMailTitle** | **string** | The subject of the outgoing mail when the auction is published. | [optional] 
**files** | [**\Jetract\Model\AuctionAttachFilesFiles[]**](AuctionAttachFilesFiles.md) | Attach files in the auction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


