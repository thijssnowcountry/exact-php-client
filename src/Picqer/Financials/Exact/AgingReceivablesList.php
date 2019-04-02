<?php namespace Picqer\Financials\Exact;

/**
 * Class AgingReceivablesList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingReceivablesList
 *
 * @property Guid AccountId
 * @property String $AccountCode Code of the Account
 * @property String $AccountName Name of Account
 * @property Int32  $AgeGroup1
 * @property Double $AgeGroup1Amount
 * @property String $AgeGroup1Description
 * @property Int32  $AgeGroup2
 * @property Double $AgeGroup2Amount
 * @property String $AgeGroup2Description
 * @property Int32  $AgeGroup3
 * @property Double $AgeGroup3Amount
 * @property String $AgeGroup3Description
 * @property Int32  $AgeGroup4
 * @property Double $AgeGroup4Amount
 * @property String $AgeGroup4Description
 * @property String $CurrencyCode
 * @property Double $TotalAmount
 *
 */
class AgingReceivablesList extends Model
{

    use Query\Findable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
		'AccountId',
        'AccountCode',
		'AccountName',
		'AgeGroup1',
		'AgeGroup1Amount',
		'AgeGroup1Description',
		'AgeGroup2',
		'AgeGroup2Amount',
		'AgeGroup2Description',
		'AgeGroup3',
		'AgeGroup3Amount',
		'AgeGroup3Description',
		'AgeGroup4',
		'AgeGroup4Amount',
		'AgeGroup4Description',
		'CurrencyCode',
        'TotalAmount'
    ];

    protected $url = 'read/financial/AgingReceivablesList';

}