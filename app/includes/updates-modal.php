<div class="remodal updates-modal" data-remodal-id="updates">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="updates-modal__content">
        <p>Stay contented and sign up for updates!</p>
        <form class="form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" placeholder="First Name" />
                    </div>
                    <div class="col-sm-6">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" placeholder="Last Name" />
                    </div>
                    <div class="col-12">
                        <label for="addr1">Address Line 1</label>
                        <input type="text" id="addr1" placeholder="Address Line 1" />
                    </div>
                    <div class="col-12">
                        <label for="addr2">Address Line 2</label>
                        <input type="text" id="addr2" placeholder="Address Line 2" />
                    </div>
                    <div class="col-sm-6">
                        <label for="city">City</label>
                        <input type="text" id="city" placeholder="City" />
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <label for="state">State</label>
                        <select id="state">
                            <option disabled selected>State</option>
                            <option>PA</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-3">
                        <label for="zip">Zip</label>
                        <input type="text" id="zip" placeholder="Zip" />
                    </div>
                    <div class="col-12">
                        <label for="email-updates">Email</label>
                        <input type="email" id="email-updates" placeholder="Email" />
                    </div>
                    <div class="col-12">
                        <input type="checkbox" id="iagree" />
                        <label for="iagree">‘I agree, to Del Monte’s<sup>®</sup> terms-of-conditions (link) and privacy policy’ (link), Dummy Text Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </label>
                    </div>
                    <div class="col-12">
                        <?php include('includes/captcha.php'); ?>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Submit" />
                    </div>
                </div>
            </div>
        </form>
    </div>
    <img src="img/logo.svg" alt="Del Monte logo" class="updates-modal__logo" />
</div>
