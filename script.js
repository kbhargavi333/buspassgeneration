function AadharValidate() {
    var aadhar = document.getElementById("txtAadhar").value;
    var adharcardTwelveDigit = /^\d{12}$/;
    var adharSixteenDigit = /^\d{16}$/;
    if (aadhar != '') {
      if (aadhar.match(adharcardTwelveDigit)) {
        return true;
      }
      else if (aadhar.match(adharSixteenDigit)) {
        return true;
      }
      else {
        alert("Enter valid Aadhar Number");
        return false;
      }
    }
  }
  function pnovalidate() {
    var no = document.getElementById("pno").value;
    var phno = /^\d{10}$/;
    if (no != '') {
      if (no.match(phno)) {
        return true;
      }
      else {
        alert("Enter valid Phone Number");
        return false;
      }
    }
  }