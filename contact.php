<?php include('header.php'); ?>
<section class="innerPageBannerSec position-relative d-flex justify-content-center align-items-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center banner-row">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>


<div class="container mt-5">
    <form action="https://api.web3forms.com/submit" method="POST">
        <div class="row mb-3">
            <!-- Replace with your Access Key -->
            <input class="form-control" type="hidden" name="access_key" value="a8cdc6bb-cfe6-4438-8066-cda766fd4939">
            <!-- Your Name -->
            <div class="col-md-6">
                <label for="name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="name" placeholder="" required>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="name" placeholder="" required>
            </div>
            <!-- Email -->
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" required>
            </div>
            <!-- Phone Number -->
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" placeholder="" required>
            </div>
            <!-- Country -->
            <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" class="form-control" name="message"></textarea>
            </div>
            <!-- Honeypot Spam Protection -->
            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<?php include('footer.php'); ?>