<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1251.2754094201237!2d55.3328886684527!3d25.27244645230404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d3735f78af5%3A0x718451b683055155!2sHOR%20AL%20ANZ!5e0!3m2!1sen!2sae!4v1710890731455!5m2!1sen!2sae" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>الموقع:</h4>
              <p>الأمارات المتحدة -دبي - هور العنز</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>البريد:</h4>
              <p>info@trelah.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>الهاتف:</h4>
              <p>9715555560168+</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{ route('web.contact')}}" method="post" role="form" class="php-email-formm">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="الإسم" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0 float-start">
                <input type="email" class="form-control" name="email" id="email" placeholder="البريد" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              @if(Session::has('email'))
              <div class="sent-message">Your message has been sent. Thank you!</div>
              @endif
            </div>
            <div class="text-center"><button type="submit">إرسال الرسالة</button></div>
          </form>

        </div>

      </div>

    </div>
  </section>