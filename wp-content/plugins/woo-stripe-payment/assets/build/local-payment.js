(()=>{"use strict";var e={103:e=>{e.exports=window.wcStripeModules.checkoutModules}},t={};function a(r){var o=t[r];if(void 0!==o)return o.exports;var s=t[r]={exports:{}};return e[r](s,s.exports,a),s.exports}(()=>{var e=a(103);if("undefined"!=typeof wc_stripe_local_payment_params)for(var t in wc_stripe_local_payment_params.gateways){var r=wc_stripe_local_payment_params.gateways[t],o=new e.LocalCheckoutGateway(r,"#wc_stripe_local_payment_".concat(r.gateway_id));(0,e.registerPaymentMethod)(o)}})(),(this.wcStripeModules=this.wcStripeModules||{}).localPayment={}})();
//# sourceMappingURL=local-payment.js.map