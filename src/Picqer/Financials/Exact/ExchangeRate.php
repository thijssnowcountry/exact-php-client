<?php

namespace Picqer\Financials\Exact;

/**
 * Class Journal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialJournals
 *
 * @property Guid       $ID Primary Key
 * @property DateTime   $Created
 * @property Guid       $Creator User ID of creator
 * @property String     $CreatorFullName Name of creator
 * @property int32      $Division Division code
 * @property DateTime   $Modified Last modified date
 * @property Guid       $Modifier User ID of modifier
 * @property String     $ModifierFullName 	Name of modifier
 * @property Double     $Rate 	The exchange rate is stored as 1 TARGET CURRENCY = x SOURCE CURRENCY
 * @property String     $SourceCurrency  The foreign currency example GBP
 * @property String     $SourceCurrencyDescription Description of SourceCurrency
 * @property DateTime   $StartDate The date as of which the rate is valid. The rate is valid until a next rate is defined
 * @property String     $TargetCurrency The default currency of the division Example EUR
 * @property String     $TargetCurrencyDescription Description of TargetCurrency
  */
class ExchangeRate extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Rate',
        'SourceCurrency',
        'SourceCurrencyDescription',
        'StartDate',
        'TargetCurrency',
        'TargetCurrencyDescription'
    ];

    protected $url = '/financial/ExchangeRates';

}
