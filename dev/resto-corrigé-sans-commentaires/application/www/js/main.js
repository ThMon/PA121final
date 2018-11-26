'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////




/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////
if( window.location.href.indexOf("/order/validate") == -1 && window.location.href.indexOf("/order/payment") == -1 && window.location.href.indexOf("/order") != -1) {
	console.log('order');

	var orderForm = new OrderForm();

	orderForm.run();
} else if (window.location.href.indexOf("validate") != -1 ){
	console.log('validate')
	var validate = new ValidateBasket();
}