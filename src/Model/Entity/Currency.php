<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Currency Entity
 *
 * @property int $id
 * @property string $name
 *
 * @property \App\Model\Entity\FactorajesContractsInvoice[] $factorajes_contracts_invoices
 * @property \App\Model\Entity\FactorajesContractsInvoicesCopy[] $factorajes_contracts_invoices_copy
 * @property \App\Model\Entity\FactorajesContractsInvoicesCopy2[] $factorajes_contracts_invoices_copy2
 * @property \App\Model\Entity\FactorajesContractsInvoicesVoucher[] $factorajes_contracts_invoices_vouchers
 * @property \App\Model\Entity\FactorajesContractsInvoicesVouchersDetail[] $factorajes_contracts_invoices_vouchers_details
 */
class Currency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
