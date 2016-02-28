<?php $pagename="Donate - Working Women";?>

<?php include("includes/head.php"); ?>

  <div class="contentwrap">

    <div class="wrapper">

      <header id="donate">
        <h1>Help Us Help Others By Donating</h1>
      </header>

      <section id="personalinfo">
        <h2 class="headerfix">Information</h2>

        <!-- Form-->

        <form action='thankyou.php' method='post'>
          <input type="text" name="firstname" placeholder="First Name">
          <input type="text" name="lastname" placeholder="Last Name">
          <input type="text" name="address" placeholder="Address">
          <input type="text" name="city" placeholder="City">

          <select name="province">
            <option disabled="disabled" selected="selected">Province</option>
            <option>Alberta</option>
            <option>British Columbia</option>
            <option>Manitoba</option>
            <option>New Brunswick</option>
            <option>Newfoundland</option>
            <option>Northwest Territories</option>
            <option>Nova Scotia</option>
            <option>Nunavut</option>
            <option>Ontario</option>
            <option>Prince Edward Island</option>
            <option>Québec</option>
            <option>Saskatchewan</option>
            <option>Yukon</option>
          </select>

          <input class="postal" name="postalcode" type="text" placeholder="Postal Code">

          <input type="text" name="phone" placeholder="Phone Number">
          <input type="text" name="cell" placeholder="Cell Number">
          <input type="text" name="email" placeholder="E-mail Address">

          <input type="checkbox" name="info" class="checkbox" checked="on">

          <p>I would like to receive information from Working Women.</p>

        <!-- </form> -->

      </section>


      <section id="donationinfo">
        <h2 class="headerfix">Donation Details</h2>

        <!-- Form -->
         <!--  <form> -->
            <div class="dollaramount">
              <p class="dollar">$</p>

              <input class="amount" name="amount" type="text">
            </div>

              <input class="radio" name="group1" value="One Time" type="radio" checked="on">
              <p>One Time</p>
              <input class="radio" name="group1" value="Monthly" type="radio">
              <p>Monthly</p>

                <select name="direct">
                  <option disabled="disabled" selected="selected">I would like to direct my gift to</option>
                  <option>Hippy Program</option>
                  <option>On Your Mark Program</option>
                  <option>The Community Garden</option>
                  <option>Where funds are needed most </option>
                  <option>Other ( If other state below )</option>
                </select>

                <input type="text" name="otherdirect" placeholder="Other">

               <div id="formfix">

                  <p class="pfix">I wish for my donation to remain anonymous</p>

                  <p>Yes</p>
                  <input class="radiofix" name="group2" value="Yes" type="radio" >
                  <p>No</p>
                  <input name="group2" type="radio" value="No" checked="on">
                  
                  <div class="selection">
                    
                    <p class="pfix">Select a payment method</p>
                  
                    <p>Visa</p>
                    <input class="radiofix" name="group3" value="Visa" type="radio" checked="on">
                    <p>Mastercard</p>
                    <input name="group3" value="Mastercard" type="radio">
                    <p>American Express</p>
                    <input name="group3" value="American Express" type="radio">
                  </div>
                </div>
              
              <div class="form">
                <input type="text" name="creditcardnum" placeholder="Credit Card Number">
                <input class="small" name="cvv" type="text" placeholder="CVV">
              </div>

              <div class="expires">
                <p>Expires</p>
                <input type="text" name="expireday" placeholder="mm"> <span>/</span> 
                <input type="text" name="expiremonth" placeholder="yy">
              </div>
               
            <input type="submit" value="DONATE"></input>

          </form>

      </section>
    </div>
    

  </div>

<?php include("includes/footer.php"); ?>