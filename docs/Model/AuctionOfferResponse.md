# AuctionOfferResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the offer. | [optional] 
**offer_price** | **float** | Total price given to auction items. | [optional] 
**offer_discount** | **float** | Total discount given to offer price. | [optional] 
**note** | **string** | Note of the offer. | [optional] 
**offered_date** | **string** | The date the offer was given. YYYY-MM-DD HH:MM:SS format. | [optional] 
**transport_type** | **string** | Transport type the bidder chooses. | [optional] 
**payment_type** | **object** | Payment type the bidder chooses. | [optional] 
**delivery_date** | **string** | Delivery date the bidder chooses of YYYY-MM-DD HH:MM:SS format. | [optional] 
**valid_until_date** | **string** | Valid until date the bidder chooses of YYYY-MM-DD HH:MM:SS format. | [optional] 
**deleted_offer** | **object** | The deletion status of the offer. | [optional] 
**bidder** | **object** | Bidder information of the offered bidder. | [optional] 
**offer_items** | [**\Swagger\Client\Model\AuctionOfferItemResponse[]**](AuctionOfferItemResponse.md) |  | [optional] 
**offer_vat_price** | **float** | Total vat price given to bid. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


