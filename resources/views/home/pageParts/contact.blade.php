<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>İletişime geçin</p>
            <h2>Sizin için buradayız !</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <h2>İletişim Bilgileri</h2>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Açılış Saatleri</h3>
                            <p>Pzt - Cuma, 8:00 - 9:00</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Bizi Arayın</h3>
                            <p>+800-512-512</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Email'le ulaşın</h3>
                            <p>diyet@superdiyet.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{ route('admin.message.store') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Ad / Soyad" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="email" type="email" class="form-control" id="email" placeholder="E-posta" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefon" required="required" data-validation-required-message="Please enter a phone number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            {{-- buraya id yerine messageSubject tablosundaki generalSubject alanı yazdırılacak --}}
                            <select name="messageSubjectId" class="form-control">
                                @foreach($messageSubjects as $messageSubject)
                                    <option value="{{ $messageSubject->id }}">{{ $messageSubject->generalSubject }}</option>
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="subjectTitle" type="text" class="form-control" id="phone" placeholder="Konu" required="required" data-validation-required-message="Please enter a phone number" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <textarea name="message" class="form-control" id="message" placeholder="Mesaj" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group status_hidden">
                            <input class="ip_hidden" name="ip" />
                            <input class="ip_hdden" name="status" value="Online" />
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit" id="sendMessageButton">Mesajı Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
