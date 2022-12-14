=== Woo Mercado Pago Module Oficial ===
Contributors: mercadopago, mercadolivre, claudiosanches
Donate link: https://www.mercadopago.com.br/developers/
Tags: ecommerce, mercadopago, woocommerce
Requires at least: WooCommerce 2.6.x
Tested up to: WooCommerce 3.0.0
Stable tag: 2.2.19
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Offer to your clients the best experience in e-Commerce by using Mercado Pago as your payment method.

== Description ==

This module enables WooCommerce to use Mercado Pago as a payment method for purchases in your e-commerce store. By offering a nice set of tools like LatAm support, several card acquires, tickets, discounts, subscriptions, and many others e-Commerce features, this plugin wants to bring the best experience in payment checkouts.

= Why chose Mercado Pago =
Mercado Pago owns the highest security standards with PCI certification level 1 and a specialized internal team working on fraud analysis. With Mercado Pago, you will be able to accept payments from the most common brands of credit card, offer purchase installments options and receive your payment with antecipation. You can also enable your customers to pay in the web or in their mobile devices.

= Mercado Pago Main Features =
* Online and real-time processment through IPN/Webhook mechanism;
* High approval rate with a robust fraud analysis;
* Potential new customers with a base of more than 120 millions of users in Latin America;
* PCI Level 1 Certification;
* Support to major credit card brands;
* Payment installments;
* Anticipation of receivables in D+2 or D+14 (According to Mercado Pago terms and conditions);
* Payment in one click with Mercado Pago basic and custom checkouts;
* Payment via tickets;
* Subscriptions;
* Seller's Protection Program.

== Installation ==

You have two ways to install this module: from your WordPress Store, or by downloading and manually copying the module directory.

= Install from WordPress =
1. On your store administration, go to **Plugins** option in sidebar;
2. Click in **Add New** button and type "Woo Mercado Pago Module" in the **Search Plugins** text field. Press Enter;
3. You should find the module read to be installed. Click install.

= Manual Download =
1. Get the module sources from a repository (<a href="https://github.com/mercadopago/cart-woocommerce/archive/master.zip">Github</a> or <a href="https://downloads.wordpress.org/plugin/woo-mercado-pago-module.2.2.19.zip">WordPress Plugin Directory</a>);
2. Unzip the folder and find "woo-mercado-pago-module" directory;
3. Copy "woo-mercado-pago-module" directory to **[WordPressRootDirectory]/wp-content/plugins/** directory.

To confirm that your module is really installed, you can click in **Plugins** item in the store administration menu, and check your just installed module. Just click **enable** to activate it and you should receive the message "Plugin enabled." as a notice in your WordPress.

= Configuration =
1. On your store administration, go to **WooCommerce > Settings > Checkout** tab. In **Checkout Options**, you can find configurations for **Mercado Pago - Basic Checkout**, **Mercado Pago - Custom Checkout**, and **Mercado Pago - Ticket**.
	* To get your **Client_id** and **Client_secret** for your country, you can go to: <a href="https://www.mercadopago.com/mla/account/credentials?type=basic">Argentina</a>, <a href="https://www.mercadopago.com/mlb/account/credentials?type=basic">Brazil</a>, <a href="https://www.mercadopago.com/mlc/account/credentials?type=basic">Chile</a>, <a href="https://www.mercadopago.com/mco/account/credentials?type=basic">Colombia</a>, <a href="https://www.mercadopago.com/mlm/account/credentials?type=basic">Mexico</a>, <a href="https://www.mercadopago.com/mpe/account/credentials?type=basic">Peru</a>, <a href="https://www.mercadopago.com/mlu/account/credentials?type=basic">Uruguay</a>, and <a href="https://www.mercadopago.com/mlv/account/credentials?type=basic">Venezuela</a>.
	* And to get your **Public Key**/**Access Token** you can go to: <a href="https://www.mercadopago.com/mla/account/credentials?type=custom">Argentina</a>, <a href="https://www.mercadopago.com/mlb/account/credentials?type=custom">Brazil</a>, <a href="https://www.mercadopago.com/mlc/account/credentials?type=custom">Chile</a>, <a href="https://www.mercadopago.com/mco/account/credentials?type=custom">Colombia</a>, <a href="https://www.mercadopago.com/mlm/account/credentials?type=custom">Mexico</a>, <a href="https://www.mercadopago.com/mpe/account/credentials?type=custom">Peru</a>, <a href="https://www.mercadopago.com/mlu/account/credentials?type=custom">Uruguay</a>, and <a href="https://www.mercadopago.com/mlv/account/credentials?type=custom">Venezuela</a>.
2. For the solutions **Mercado Pago - Basic Checkout**, **Mercado Pago - Custom Checkout**, and **Mercado Pago - Ticket**, you can:
	* Enable/Disable your plugin, so you can allow specific solutions for your business;
	* Set up your credentials (Client_id/Client_secret for Basic Checkout and Subscriptions, Public Key/Access Token for Custom Checkout and Ticket);
	* Check your IPN URL, where you will get notified about payment updates;
	* Set the title of the payment option that will be shown to your customers;
	* Set the description of the payment option that will be shown to your customers;
	* Set the description that will be shown in your customer's invoice (for Custom Checkout and Ticket);
	* Set binary mode that when charging a credit card, only [approved] or [reject] status will be taken (for Custom Checkout);
	* Set the category of your store;
	* Set stock reduction behavior (for Ticket);
	* Set a prefix to identify your store, when you have multiple stores for only one Mercado Pago account;
	* Define how your customers will interact with Mercado Pago to pay their orders (Basic Checkout and Subscriptions);
	* Define discounts by payment method;
	* Configure the after-pay return behavior (Basic Checkout);
	* Configure the maximum installments allowed for your customers (for Basic Checkout);
	* Configure the payment acquirers that you want to not work with Mercado Pago (for Basic Checkout);
	* Configure call-back URLs for after-pay behavior (for Basic Checkout and Subscriptions);
	* Enable coupon of campaigns for discounts (for Custom Checkout and Ticket);
	* Enable currency conversion;
	* Enable/disable sandbox mode, where you can test your payments in Mercado Pago sandbox environment (for Basic Checkout and Custom Checkout);
	* Enables/disable system logs.

= In this video, we show how you can install and configure from your WordPress store =

[youtube https://www.youtube.com/watch?v=CgV9aVlx5SE]

== Frequently Asked Questions ==

= What is Mercado Pago? =
Please, take a look: https://vimeo.com/125253122

= Any questions? =
Please, check our FAQ at: https://www.mercadopago.com.br/ajuda/

== Screenshots ==

1. `Custom Checkout`

2. `One Click Payment`

3. `Tickets & Discounts`

4. `Plugin Options`

== Changelog ==

= v2.2.19 (29/11/2017) =
* Features
	- NOTICE: We're updating and migrating this project to WooCommerce-MercadoPago - https://wordpress.org/plugins/woocommerce-mercadopago/. We'll offer support and bug fixes for this project, but new features and improvements will be made only for v3.x and above.

= v2.2.18 (22/11/2017) =
* Bug fixes
	- Fixed a bug in the URL of javascript source for light-box window.

= v2.2.17 (13/11/2017) =
* Improvements
	- Improved webhook of ticket printing to a less generic one.
* Bug fixes
	- FIxed a bug related to payment status of tickets.

= v2.2.16 (23/10/2017) =
* Bug fixes
	- Fixed the absence of [zip_code] field in registered tickets for Brazil.

= v2.2.15 (22/09/2017) =
* Bug fixes
	- Synchronizing Mercado Pago account when WooCommerce back-office cancels an order.
* Improvements
	- Added CNPJ document for brazilian tickets;
	- Optimized error tracking.

= v2.2.14 (14/09/2017) =
* Bug fixes
	- Fixed a bug in Ticket form related with inconsistent use of variables of Custom Checkout form;
	- Not showing card issuer field for Chile as it is unnecessary.

= v2.2.13 (28/08/2017) =
* Bug fixes
	- Fixing a bug in Custom Checkout, that wasn't showing the form.

= v2.2.12 (14/08/2017) =
* Improvements
	- Improved layout alignment for custom checkout and tickets;
	- Added a checklist for platform statuses of cURL, SSL and PHP verification;
	- Added the ticket view after the checkout.
* Bug fixes
	- Fixed a bug that was locking inputs in ticket fields for Brazil.

= v2.2.11 (24/07/2017) =
* Improvements
	- Improved credential validation algorithm;
	- Added FEBRABAN rules for brazilian tickets.
* Bug fixes
	- Resolved a bug when converting currency.

= v2.2.10 (04/07/2017) =
* Bug fixes
	- Fixed a bug in subscriptions, where a recurrent product wasn't possible to be bought if its end-date is blank.

= v2.2.9 (29/06/2017) =
* Bug fixes
	- Fixed a bug in Mercado Envios for WooCommerce 3.x, involving use of undeclared variable.

= v2.2.8 (26/06/2017) =
* Improvements
	- Integrated error log API. This can help to debug any cURL requests;
	- Increased stability.

= v2.2.7 (01/06/2017) =
* Improvements
	- Optimizations in checkout JavaScript;
	- Additional checking for test users within checkout process.
* Bug fixes
	- Properly changing order status when paying with Basic Checkout using two cards.

= v2.2.6 (18/05/2017) =
* Improvements
	- Increased stability for internal payment process.
* Bug fixes
	- Fixed a bug related to shipping value not added to total amount;
	- Not showing ticket button when payment method is not applicable;
	- Removed unused snippet from ticket solution, handling an unexpected warning.

= v2.2.5 (08/05/2017) =
* Bug fixes
	- Added support for WooCommerce/WordPress functions to handle warnings;
	- Algorithm of Chile/Colombia when removing decimals.

= v2.2.4 (03/05/2017) =
* Improvements
	- Increased support to older versions of PHP;
	- Optimized calls of WordPress/WooCommerce specific functions.

= v2.2.3 (02/05/2017) =
* Bug fixes
	- Resolved a bug related to the missing menus in Appearance.

= v2.2.2 (27/04/2017) =
* Improvements
	- When using Mercado Envios, the plugin now sends an email with tracking ID to the merchant and customer.
* Bug fixes
	- Resolved a bug related with non-persisted data of Simple Products;
	- Resolved the status update for "in_procerss" in the basic checkout.

= v2.2.1 (13/04/2017) =
* Features
	- Discount by payment method. Merchants can give a discount to their customers if the payment is made with a given gateway.
* Improvements
	- Support for WooCommerce 3.0.0.

= v2.2.0 (03/04/2017) =
* Features
	- Recurrent Payments. This feature allow merchants to create subscriptions and charge their customers periodically. For now, available only to Argentina, Brazil and Mexico.

= v2.1.9 (23/03/2017) =
* Features
	- Mercado Envios for Basic Checkout. Now, merchants can use Mercado Envios services to ship products to their customers. For now, only available to Argentina, Brazil, and Mexico.

= v2.1.8 (13/02/2017) =
* Features
	- Rollout to Uruguay. This plugin is now supporting Uruguay for Basic Checkout and its local language translations.
* Improvements
	- Conformity with Argentina's E 51/2017 resolution to show up CFT/TEA amounts;
	- Removed decimals from Chile and Colombia currencies, as they aren't used.
* Bug fixes
	- Fixed and improved the coupon algorithm.

= v2.1.7 (12/12/2016) =
* Bug fixes
	- When ticket payment method was enabled, the button for print ticket was appearing for other methods.

= v2.1.6 (09/12/2016) =
* Features
	- Cancel/Refund API integration. Now, merchants can cancel and refund orders through store back-office. Options available in order details, order actions;
	- Back url (checkout callback) configurable in back-office for basic checkout solution.
* Improvements
	- Added option to select when (payment approval or order generation) to reduce stocks for tickets solution;
	- Payment with ticket with order description at finish.

= v2.1.5 (16/11/2016) =
* Improvements
	- Analytics of module settings.
* Bug fixes
	- Fixed issue in ticket solution that was printing [null] in ticket description.

= v2.1.4 (20/10/2016) =
* Features
	- Two Card Payment Configuration. Merchants can configure this feature in back-office through settings page.
* Improvements
	- Removed some redundant notice messages;
	- Improved algorithm to process settings page flow and checkout;
	- Refactored code to meet WordPress coding standards.
* Bug fixes
	- Fixed a SSL issue related to ticket solution (the open locker) in gateway selection.

= v2.1.3 (15/09/2016) =
* Improvements
	- A few improvements in performance;
	- Improved translations;
	- Improved security with URL access via SSL in all module flow.

= v2.1.2 (18/08/2016) =
* Improvements
	- Improved performance for both client and server sides.
* Bug fixes
	- Fixed the product list for multiple items in Basic Checkout form.

= v2.1.1 (02/08/2016) =
* Improvements
	- Improved log messages when applying discounts;
	- Added a link to reprint ticket in customer account order page.
* Bug fixes
	- Fixed tax fee for shipments.

= v2.1.0 (25/07/2016) =
* Features
	- Mercado Pago Discount Coupon. This feature lets Mercado Pago and merchants to use campaigns of discount created in their Mercado Pago accounts. Want to see how it works on-the-fly? Please check this video: <a href="https://www.youtube.com/watch?v=eQ2YYoWvzKQ">Discount Coupons</a>;
	- Currency Conversion. Added an option to try to use Mercado Pago currency ratio, to automatically convert any currencies to supported/used currency.
* Improvements
	- Improved credentials validation algorithm;
	- Improved checkout data, with more clean and sanitized info for product image and description.

= v2.0.5 (07/07/2016) =
* Improvements
	- Improved IPN behavior to handle consistent messages with absent IDs.
* Bug fixes
	- Fixed the informative URL of ticket IPN in admin page.

= v2.0.4 (29/06/2016) =
* Improvements
	- Added a message in admin view when currency is different from used locally (used in credential's country).
* Bug fixes
	- We have wrote a snippet to handle the absent shipment cost problem;
	- Fixed some URLs of the credentials link for Basic Checkout.

= v2.0.3 (21/06/2016) =
* Bug fixes
	- Basic Checkout for WooCommerce v2.6.x. In WooCommerce v2.6.x, there was a bug related with the ampersand char that was wrongly converted to #38; on URLs and breaking the checkout flow. This update should place a fix to this problem.

= v2.0.2 (13/06/2016) =
* Features
	- Rollout to Peru. This plugin is now supporting Peru, which includes Basic Checkout, Custom Checkout, Tickets, and local language translations.
* Bug fixes
	- Fix a PHP version issue. It was reported to us an issue in a function that uses an assign made directly from an array field. This feature is available in PHP 5.4.x or above and we've made an update to support older versions;
	- Fix a tax issue. It wasn't been correctly added to the total value in Mercado Pago gateway.

= v2.0.1 (09/06/2016) =
* Features
	- Customer Cards (One Click Payment). This feature allows customers to proceed to checkout with only one click. As Mercado Pago owns PCI standards, it can securely store credit card sensitive data and so register the customer card in the first time he uses it. Next time the customer comes back, he can use his card again, only by inserting its CVV code. Want to see how it works on-the-fly? Please check this video: <a href="https://www.youtube.com/watch?v=_KB8CtDei_4">Custom Checkout + Customer Cards</a>.
* Improvements
	- SSL verifications for custom checkout and ticket. Custom Checkout and Ticket solutions can only be used with SSL certification. As the module behaves inconsistently if there is no SSL, we've put a watchdog to lock the solution if it is active without SSL;
	- Enabling any type of currency without disabling module (now, error message from API). Now, merchants have the option to use currencies of their choices in WooCommerce. Pay attention that Woo Mercado Pago will always set the currency related to the country of the Mercado Pago credentials.

= v2.0.0 (01/06/2016) =
* Features
	- Custom Checkout for LatAm. Offer a checkout fully customized to your brand experience with our simple-to-use payments API. Want to see how it works on-the-fly? Please check this video: <a href="https://www.youtube.com/watch?v=_KB8CtDei_4">Custom Checkout + Customer Cards</a>;
	- Ticket for LatAm. Now, customer can pay orders with bank tickets. Want to see how it works on-the-fly? Please check this video: <a href="https://www.youtube.com/watch?v=97VSVx5Uaj0">Tickets</a>.
* Improvements
	- Removed possibility to setting supportable but invalid currency. We've made a fix to prevent users to select a valid currency (such as ARS), but for a different country set by credentials origin (such as MLB - Mercado Pago Brazil).

= v1.0.5 (29/04/2016) =
* Improvements
	- Removal of extra shipment setup in checkout view. We have made a workaround to prevent an extra shipment screen to appear;
	- Translation to es_ES. Users can select Spain as module country, and translation should be ok.
* Bug fixes
	- Some bug fixes to stabilize the module.

= v1.0.4 (15/04/2016) =
* Improvements
	- Added a link to module settings page in plugin page. We've increased the module description informations. Also we've put a link to make a vote on us. Please, VOTE US 5 STARS. Any feedback will be welcome!
	- Fixed status change when processing with two cards. When using payments with two cards in Basic Checkout, the flow of order status wasn't correct in some cases when async IPN events occurs. We've made some adjustments to fix it.

= v1.0.3 (23/03/2016) =
* Improving algorithm when processing IPN
	Async calls and processment were refined.

= v1.0.2 (23/03/2016) =
* Bug fixes
	- IPN URL wasn???t triggered when topic=payment. Fixed a bug for some specific IPN messages of Mercado Pago.

= v1.0.1 (23/03/2016) =
* Improvements
	- Added payment ID in order custom fields information. Added some good informations about the payment in the order view;
	- Removed some unused files/code. We've made some code cleaning;
	- Redesign of the logic of preferences when creating cart, separating items. Itens are now separated in cart description. This increases the readability and consistency of informations in API level;
	- Proper information of shipment cost. Previously, the shipment cost was passed together with the cart total order amount.

= v1.0.0 (16/03/2016) =
* Features
	- LatAm Basic Checkout support. Great for merchants who want to get going quickly and easily. This is the basic payment integration with Mercado Pago. Want to see how it works on-the-fly? Please check this video: <a href="https://www.youtube.com/watch?v=DgOsX1eXjBU">Basic Checkout</a>;
	- Set of configurable fields and customizations. Title, description, category, and external reference customizations, integrations via iframe, modal, and redirection, with configurable auto-returning, max installments and payment method exclusion setup;
	- Sandbox and debug options. Basicer can test orders by enabling debug mode or using sandbox environment.

== Upgrade Notice ==

If you're migrating from version 1.x.x to 2.x.x, please be sure to make a backup of your site and database, as there are many additional features and modifications between these versions.
