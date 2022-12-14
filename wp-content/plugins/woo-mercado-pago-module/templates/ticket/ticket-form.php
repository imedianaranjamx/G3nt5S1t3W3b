<?php

/**
 * Part of Woo Mercado Pago Module
 * Author - Mercado Pago
 * Developer - Marcelo Tomio Hama / marcelo.hama@mercadolivre.com
 * Copyright - Copyright(c) MercadoPago [https://www.mercadopago.com]
 * License - https://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div width="100%" style="margin:1px; padding:36px 36px 16px 36px; background:white;">
	<img class="logo" src="<?php echo ($images_path . 'mplogo.png'); ?>" width="156" height="40" />
	<?php if ( count( $payment_methods ) > 1 ) : ?>
		<img class="logo" src="<?php echo ($images_path . 'boleto.png'); ?>"
		width="90" height="40" style="float:right;"/>
	<?php else : ?>
		<?php foreach ( $payment_methods as $payment ) : ?>
			<img class="logo" src="<?php echo $payment['secure_thumbnail']; ?>" width="90" height="40"
			style="float:right;"/>
		<?php endforeach; ?>
	<?php endif; ?>
</div>

<fieldset id="mercadopago-form" style="background:white;">

	<!-- coupom -->
	<div class="mp-box-inputs mp-line form-row" id="mercadopago-form-coupon-ticket" style="margin-bottom: 16px;" >
		<div class="form-col-8">
			<label for="couponCodeLabel"><?php echo $form_labels['form']['coupon_of_discounts']; ?></label>
			<input type="text" id="couponCodeTicket" name="mercadopago_ticket[coupon_code]"
				autocomplete="off" maxlength="24" style="margin-bottom: 8px;"/>
			<span class="mp-discount" id="mpCouponApplyedTicket" ></span>
			<span class="mp-error" id="mpCouponErrorTicket" ></span>
		</div>
		<div class="form-col-4">
			<label >&nbsp;</label>
			<input type="button" class="button" id="applyCouponTicket" value="<?php echo $form_labels['form']['apply']; ?>">
		</div>
	</div>

	<!-- payment method -->
	<div id="mercadopago-form-ticket" class="mp-box-inputs mp-line">
		<div id="form-ticket">
			<div class="form-row" style="margin-bottom:16px;">
				<div class="form-col-1"> </div>
				<div class="form-col-4">
					<input type="radio" name="mercadopago_ticket[docType]" class="MPv1Ticket-docType"
						id="MPv1Ticket-docType-fisica" value="CPF" style="width:24px; height:24px;" checked="checked">
						<?php echo $form_labels["form"]["fisicalPerson"]; ?>
					</input>
				</div>
				<div class="form-col-2"> </div>
				<div class="form-col-4">
					<input type="radio" name="mercadopago_ticket[docType]" class="MPv1Ticket-docType"
						id="MPv1Ticket-docType-juridica" value="CNPJ" style="width:24px; height:24px;">
						<?php echo $form_labels["form"]["legalPerson"]; ?>
					</input>
				</div>
				<div class="form-col-1"> </div>
			</div>
			<div class="form-row">
				<div class="form-col-4" id="box-firstname">
					<label for="firstname" class="title-name"><?php echo $form_labels['form']['name']; ?><em class="obrigatorio"> *</em></label>
					<label for="firstname" class="title-razao-social"><?php echo $form_labels['form']['socialName']; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['firstname']; ?>"
						id="firstname" class="form-control-mine" name="mercadopago_ticket[firstname]">
					<span class="erro_febraban" data-main="#firstname" id="error_firstname"><?php echo $form_labels["error"]["FEB001"]; ?></span>
				</div>
				<div class="form-col-4" id="box-lastname">
					<label for="lastname"><?php echo $form_labels["form"]["surname"]; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['lastname']; ?>"
						id="lastname" class="form-control-mine" name="mercadopago_ticket[lastname]">
					<span class="erro_febraban" data-main="#lastname" id="error_lastname"><?php echo $form_labels["error"]["FEB002"]; ?></span>
				</div>
				<div class="form-col-4" id="box-docnumber">
					<label for="cpfcnpj" class="title-cpf"><?php echo $form_labels['form']['docNumber']; ?><em class="obrigatorio"> *</em></label>
					<label for="cpfcnpj" class="title-cnpj"><?php echo $form_labels['form']['docNumberLegal']; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['docNumber']; ?>"
						id="cpfcnpj" class="form-control-mine" name="mercadopago_ticket[docNumber]">
					<span class="erro_febraban" data-main="#cpfcnpj" id="error_docNumber"><?php echo $form_labels["error"]["FEB003"]; ?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-8">
					<label for="address"><?php echo $form_labels["form"]["address"]; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['address']; ?>"
						id="address" class="form-control-mine" name="mercadopago_ticket[address]">
					<span class="erro_febraban" data-main="#address" id="error_address"><?php echo $form_labels["error"]["FEB004"]; ?></span>
				</div>
				<div class="form-col-4">
					<label for="number"><?php echo $form_labels["form"]["number"]; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['number']; ?>"
						id="number" class="form-control-mine" name="mercadopago_ticket[number]">
					<span class="erro_febraban" data-main="#number" id="error_number"><?php echo $form_labels["error"]["FEB005"]; ?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-col-4">
					<label for="city"><?php echo $form_labels["form"]["city"]; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['city']; ?>"
						id="city" class="form-control-mine" name="mercadopago_ticket[city]">
					<span class="erro_febraban" data-main="#city" id="error_city"><?php echo $form_labels["error"]["FEB006"]; ?></span>
				</div>
				<div class="form-col-4">
					<label for="state"><?php echo $form_labels["form"]["state"]; ?><em class="obrigatorio"> *</em></label>
					<select name="mercadopago_ticket[state]" id="state" class="form-control-mine" style="width: 100%;">
						<option value="" <?php if ($form_labels["febraban"]["state"] == "") {echo 'selected="selected"';} ?>><?php echo $form_labels["form"]["label_choose"]; ?></option>
						<option value="AC" <?php if ($form_labels["febraban"]['state'] == "AC") {echo 'selected="selected"';} ?>>Acre</option>
						<option value="AL" <?php if ($form_labels["febraban"]["state"] == "AL") {echo 'selected="selected"';} ?>>Alagoas</option>
						<option value="AP" <?php if ($form_labels["febraban"]["state"] == "AP") {echo 'selected="selected"';} ?>>Amap??</option>
						<option value="AM" <?php if ($form_labels["febraban"]["state"] == "AM") {echo 'selected="selected"';} ?>>Amazonas</option>
						<option value="BA" <?php if ($form_labels["febraban"]["state"] == "BA") {echo 'selected="selected"';} ?>>Bahia</option>
						<option value="CE" <?php if ($form_labels["febraban"]["state"] == "CE") {echo 'selected="selected"';} ?>>Cear??</option>
						<option value="DF" <?php if ($form_labels["febraban"]["state"] == "DF") {echo 'selected="selected"';} ?>>Distrito Federal</option>
						<option value="ES" <?php if ($form_labels["febraban"]["state"] == "ES") {echo 'selected="selected"';} ?>>Esp??rito Santo</option>
						<option value="GO" <?php if ($form_labels["febraban"]["state"] == "GO") {echo 'selected="selected"';} ?>>Goi??s</option>
						<option value="MA" <?php if ($form_labels["febraban"]["state"] == "MA") {echo 'selected="selected"';} ?>>Maranh??o</option>
						<option value="MT" <?php if ($form_labels["febraban"]["state"] == "MT") {echo 'selected="selected"';} ?>>Mato Grosso</option>
						<option value="MS" <?php if ($form_labels["febraban"]["state"] == "MS") {echo 'selected="selected"';} ?>>Mato Grosso do Sul</option>
						<option value="MG" <?php if ($form_labels["febraban"]["state"] == "MG") {echo 'selected="selected"';} ?>>Minas Gerais</option>
						<option value="PA" <?php if ($form_labels["febraban"]["state"] == "PA") {echo 'selected="selected"';} ?>>Par??</option>
						<option value="PB" <?php if ($form_labels["febraban"]["state"] == "PB") {echo 'selected="selected"';} ?>>Para??ba</option>
						<option value="PR" <?php if ($form_labels["febraban"]["state"] == "PR") {echo 'selected="selected"';} ?>>Paran??</option>
						<option value="PE" <?php if ($form_labels["febraban"]["state"] == "PE") {echo 'selected="selected"';} ?>>Pernambuco</option>
						<option value="PI" <?php if ($form_labels["febraban"]["state"] == "PI") {echo 'selected="selected"';} ?>>Piau??</option>
						<option value="RJ" <?php if ($form_labels["febraban"]["state"] == "RJ") {echo 'selected="selected"';} ?>>Rio de Janeiro</option>
						<option value="RN" <?php if ($form_labels["febraban"]["state"] == "RN") {echo 'selected="selected"';} ?>>Rio Grande do Norte</option>
						<option value="RS" <?php if ($form_labels["febraban"]["state"] == "RS") {echo 'selected="selected"';} ?>>Rio Grande do Sul</option>
						<option value="RO" <?php if ($form_labels["febraban"]["state"] == "RO") {echo 'selected="selected"';} ?>>Rond??nia</option>
						<option value="RA" <?php if ($form_labels["febraban"]["state"] == "RA") {echo 'selected="selected"';} ?>>Roraima</option>
						<option value="SC" <?php if ($form_labels["febraban"]["state"] == "SC") {echo 'selected="selected"';} ?>>Santa Catarina</option>
						<option value="SP" <?php if ($form_labels["febraban"]["state"] == "SP") {echo 'selected="selected"';} ?>>S??o Paulo</option>
						<option value="SE" <?php if ($form_labels["febraban"]["state"] == "SE") {echo 'selected="selected"';} ?>>Sergipe</option>
						<option value="TO" <?php if ($form_labels["febraban"]["state"] == "TO") {echo 'selected="selected"';} ?>>Tocantins</option>
					</select>
					<span class="erro_febraban" data-main="#state" id="error_state"><?php echo $form_labels["error"]["FEB007"]; ?></span>
				</div>
				<div class="form-col-4">
					<label for="zipcode"><?php echo $form_labels["form"]["zipcode"]; ?><em class="obrigatorio"> *</em></label>
					<input type="text" value="<?php echo $form_labels['febraban']['zipcode']; ?>"
						id="zipcode" class="form-control-mine" name="mercadopago_ticket[zipcode]"
						onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
					<span class="erro_febraban" data-main="#zipcode" id="error_zipcode"><?php echo $form_labels["error"]["FEB008"]; ?></span>
				</div>
			</div>
			<div class="form-col-12">
				<label>
					<span class="mensagem-febraban"><em class="obrigatorio">* </em><?php echo $form_labels["form"]["febraban_rules"]; ?></span>
				</label>
			</div>
		</div>

		<div style="padding:0px 36px 0px 36px; margin-left: -32px; margin-right: -32px;">
			<p>
				<?php
					if ( count( $payment_methods ) > 1 ) :
						echo $form_labels['form']['issuer_selection'];
					endif;
					echo $form_labels['form']['payment_instructions'];
				?>&nbsp;<?php
					echo $form_labels['form']['ticket_note'];
					if ( $is_currency_conversion > 0 ) :
	  					echo " (" . $form_labels['form']['payment_converted'] . " " .
						$woocommerce_currency . " " . $form_labels['form']['to'] . " " .
						$account_currency . ")";
					endif;
				?>
			</p>
			<?php if ( count( $payment_methods ) > 1 ) : ?>
				<div class="mp-box-inputs mp-col-100" >
					<?php $atFirst = true; ?>
					<?php foreach ( $payment_methods as $payment ) : ?>
						<div class="mp-box-inputs mp-line">
							<div id="paymentMethodId" class="mp-box-inputs mp-col-5">
								<input type="radio" class="input-radio" name="mercadopago_ticket[paymentMethodId]"
									style="display: block; height:16px; width:16px;" value="<?php echo $payment['id']; ?>"
								<?php if ( $atFirst ) : ?> checked="checked" <?php endif; ?> />
							</div>
							<div class="mp-box-inputs mp-col-75">
								<label>
									&nbsp;
									<img src="<?php echo $payment['secure_thumbnail']; ?>"
									alt="<?php echo $payment['name']; ?>" />
									&nbsp;
									<?php echo $payment['name']; ?>
								</label>
							</div>
						</div>
						<?php $atFirst = false; ?>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<div class="mp-box-inputs mp-col-100" style="display:none;">
					<select id="paymentMethodId" name="mercadopago_ticket[paymentMethodId]">
						<?php foreach ( $payment_methods as $payment ) : ?>
							<option value="<?php echo $payment['id']; ?>" style="padding: 8px;
							background: url('https://img.mlstatic.com/org-img/MP3/API/logos/bapropagos.gif')
							98% 50% no-repeat;"> <?php echo $payment['name']; ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			<?php endif; ?>

			<div class="mp-box-inputs mp-line">
				<div class="mp-box-inputs mp-col-25">
					<div id="mp-box-loading">
					</div>
				</div>
			</div>

			<!-- utilities -->
			<div class="mp-box-inputs mp-col-100" id="mercadopago-utilities">
				<input type="hidden" id="site_id" value="<?php echo $site_id; ?>" name="mercadopago_ticket[site_id]"/>
				<input type="hidden" id="amountTicket" value="<?php echo $amount; ?>" name="mercadopago_ticket[amount]"/>
				<input type="hidden" id="campaign_idTicket" name="mercadopago_ticket[campaign_id]"/>
				<input type="hidden" id="campaignTicket" name="mercadopago_ticket[campaign]"/>
				<input type="hidden" id="discountTicket" name="mercadopago_ticket[discount]"/>
			</div>

		</div>
	</div>
</fieldset>

<script type="text/javascript">

	( function() {

		var MPv1Ticket = {
			site_id: "",
			coupon_of_discounts: {
				discount_action_url: "",
				payer_email: "",
				default: true,
				status: false
			},
			inputs_to_create_discount: [
				"couponCodeTicket",
				"applyCouponTicket"
			],
			inputs_to_validate_ticket: [
				"firstname",
				"lastname",
				"docNumber",
				"address",
				"number",
				"city",
				"state",
				"zipcode"
			],
			selectors: {
				// coupom
				couponCode: "#couponCodeTicket",
				applyCoupon: "#applyCouponTicket",
				mpCouponApplyed: "#mpCouponApplyedTicket",
				mpCouponError: "#mpCouponErrorTicket",
				campaign_id: "#campaign_idTicket",
				campaign: "#campaignTicket",
				discount: "#discountTicket",
				// payment method and checkout
				paymentMethodId: "#paymentMethodId",
				amount: "#amountTicket",
				// other rules
				boxFirstName: "#box-firstname",
				boxLastName: "#box-lastname",
				boxDocNumber: "#box-docnumber",
				titleFirstName: ".title-name",
				titleFirstNameRazaoSocial: ".title-razao-social",
				titleDocNumber: ".title-cpf",
				titleDocNumberCNPJ: ".title-cnpj",
				radioTypeFisica: '#MPv1Ticket-docType-fisica',
				radioTypeJuridica: '#MPv1Ticket-docType-juridica',
				// febraban
				firstname: "#febrabanFirstname",
				lastname: "#febrabanLastname",
				cpfcnpj: "#cpfcnpj",
				address: "#febrabanAddress",
				number: "#febrabanNumber",
				city: "#febrabanCity",
				state: "#febrabanState",
				zipcode: "#febrabanZipcode",
				// form
				formCoupon: '#mercadopago-form-coupon-ticket',
				formTicket: '#form-ticket',
				box_loading: "#mp-box-loading",
				submit: "#btnSubmit",
				form: "#mercadopago-form-ticket"
			},
			text: {
				discount_info1: "You will save",
				discount_info2: "with discount from",
				discount_info3: "Total of your purchase:",
				discount_info4: "Total of your purchase with discount:",
				discount_info5: "*Uppon payment approval",
				discount_info6: "Terms and Conditions of Use",
				coupon_empty: "Please, inform your coupon code",
				apply: "Apply",
				remove: "Remove"
			},
			paths: {
				loading: "images/loading.gif",
				check: "images/check.png",
				error: "images/error.png"
			}
		}

		// === Coupon of Discounts

		MPv1Ticket.currencyIdToCurrency = function ( currency_id ) {
			if ( currency_id == "ARS" ) {
				return "$";
			} else if ( currency_id == "BRL" ) {
				return "R$";
			} else if ( currency_id == "COP" ) {
				return "$";
			} else if ( currency_id == "CLP" ) {
				return "$";
			} else if ( currency_id == "MXN" ) {
				return "$";
			} else if ( currency_id == "VEF" ) {
				return "Bs";
			} else if ( currency_id == "PEN" ) {
				return "S/";
			} else if ( currency_id == "UYU" ) {
				return "$U";
			} else {
				return "$";
			}
		}

		MPv1Ticket.checkCouponEligibility = function () {
			if ( document.querySelector( MPv1Ticket.selectors.couponCode ).value == "" ) {
				// Coupon code is empty.
	  			document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).style.display = "none";
				document.querySelector( MPv1Ticket.selectors.mpCouponError ).style.display = "block";
				document.querySelector( MPv1Ticket.selectors.mpCouponError ).innerHTML = MPv1Ticket.text.coupon_empty;
				MPv1Ticket.coupon_of_discounts.status = false;
				document.querySelector( MPv1Ticket.selectors.couponCode ).style.background = null;
				document.querySelector( MPv1Ticket.selectors.applyCoupon ).value = MPv1Ticket.text.apply;
				document.querySelector( MPv1Ticket.selectors.discount ).value = 0;
				// --- No cards handler ---
			} else if ( MPv1Ticket.coupon_of_discounts.status ) {
				// We already have a coupon set, so we remove it.
  				document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).style.display = "none";
				document.querySelector( MPv1Ticket.selectors.mpCouponError ).style.display = "none";
				MPv1Ticket.coupon_of_discounts.status = false;
				document.querySelector( MPv1Ticket.selectors.applyCoupon ).style.background = null;
				document.querySelector( MPv1Ticket.selectors.applyCoupon ).value = MPv1Ticket.text.apply;
				document.querySelector( MPv1Ticket.selectors.couponCode ).value = "";
				document.querySelector( MPv1Ticket.selectors.couponCode ).style.background = null;
				document.querySelector( MPv1Ticket.selectors.discount ).value = 0;
				// --- No cards handler ---
			} else {
				// Set loading.
				document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).style.display = "none";
				document.querySelector( MPv1Ticket.selectors.mpCouponError ).style.display = "none";
				document.querySelector( MPv1Ticket.selectors.couponCode ).style.background = "url(" + MPv1Ticket.paths.loading + ") 98% 50% no-repeat #fff";
				document.querySelector( MPv1Ticket.selectors.applyCoupon ).disabled = true;

				// Check if there are params in the url.
				var url = MPv1Ticket.coupon_of_discounts.discount_action_url;
				var sp = "?";
				if ( url.indexOf( "?" ) >= 0 ) {
					sp = "&";
				}
				url += sp + "site_id=" + MPv1Ticket.site_id;
				url += "&coupon_id=" + document.querySelector( MPv1Ticket.selectors.couponCode ).value;
				url += "&amount=" + document.querySelector( MPv1Ticket.selectors.amount ).value;
				url += "&payer=" + MPv1Ticket.coupon_of_discounts.payer_email;
				//url += "&payer=" + document.getElementById( "billing_email" ).value;

				MPv1Ticket.AJAX({
					url: url,
					method : "GET",
					timeout : 5000,
					error: function() {
						// Request failed.
						document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).style.display = "none";
						document.querySelector( MPv1Ticket.selectors.mpCouponError ).style.display = "none";
						MPv1Ticket.coupon_of_discounts.status = false;
						document.querySelector( MPv1Ticket.selectors.applyCoupon ).style.background = null;
						document.querySelector( MPv1Ticket.selectors.applyCoupon ).value = MPv1Ticket.text.apply;
						document.querySelector( MPv1Ticket.selectors.couponCode ).value = "";
						document.querySelector( MPv1Ticket.selectors.couponCode ).style.background = null;
						document.querySelector( MPv1Ticket.selectors.discount ).value = 0;
						// --- No cards handler ---
					},
					success : function ( status, response ) {
						if ( response.status == 200 ) {
							document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).style.display =
								"block";
							document.querySelector( MPv1Ticket.selectors.discount ).value =
								response.response.coupon_amount;
							document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).innerHTML =
								//"<div style='border-style: solid; border-width:thin; " +
								//"border-color: #009EE3; padding: 8px 8px 8px 8px; margin-top: 4px;'>" +
								MPv1Ticket.text.discount_info1 + " <strong>" +
								MPv1Ticket.currencyIdToCurrency( response.response.currency_id ) + " " +
								Math.round( response.response.coupon_amount * 100 ) / 100 +
								"</strong> " + MPv1Ticket.text.discount_info2 + " " +
								response.response.name + ".<br>" + MPv1Ticket.text.discount_info3 + " <strong>" +
								MPv1Ticket.currencyIdToCurrency( response.response.currency_id ) + " " +
								Math.round( MPv1Ticket.getAmountWithoutDiscount() * 100 ) / 100 +
								"</strong><br>" + MPv1Ticket.text.discount_info4 + " <strong>" +
								MPv1Ticket.currencyIdToCurrency( response.response.currency_id ) + " " +
								Math.round( MPv1Ticket.getAmount() * 100 ) / 100 + "*</strong><br>" +
								"<i>" + MPv1Ticket.text.discount_info5 + "</i><br>" +
								"<a href='https://api.mercadolibre.com/campaigns/" +
								response.response.id +
								"/terms_and_conditions?format_type=html' target='_blank'>" +
								MPv1Ticket.text.discount_info6 + "</a>";
							document.querySelector( MPv1Ticket.selectors.mpCouponError ).style.display =
								"none";
							MPv1Ticket.coupon_of_discounts.status = true;
							document.querySelector( MPv1Ticket.selectors.couponCode ).style.background =
								null;
							document.querySelector( MPv1Ticket.selectors.couponCode ).style.background =
								"url(" + MPv1Ticket.paths.check + ") 98% 50% no-repeat #fff";
							document.querySelector( MPv1Ticket.selectors.applyCoupon ).value =
								MPv1Ticket.text.remove;
							// --- No cards handler ---
							document.querySelector( MPv1Ticket.selectors.campaign_id ).value =
								response.response.id;
							document.querySelector( MPv1Ticket.selectors.campaign ).value =
								response.response.name;
						} else if ( response.status == 400 || response.status == 404 ) {
							document.querySelector( MPv1Ticket.selectors.mpCouponApplyed ).style.display = "none";
							document.querySelector( MPv1Ticket.selectors.mpCouponError ).style.display = "block";
							document.querySelector( MPv1Ticket.selectors.mpCouponError ).innerHTML = response.response.message;
							MPv1Ticket.coupon_of_discounts.status = false;
							document.querySelector(MPv1Ticket.selectors.couponCode).style.background = null;
							document.querySelector( MPv1Ticket.selectors.couponCode ).style.background = "url(" + MPv1Ticket.paths.error + ") 98% 50% no-repeat #fff";
							document.querySelector( MPv1Ticket.selectors.applyCoupon ).value = MPv1Ticket.text.apply;
							document.querySelector( MPv1Ticket.selectors.discount ).value = 0;
							// --- No cards handler ---
						}
						document.querySelector( MPv1Ticket.selectors.applyCoupon ).disabled = false;
					}
				});
			}
		}

		// === Initialization function

		MPv1Ticket.addListenerEvent = function( el, eventName, handler ) {
			if ( el.addEventListener ) {
				el.addEventListener( eventName, handler );
			} else {
				el.attachEvent( "on" + eventName, function() {
					handler.call( el );
				} );
			}
		};

		/*
		*
		* Utilities
		*
		*/

		MPv1Ticket.referer = (function () {
			var referer = window.location.protocol + "//" +
				window.location.hostname + ( window.location.port ? ":" + window.location.port: "" );
			return referer;
		})();

		MPv1Ticket.AJAX = function( options ) {
			var useXDomain = !!window.XDomainRequest;
			var req = useXDomain ? new XDomainRequest() : new XMLHttpRequest()
			var data;
			options.url += ( options.url.indexOf( "?" ) >= 0 ? "&" : "?" ) + "referer=" + escape( MPv1Ticket.referer );
			options.requestedMethod = options.method;
			if ( useXDomain && options.method == "PUT" ) {
				options.method = "POST";
				options.url += "&_method=PUT";
			}
			req.open( options.method, options.url, true );
			req.timeout = options.timeout || 1000;
			if ( window.XDomainRequest ) {
				req.onload = function() {
					data = JSON.parse( req.responseText );
					if ( typeof options.success === "function" ) {
						options.success( options.requestedMethod === "POST" ? 201 : 200, data );
					}
				};
				req.onerror = req.ontimeout = function() {
					if ( typeof options.error === "function" ) {
						options.error( 400, {
							user_agent:window.navigator.userAgent, error : "bad_request", cause:[]
						});
					}
				};
				req.onprogress = function() {};
			} else {
				req.setRequestHeader( "Accept", "application/json" );
				if ( options.contentType ) {
					req.setRequestHeader( "Content-Type", options.contentType );
				} else {
					req.setRequestHeader( "Content-Type", "application/json" );
				}
				req.onreadystatechange = function() {
					if ( this.readyState === 4 ) {
						if ( this.status >= 200 && this.status < 400 ) {
							// Success!
							data = JSON.parse( this.responseText );
							if ( typeof options.success === "function" ) {
								options.success( this.status, data );
							}
						} else if ( this.status >= 400 ) {
							data = JSON.parse( this.responseText );
							if ( typeof options.error === "function" ) {
								options.error( this.status, data );
							}
						} else if ( typeof options.error === "function" ) {
							options.error( 503, {} );
						}
					}
				};
			}
			if ( options.method === "GET" || options.data == null || options.data == undefined ) {
				req.send();
			} else {
				req.send( JSON.stringify( options.data ) );
			}
		}

		// Form validation

		var doSubmitTicket = false;

		MPv1Ticket.doPay = function(febraban) {
			if(!doSubmitTicket){
				doSubmitTicket=true;
				document.querySelector(MPv1Ticket.selectors.box_loading).style.background = "url("+MPv1Ticket.paths.loading+") 0 50% no-repeat #fff";
				btn = document.querySelector(MPv1Ticket.selectors.form);
				btn.submit();
			}
		}

		MPv1Ticket.validateInputsTicket = function(event) {
			event.preventDefault();
			MPv1Ticket.hideErrors();
			var valid_to_ticket = true;
			var $inputs = MPv1Ticket.getForm().querySelectorAll("[data-checkout]");
			var $inputs_to_validate_ticket = MPv1Ticket.inputs_to_validate_ticket;
			var febraban = [];
			var arr = [];
			for (var x = 0; x < $inputs.length; x++) {
				var element = $inputs[x];
				if($inputs_to_validate_ticket.indexOf(element.getAttribute("data-checkout")) > -1){
					if (element.value == -1 || element.value == "") {
						arr.push(element.id);
						valid_to_ticket = false;
					} else {
						febraban[element.id] = element.value;
					}
				}
			}
			if (!valid_to_ticket) {
				MPv1Ticket.showErrors(arr);
			} else {
				MPv1Ticket.doPay(febraban);
			}
		}

		MPv1Ticket.getForm = function(){
			return document.querySelector(MPv1Ticket.selectors.form);
		}

		MPv1Ticket.addListenerEvent = function(el, eventName, handler){
			if (el.addEventListener) {
				el.addEventListener(eventName, handler);
			} else {
				el.attachEvent("on" + eventName, function(){
					handler.call(el);
				});
			}
		};

		// Show/hide errors.

		MPv1Ticket.showErrors = function(fields){
			var $form = MPv1Ticket.getForm();
			for(var x = 0; x < fields.length; x++){
				var f = fields[x];
				var $span = $form.querySelector("#error_" + f);
				var $input = $form.querySelector($span.getAttribute("data-main"));
				$span.style.display = "inline-block";
				$input.classList.add("mp-error-input");
			}
			return;
		}

		MPv1Ticket.hideErrors = function(){
			for(var x = 0; x < document.querySelectorAll("[data-checkout]").length; x++){
				var $field = document.querySelectorAll("[data-checkout]")[x];
				$field.classList.remove("mp-error-input");
			} //end for
			for(var x = 0; x < document.querySelectorAll(".erro_febraban").length; x++){
				var $span = document.querySelectorAll(".erro_febraban")[x];
				$span.style.display = "none";
			}
			return;
		}

		MPv1Ticket.actionsMLB = function() {
			MPv1Ticket.initializeDocumentPessoaFisica();
			MPv1Ticket.addListenerEvent(document.querySelector(MPv1Ticket.selectors.cpfcnpj), 'keyup', MPv1Ticket.execFormatDocument);
			MPv1Ticket.addListenerEvent(document.querySelector(MPv1Ticket.selectors.radioTypeFisica), "change", MPv1Ticket.initializeDocumentPessoaFisica);
			MPv1Ticket.addListenerEvent(document.querySelector(MPv1Ticket.selectors.radioTypeJuridica), "change", MPv1Ticket.initializeDocumentPessoaJuridica);
			return;
		}

		MPv1Ticket.initializeDocumentPessoaFisica = function() {
			// show elements
			document.querySelector(MPv1Ticket.selectors.boxLastName).style.display = "block";
			document.querySelector(MPv1Ticket.selectors.titleFirstName).style.display = "block";
			document.querySelector(MPv1Ticket.selectors.titleDocNumber).style.display = "block";
			// adjustment css
			document.querySelector(MPv1Ticket.selectors.boxFirstName).classList.remove("form-col-8");
			document.querySelector(MPv1Ticket.selectors.boxFirstName).classList.add("form-col-4");
			// hide elements
			document.querySelector(MPv1Ticket.selectors.titleFirstNameRazaoSocial).style.display = "none";
			document.querySelector(MPv1Ticket.selectors.titleDocNumberCNPJ).style.display = "none";
			// force max length CPF
			document.querySelector(MPv1Ticket.selectors.cpfcnpj).maxLength = 14;
		}

		MPv1Ticket.initializeDocumentPessoaJuridica = function() {
			// show elements
			document.querySelector(MPv1Ticket.selectors.titleFirstNameRazaoSocial).style.display = "block";
			document.querySelector(MPv1Ticket.selectors.titleDocNumberCNPJ).style.display = "block";
			// adjustment css
			document.querySelector(MPv1Ticket.selectors.boxFirstName).classList.remove("form-col-4");
			document.querySelector(MPv1Ticket.selectors.boxFirstName).classList.add("form-col-8");
			// Hide Elements
			document.querySelector(MPv1Ticket.selectors.boxLastName).style.display = "none";
			document.querySelector(MPv1Ticket.selectors.titleFirstName).style.display = "none";
			document.querySelector(MPv1Ticket.selectors.titleDocNumber).style.display = "none";
			// force max length CNPJ
			document.querySelector(MPv1Ticket.selectors.cpfcnpj).maxLength = 18;
		}

		MPv1Ticket.validaCPF = function(strCPF) {
			var Soma;
			var Resto;
			strCPF = strCPF.replace(/[.-\s]/g, "")
			Soma = 0;
			if (strCPF == "00000000000") {
				return false;
			}
			for (i=1; i<=9; i++) {
				Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
			}
			Resto = (Soma * 10) % 11;
			if ((Resto == 10) || (Resto == 11)) {
				Resto = 0;
			}
			if (Resto != parseInt(strCPF.substring(9, 10)) ) {
				return false;
			}
			Soma = 0;
			for (i = 1; i <= 10; i++){
				Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
			}
			Resto = (Soma * 10) % 11;
			if ((Resto == 10) || (Resto == 11)) {
				Resto = 0;
			}
			if 	(Resto != parseInt(strCPF.substring(10, 11) ) ) {
				return false;
			}
			return true;
		}

		MPv1Ticket.validaCNPJ = function(strCNPJ) {
			strCNPJ = strCNPJ.replace(".","");
			strCNPJ = strCNPJ.replace(".","");
			strCNPJ = strCNPJ.replace(".","");
			strCNPJ = strCNPJ.replace("-","");
			strCNPJ = strCNPJ.replace("/","");
			var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
			digitos_iguais = 1;
			if (strCNPJ.length < 14 && strCNPJ.length < 15) {
				return false;
			}
			for (i = 0; i < strCNPJ.length - 1; i++) {
				if (strCNPJ.charAt(i) != strCNPJ.charAt(i + 1)) {
					digitos_iguais = 0;
					break;
				}
			}
			if (!digitos_iguais) {
				tamanho = strCNPJ.length - 2
				numeros = strCNPJ.substring(0,tamanho);
				digitos = strCNPJ.substring(tamanho);
				soma = 0;
				pos = tamanho - 7;
				for (i = tamanho; i >= 1; i--) {
					soma += numeros.charAt(tamanho - i) * pos--;
					if (pos < 2) {
						pos = 9;
					}
				}
				resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
				if (resultado != digitos.charAt(0)) {
					return false;
				}
				tamanho = tamanho + 1;
				numeros = strCNPJ.substring(0,tamanho);
				soma = 0;
				pos = tamanho - 7;
				for (i = tamanho; i >= 1; i--) {
					soma += numeros.charAt(tamanho - i) * pos--;
					if (pos < 2) {
						pos = 9;
					}
				}
				resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
				if (resultado != digitos.charAt(1)) {
					return false;
				}
				return true;
			} else {
				return false;
			}
		}

		MPv1Ticket.execFormatDocument = function() {
			v_obj= this;
			setTimeout(function() {
				v_obj.value = MPv1Ticket.formatDocument(v_obj.value)
			}, 1)
		}

		MPv1Ticket.formatDocument = function(v) {
			//Remove tudo o que n??o ?? d??gito
			v=v.replace(/\D/g,"")
			if (document.querySelector(MPv1Ticket.selectors.radioTypeFisica).checked) { //CPF
				//Coloca um ponto entre o terceiro e o quarto d??gitos
				v=v.replace(/(\d{3})(\d)/,"$1.$2")
				//Coloca um ponto entre o terceiro e o quarto d??gitos
				//de novo (para o segundo bloco de n??meros)
				v=v.replace(/(\d{3})(\d)/,"$1.$2")
				//Coloca um h??fen entre o terceiro e o quarto d??gitos
				v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				} else { //CNPJ
				//Coloca ponto entre o segundo e o terceiro d??gitos
				v=v.replace(/^(\d{2})(\d)/, "$1.$2")
				//Coloca ponto entre o quinto e o sexto d??gitos
				v=v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
				//Coloca uma barra entre o oitavo e o nono d??gitos
				v=v.replace(/\.(\d{3})(\d)/, ".$1/$2")
				//Coloca um h??fen depois do bloco de quatro d??gitos
				v=v.replace(/(\d{4})(\d)/, "$1-$2")
			}
			return v
		}

		// ===

		MPv1Ticket.Initialize = function( site_id, coupon_mode, discount_action_url, payer_email ) {

			// Sets.
			MPv1Ticket.site_id = site_id;
			MPv1Ticket.coupon_of_discounts.default = coupon_mode;
			MPv1Ticket.coupon_of_discounts.discount_action_url = discount_action_url;
			MPv1Ticket.coupon_of_discounts.payer_email = payer_email;

			// Flow coupon of discounts.
			if ( MPv1Ticket.coupon_of_discounts.default ) {
				MPv1Ticket.addListenerEvent(
					document.querySelector( MPv1Ticket.selectors.applyCoupon ),
					"click",
					MPv1Ticket.checkCouponEligibility
				);
			} else {
				document.querySelector( MPv1Ticket.selectors.formCoupon ).style.display = "none";
			}

			// flow: MLB
			if (MPv1Ticket.site_id == "MLB") {
				MPv1Ticket.actionsMLB();
			}
			/*if (MPv1Ticket.site_id != "MLB") {
				document.querySelector(MPv1Ticket.selectors.formTicket).style.display = "none";
			} else {
				MPv1Ticket.addListenerEvent(
					document.querySelector(MPv1Ticket.selectors.form),
					"submit",
					MPv1Ticket.validateInputsTicket
				);
			}*/

			return;

		}

		this.MPv1Ticket = MPv1Ticket;

	} ).call();

	// === Instantiation

	var mercadopago_site_id = "<?php echo $site_id; ?>";
	var mercadopago_payer_email = "<?php echo $payer_email; ?>";
	var mercadopago_coupon_mode = "<?php echo $coupon_mode; ?>";
	var mercadopago_discount_action_url = "<?php echo $discount_action_url; ?>";

	MPv1Ticket.text.discount_info1 = "<?php echo $form_labels['form']['discount_info1']; ?>";
	MPv1Ticket.text.discount_info2 = "<?php echo $form_labels['form']['discount_info2']; ?>";
	MPv1Ticket.text.discount_info3 = "<?php echo $form_labels['form']['discount_info3']; ?>";
	MPv1Ticket.text.discount_info4 = "<?php echo $form_labels['form']['discount_info4']; ?>";
	MPv1Ticket.text.discount_info5 = "<?php echo $form_labels['form']['discount_info5']; ?>";
	MPv1Ticket.text.discount_info6 = "<?php echo $form_labels['form']['discount_info6']; ?>";
	MPv1Ticket.text.apply = "<?php echo $form_labels['form']['apply']; ?>";
	MPv1Ticket.text.remove = "<?php echo $form_labels['form']['remove']; ?>";
	MPv1Ticket.text.coupon_empty = "<?php echo $form_labels['form']['coupon_empty']; ?>";
	MPv1Ticket.paths.loading = "<?php echo ( $images_path . 'loading.gif' ); ?>";
	MPv1Ticket.paths.check = "<?php echo ( $images_path . 'check.png' ); ?>";
	MPv1Ticket.paths.error = "<?php echo ( $images_path . 'error.png' ); ?>";

	MPv1Ticket.getAmount = function() {
		return document.querySelector( MPv1Ticket.selectors.amount )
		.value - document.querySelector( MPv1Ticket.selectors.discount ).value;
	}

	MPv1Ticket.getAmountWithoutDiscount = function() {
		return document.querySelector( MPv1Ticket.selectors.amount ).value;
	}

	MPv1Ticket.Initialize(
		mercadopago_site_id,
		mercadopago_coupon_mode == "yes",
		mercadopago_discount_action_url,
		mercadopago_payer_email
	);

</script>
