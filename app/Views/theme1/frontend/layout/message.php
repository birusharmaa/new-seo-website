<form class="contact-form">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Your Name</label>
            <input type="text" id="userName"
                name="name" class="form-control" placeholder="Your Name" 
            />
        </div>
        <div class="form-group col-md-6">
            <label for="name">Mobile Number</label>
            <input type="text" class="form-control" id="userPhone"
                name="number" maxlength="10" placeholder="mobile number" 
            />
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="name">Email Address</label>
        <input type="text" class="form-control" id="userEmail"
            name="email" placeholder="Your Email" 
        />
    </div>
    <div class="form-group mt-3">
        <label for="name">Message</label>
        <textarea class="form-control" name="message" id="userMessage" rows="3" ></textarea>
    </div>

    <div class="text-center mt-4">
        <button type="button" id="sendMessage" class="btn btn-color text-white rounded-pill ">
            Send Message
        </button>
    </div>
</form>