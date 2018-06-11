<script src="https://js.braintreegateway.com/web/dropin/1.10.0/js/dropin.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.34.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.34.0/js/venmo.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.34.0/js/data-collector.min.js"></script>
<script>

braintree.client.create({
  authorization: 'CLIENT_AUTHORIZATION'
}, function (clientErr, clientInstance) {
  if (clientErr) {
    // Handle error in client creation
    return;
  }

  var options = {
    client: clientInstance,
    styles: {
      /* ... */
    },
    fields: {
      /* ... */
    }
  };

  braintree.hostedFields.create(options, function (hostedFieldsErr, hostedFieldsInstance) {
    if (hostedFieldsErr) {
      // Handle error in Hosted Fields creation
      return;
    }

    // Use the Hosted Fields instance here to tokenize a card
  });
});

</script>
