<?php include('api/header.php'); ?>
<section class="innerPageBannerSec position-relative d-flex justify-content-center align-items-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center banner-row">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>

<section class="bgDiv sectionPadding">
    <div class="container form-container shadow-lg">

        <form action="https://api.web3forms.com/submit" method="POST">
            <div class="row mb-3">
                <!-- Replace with your Access Key -->
                <input class="form-control" type="hidden" name="access_key" value="a8cdc6bb-cfe6-4438-8066-cda766fd4939">
                <!-- Your Name -->
                <div class="col-12 col-md-6">
                    <label for="FirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="FirstName" placeholder="" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="LastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="LastName" placeholder="" required>
                </div>
                <!-- Email -->
                <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="" required>
                </div>
                <!-- Phone Number -->
                <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phone" placeholder="" required>
                </div>
                <!-- Country -->
                <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" rows="6" class="form-control" name="message"></textarea>
                </div>
                <!-- Honeypot Spam Protection -->
                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>



<?php include('api/footer.php'); ?>