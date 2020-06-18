// Create a Stripe client.
var stripe = Stripe(' PUBLIC KEY HERE ');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    color: '#000',
    fontFamily: '"Montserrat", sans-serif',
    fontSize: '16px',
    fontWeight: '200',
    '::placeholder': {
      color: '#757575',
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  let form_error = formValidation()

  stripe.createToken(card).then(function(result) {

    console.log(form_error)

    if (result.error || form_error) {
      // Inform the user if there was an error.
      if (result.error) {
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
      }
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}

// validates input field on submission -- custom
function formValidation() {
  let error = false
  const inputs = document.getElementsByClassName('modal__input')
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value == null || inputs[i].value == '') {
      console.log(inputs[i])
      // highlights any field that are empty
      inputs[i].classList.add('invalid')
      error = true
    } else {
      inputs[i].classList.remove('invalid')
    }
  }
  console.log(error)
  return error
}