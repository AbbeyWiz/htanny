@section('rsvp')
  <div class="page">
        <div class="container-fluid display_none bg-main-image">
      <div class="blur-img bg-rsvp"></div>
      <div class="page-fixed">
            <div class="bg-main-image-overlay-fixed ">
          <div class="main-section-s2">
                <div class="col-md-12">
              <div class="page-title wow fadeInUp" data-class="fadeInUp">
                <div class="the-couple-title">
                      <p><span>RSVP / CONTACT</span></p>
                    </div>
                  </div>
              <div class="container">
                    <div class="rsvp">
                  <div class="rsvp-form white-box wow fadeInUp col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" data-class="fadeInUp">
                        <p> We’d like to plan in advance. Kindly reply, for any question. Please fill the form below <br>
                      <span>22 April 2017</span> </p>
                        <div id="Success" class="successalert" style=" display:none;"> <strong>Thank you</strong>. </div>
                        <div id="Error" class="errorelert" style="display:none;"> <strong>Error occurred while sending email.</strong> Try again later. </div>
                        <form class="form floating-label text-left form-validate" name="frm" id="frm">
                      <div class="form-group">
                            <input type="text" class="form-control" id="Name" name="Name" required data-rule-minlength="2" />
                            <label for="Name">Name</label>
                          </div>
                      <div class="form-group">
                            <input type="text" class="form-control" id="Contactnumber" name="Contactnumber" data-rule-number="true" required />
                            <label for="Contactnumber">Contact Number</label>
                          </div>
                      <div class="form-group">
                            <input type="email" class="form-control" id="Emailaddress" name="Emailaddress" required />
                            <label for="Emailaddress">Email Address</label>
                          </div>
                      <div class="row">
                            <div class="col-md-6">
                          <div class="form-group">
                                <select id="attendiesDetails" name="attendiesDetails" class="form-control select2-list dirty" required>
                              <option value="">Select Presense</option>
                              <option value='0'>Yes</option>
                              <option value='1'>No</option>
                              <option value='2'>Not Sure</option>
                            </select>
                                <label for="attendiesDetails">I am attending?</label>
                              </div>
                        </div>
                            <div class="col-md-6">
                          <div class="form-group">
                                <select id="guestDetails" name="guestDetails" class="form-control select2-list dirty" required>
                              <option value="">Select Attendee(s)</option>
                              <option value='0'>0</option>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>
                            </select>
                                <label for="guestDetails">Guests</label>
                              </div>
                        </div>
                          </div>
                      
                      <div class="rsvp-button text-center">
                            <button type="submit" class="hvr-sweep-to-right">SUBMIT</button>
                            <div id="loding" style="display:none; padding-left:20px;"><img src="images/ajax-loader.gif" alt="Loader"></div>
                          </div>
                    </form>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
    </div>
      </div>

@endsection
