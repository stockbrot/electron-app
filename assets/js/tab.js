function openWallet(evt, walletName) {
  // Declare all variables
  var i, tabcontent, tablinks, subtablinks, subtabcontent;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="subtabcontent" and hide them
  subtabcontent = document.getElementsByClassName("subtabcontent");
  for (i = 0; i < subtabcontent.length; i++) {
    subtabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(walletName).style.display = "block";
  evt.currentTarget.className += " active";

  // Get all elements with class="subtablinks" and remove the class "active"
  subtablinks = document.getElementsByClassName("subtablinks");
  for (i = 0; i < subtablinks.length; i++) {
    subtablinks[i].className = subtablinks[i].className.replace(" active", "");
  }
}

function openWalletSub(evt, subName) {
  // Declare all variables
  var i, subtabcontent, subtablinks;

  // Get all elements with class="subtabcontent" and hide them
  subtabcontent = document.getElementsByClassName("subtabcontent");
  for (i = 0; i < subtabcontent.length; i++) {
    subtabcontent[i].style.display = "none";
  }

  // Get all elements with class="subtablinks" and remove the class "active"
  subtablinks = document.getElementsByClassName("subtablinks");
  for (i = 0; i < subtablinks.length; i++) {
    subtablinks[i].className = subtablinks[i].className.replace(" active", "");
  }

  // Show the current subtab, and add an "active" class to the button that opened the tab
  document.getElementById(subName).style.display = "block";
  evt.currentTarget.className += " active";
}
