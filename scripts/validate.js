  function valForm(theForm)
  {
   var regexp;
   var thisFormPhoneInput = $("form[name="+theForm.name+"] > input[name='phone']");
   regexp = /^[ \t\r\n\f0-9-()_+-]*$/;
   if (!regexp.test(thisFormPhoneInput[0].value))
   {
    alert("Заполните поле \"ТЕЛЕФОН\" верно!");
    thisFormPhoneInput.focus();
    return false;
   }
   if (thisFormPhoneInput[0].value == "")
   {
    alert("Заполните поле \"ТЕЛЕФОН\" верно!");
    thisFormPhoneInput.focus();
    return false;
   }
   if (thisFormPhoneInput[0].value.length < 7)
   {
    alert("Заполните поле \"ТЕЛЕФОН\" верно!");
    thisFormPhoneInput.focus();
    return false;
   }
   return true;
  }