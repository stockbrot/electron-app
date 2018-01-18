<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>SuperWallet</title>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/tab.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script> -->
  <!-- <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css"> -->
  <!-- App & fonts-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext">
  <!--[if lt IE 9]-->

</head>

<body>
  <!-- Tab links -->
  <div class="tab">
    <button class="tablinks" onclick="openWallet(event, 'Overview')">Overview</button>
    <button class="tablinks" onclick="openWallet(event, 'BitCoin')">BitCoin</button>
    <button class="tablinks" onclick="openWallet(event, 'Ethereum')">Ethereum</button>
    <button class="tablinks" onclick="openWallet(event, 'Tron')">Tron</button>
  </div>

  <!-- Tab content -->
  <div id="BitCoin" class="tabcontent">
    <h3>BitCoin</h3>
    <p>BitCoin is voll knorke.</p>
    <div class="tab">
      <button class="subtablinks" onclick="openWalletSub(event, 'BtcBalance')">Balance</button>
      <button class="subtablinks" onclick="openWalletSub(event, 'BtcSend')">Send</button>
      <button class="subtablinks" onclick="openWalletSub(event, 'BtcReceive')">Receive</button>
    </div>
    <div id="BtcBalance" class="subtabcontent">
      <p>You currently have 0 BTC</p>
    </div>
  </div>

  <div id="Ethereum" class="tabcontent">
    <h3>Ethereum</h3>
    <p>Ethereum is voll knorke.</p>
    <div class="tab">
      <button class="subtablinks" onclick="openWalletSub(event, 'EthBalance')">Balance</button>
      <button class="subtablinks" onclick="openWalletSub(event, 'EthSend')">Send</button>
      <button class="subtablinks" onclick="openWalletSub(event, 'EthReceive')">Receive</button>
    </div>
    <div id="EthBalance" class="subtabcontent">
      <p>You currently have 0 ETH</p>
    </div>
  </div>

  <div id="Tron" class="tabcontent">
    <h3>Tron</h3>
    <p>Tron is voll knorke.</p>
    <div class="tab">
      <button class="subtablinks" onclick="openWalletSub(event, 'TrxBalance')">Balance</button>
      <button class="subtablinks" onclick="openWalletSub(event, 'TrxSend')">Send</button>
      <button class="subtablinks" onclick="openWalletSub(event, 'TrxReceive')">Receive</button>
    </div>
    <div id="TrxBalance" class="subtabcontent">
      <p>You currently have 0 TRX</p>
    </div>
  </div>


  <script>
    // You can also require other files to run in this process
    require('./renderer.js')
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('#tabs').tab();
    });
  </script>

</body>

</html>
