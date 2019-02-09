$('#nameI').keyup(function () {
  var amount = $('#nameI')[0].value;
  letr = amount.length;
  if (letr > 0) {
    $('#nameI').width(letr * 13);
  } else {
    $('#nameI').width(113);
  }
});

$('#emailI').keyup(function () {
  var amount = $('#emailI')[0].value;
  letr = amount.length;
  if (letr > 0) {
    $('#emailI').width(letr * 13);
  } else {
    $('#emailI').width(113);
  }
});

$('#numberI').keyup(function () {
  var amount = $('#numberI')[0].value;
  letr = amount.length;
  if (letr > 0) {
    $('#numberI').width(letr * 13);
  } else {
    $('#numberI').width(113);
  }
});

$('#nextButton').click(function() {
  if ($('#nameI')[0].value.length < 3) {
    alert('Please enter your full name');
  }
  if ($('#emailI')[0].value.length < 3) {
    alert('Please enter your email');
  }
  if ($('#numberI')[0].value.length < 3) {
    alert('Please enter your number');
  } else {
    $('#name').fadeOut(1000);
    $('#amount').delay(1001).fadeIn(1000);
  }
});



$('#amountI').keyup(function () {
  var amount = $('#amountI')[0].value;
  letr = amount.length;
  //$('#amountI').width=letr*10;
  if (letr > 0) {
    $('#amountI').width(letr * 13);
  } else {
    $('#amountI').width(113);
  }
  //$('amountI').wi);
});

$('#submitButton').click(function() {
  if (!isNaN($('#amountI')[0].value)) {
    window.location = 'http://rebeca2k18.com/contribute/pay.php?name=' + encodeURI($('#nameI')[0].value) + '&email=' + encodeURI($('#emailI')[0].value) + '&phone=' + encodeURI($('#numberI')[0].value) + '&amount=' + encodeURI($('#amountI').value);
  } else {
    alert('Please check the amount that you\'ve entered');
  }
});
