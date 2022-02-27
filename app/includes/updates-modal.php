<div class="remodal updates-modal" data-remodal-id="updates">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="updates-modal__content">
        <h2>Stay connected and sign up for updates!</h2>
        <form class="form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 contact-form__item">
                        <label for="fname-contact"><sup>*</sup>First Name</label>
                        <input type="text" id="fname-contact">
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <label for="lname-contact"><sup>*</sup>Last Name</label>
                        <input type="text" id="lname-contact">
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <label for="addr1"><sup>*</sup>Address Line 1</label>
                        <input type="text" id="addr1">
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <label for="addr2">Address Line 2</label>
                        <input type="text" id="addr2">
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <label for="city"><sup>*</sup>City</label>
                        <input type="text" id="city" />
                    </div>
                    <div class="col-md-3 col-sm-6 contact-form__item">
                        <div class="custom_select" tabindex="0">
                            <label for="state-contact">State</label>
                            <select id="state-contact">
                                <option disabled selected>State</option>
                                <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option>CA</option><option>CO</option><option>CT</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IL</option><option>IN</option><option>IA</option><option>KS</option><option>KY</option><option>LA</option><option>ME</option><option>MD</option><option>MA</option><option>MI</option><option>MN</option><option>MS</option><option>MO</option><option>MT</option><option>NE</option><option>NV</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NC</option><option>ND</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VT</option><option>VA</option><option>WA</option><option>WV</option><option>WI</option><option>WY</option><option>DC</option><option>PR</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 contact-form__item">
                        <label for="zip"><sup>*</sup>Zip</label>
                        <input type="text" id="zip" />
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <label for="email-updates"><sup>*</sup>Email</label>
                        <input type="email" id="email-updates" />
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <input type="checkbox" id="iagree-updates" />
                        <label for="iagree-updates">‘I agree, to Del Monte’s® terms-of-conditions (link) and privacy policy’ (link), Dummy Text Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</label>
                    </div>
                    <div class="col-sm-6 contact-form__item">
                        <?php include('includes/captcha.php'); ?>
                    </div>
                    <div class="col-12">
                        <input id="submit" class="btn --green" type="submit" value="Submit" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>