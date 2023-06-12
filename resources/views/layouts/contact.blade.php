<div id="contact" class="mt-3">
    <h2 class="section-title mb-3 ml-2">CONTACT US</h2>
    <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="info">
                        <div class="address">
                            <h4>Address:</h4>
                            <p>Minh Khai, Bac Tu Liem, Ha Noi</p>
                        </div>

                        <div class="email">
                            <h4>Email:</h4>
                            <p>sonit7122@gmail.com</p>
                        </div>

                        <div class="phone">
                            <h4>Call:</h4>
                            <p>+84372238783</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14893.305023858797!2d105.7368803!3d21.0596277!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454e33407ecc7%3A0x6b9d843be64f7f06!2zTWluaCBLaGFpLCBC4bqvYyBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1686578294876!5m2!1svi!2s"
                            frameborder="0" style="border:0; width: 100%; height: 290px;"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <form class="w-100" id="form-send-mail" action="{{ route('send-message') }}"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group mt-3 col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group mt-3 col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="5"></textarea>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary py-2 px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>