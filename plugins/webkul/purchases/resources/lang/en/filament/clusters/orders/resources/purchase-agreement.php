<?php

return [
    'navigation' => [
        'title' => 'Purchase Agreements',
        'group' => 'Purchase',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'fields' => [
                    'vendor'                => 'Vendor',
                    'valid-from'            => 'Valid From',
                    'valid-to'              => 'Valid Until',
                    'buyer'                 => 'Buyer',
                    'reference'             => 'Reference',
                    'reference-placeholder' => 'eg. PO/123',
                    'agreement-type'        => 'Agreement Type',
                    'company'               => 'Company',
                    'currency'              => 'Currency',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Products',

                'fields' => [
                    'product'    => 'Product',
                    'quantity'   => 'Quantity',
                    'ordered'    => 'Ordered',
                    'uom'        => 'Unit of Measure',
                    'unit-price' => 'Unit Price',
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',
            ],

            'terms' => [
                'title' => 'Terms and Conditions',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'Agreement',
            'vendor'         => 'Vendor',
            'agreement-type' => 'Agreement Type',
            'buyer'          => 'Buyer',
            'company'        => 'Company',
            'valid-from'     => 'Valid From',
            'valid-to'       => 'Valid Until',
            'reference'      => 'Reference',
            'status'         => 'Status',
        ],

        'groups' => [
            'agreement-type' => 'Agreement Type',
            'vendor'         => 'Vendor',
            'state'          => 'State',
            'created-at'     => 'Created At',
            'updated-at'     => 'Updated At',
        ],

        'filters' => [
            'agreement'      => 'Agreement',
            'vendor'         => 'Vendor',
            'agreement-type' => 'Agreement Type',
            'buyer'          => 'Buyer',
            'company'        => 'Company',
            'valid-from'     => 'Valid From',
            'valid-to'       => 'Valid Until',
            'reference'      => 'Reference',
            'status'         => 'Status',
            'created-at'     => 'Created At',
            'updated-at'     => 'Updated At',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Purchase Agreement deleted',
                    'body'  => 'The purchase agreement has been deleted successfully.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Purchase Agreement deleted',
                    'body'  => 'The purchase agreement has been deleted successfully.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'General',

                'entries' => [
                    'vendor'                => 'Vendor',
                    'valid-from'            => 'Valid From',
                    'valid-to'              => 'Valid Until',
                    'buyer'                 => 'Buyer',
                    'reference'             => 'Reference',
                    'reference-placeholder' => 'eg. PO/123',
                    'agreement-type'        => 'Agreement Type',
                    'company'               => 'Company',
                    'currency'              => 'Currency',
                ],
            ],

            'metadata' => [
                'title' => 'Metadata',

                'entries' => [
                    'created-at' => 'Created At',
                    'created-by' => 'Created By',
                    'updated-at' => 'Updated At',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Products',

                'entries' => [
                    'product'    => 'Product',
                    'quantity'   => 'Quantity',
                    'ordered'    => 'Ordered',
                    'uom'        => 'Unit of Measure',
                    'unit-price' => 'Unit Price',
                ],
            ],

            'additional' => [
                'title' => 'Additional Information',
            ],

            'terms' => [
                'title' => 'Terms and Conditions',
            ],
        ],
    ],
];
