<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Addon_Info_Controller {

    public function register_routes() {
        register_rest_route('bookster-license-manager/v1','/addon-info', [
            'methods'  => 'GET',
            'callback' => [$this, 'get_data'],
            'permission_callback' => '__return_true',
        ]);
    }

    public function get_data() {
        return [
            [
                'slug' => 'bookster-stripe',
                'title' => 'Payment Gateway Stripe',
                'description' => 'Accept Payment with Stripe Gateway.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Payment', 'Integration'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-paypal',
                'title' => 'Payment Gateway Paypal',
                'description' => 'Accept Payment with Paypal Gateway.',
                'link' => 'https://wordpress.org/plugins/bookster-paypal',
                'tags' => ['Payment', 'Integration'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-taxation',
                'title' => 'Tax',
                'description' => 'Calculate Tax Rates for Services and Appointments.',
                'link' => 'https://wordpress.org/plugins/bookster-taxation',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.1',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-pricing',
                'title' => 'Pricing',
                'description' => 'Add Discounts, Fees, Happy Hours, and more to your Customers.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-extra-options',
                'title' => 'Bookster Extra Options',
                'description' => 'Offer Extra Products, Equipments to your Customers with Additional Fees.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-custom-fields',
                'title' => 'Custom Fields',
                'description' => 'Gather Additional Information from your Customers with Custom Fields.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-themes',
                'title' => 'Themes',
                'description' => 'Customize the Look and Feel of your Booking Page.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Design', 'Customize'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-location',
                'title' => 'Location',
                'description' => 'Offer Services at Multiple Locations with Maps Integration.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-reminder',
                'title' => 'Reminder',
                'description' => 'Send Reminder Emails/SMS to your Customers for their Appointments.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Integration'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-process',
                'title' => 'Booking Process',
                'description' => 'Change the Steps Order, Auto select specific Services, Agents, and Locations.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-template',
                'title' => 'Booking Template',
                'description' => 'Customize each booking form step Layout, and Design.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Design'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-deposit',
                'title' => 'Deposit Payment',
                'description' => 'Accept partial payment from your Customers.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking', 'Payment'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-quickstart',
                'title' => 'Quickstart',
                'description' => 'Import prebuilt templates to your Booking website, and get started in minutes.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Design'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-coupon',
                'title' => 'Coupon',
                'description' => 'Offer Coupons to your Customers with Discounts and Special Offers.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking', 'Marketing'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-group',
                'title' => 'Group Booking',
                'description' => 'Timeslot accepts multiple bookings. Useful for classes, workshops, and events.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Booking'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-toolkit-block',
                'title' => 'Design Toolkit Block Editor',
                'description' => 'Design Toolkit for Block Editor. Various Patterns, Blocks to Design your Booking Page.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Design'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-toolkit-elementor',
                'title' => 'Design Toolkit Elementor',
                'description' => 'Design Toolkit for Elementor. Various Template, Widgets to Design your Booking Page.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Design'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-google',
                'title' => 'Google Calendar and Meet',
                'description' => 'Sync Agent Bookings with Google Calendar and Meet.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Integration'],
                'releaseStatus' => 'released',
                'latestVersion' => '2.0.0',
                'minBooksterVersion' => '2.0.0',
                'maxBooksterVersion' => '3.0.0'
            ],
            [
                'slug' => 'bookster-notice-sms-twillio',
                'title' => 'SMS Notifications via Twillio',
                'description' => 'Support SMS Notifications with Twillio.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Integration'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ],
            [
                'slug' => 'bookster-webhook',
                'title' => 'Webhook',
                'description' => 'Integrate with external functionalities using Webhook.',
                'link' => 'https://wpbookster.com/addons',
                'tags' => ['Integration'],
                'releaseStatus' => 'coming_soon',
                'latestVersion' => '',
                'minBooksterVersion' => '',
                'maxBooksterVersion' => ''
            ]
        ];
    }
}

add_action('rest_api_init', function () {
    $controller = new Addon_Info_Controller();
    $controller->register_routes();
});