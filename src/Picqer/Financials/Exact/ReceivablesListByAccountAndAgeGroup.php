<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReceivablesListByAccountAndAgeGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesListByAccountAndAgeGroup
 *
 * @property int64 $HID Primary key, human readable ID
 * @property string $AccountCode Code of Account
 * @property string $AccountId Reference to the account
 * @property string $AccountName Name of Account
 * @property float $Amount Amount
 * @property float $AmountInTransit Amount in transit
 * @property string $CurrencyCode Code of Currency
 * @property string $Description Description
 * @property string $DueDate Date the invoice is due (This due date is not the discount due date)
 * @property int $EntryNumber Entry number
 * @property string $Id Obsolete
 * @property string $InvoiceDate Invoice date
 * @property int $InvoiceNumber Invoice number. The value is 0 when the invoice number of the linked transaction is empty.
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $YourRef Your reference
 */
class ReceivablesListByAccountAndAgeGroup extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'HID';

    protected $fillable = [
        'HID',
        'AccountCode',
        'AccountId',
        'AccountName',
        'Amount',
        'AmountInTransit',
        'CurrencyCode',
        'Description',
        'DueDate',
        'EntryNumber',
        'Id',
        'InvoiceDate',
        'InvoiceNumber',
        'JournalCode',
        'JournalDescription',
        'YourRef',
    ];

    protected $url = 'read/financial/ReceivablesListByAccountAndAgeGroup?accountId={Edm.Guid}&ageGroup={Edm.Int32}';
}
