@extends ('layouts.pages')
 @section ('content')




  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="images/contact-bg.jpg" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>

          {{ __('messages.title')}}
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="#">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder=" {{ __('messages.fullName')}} " />
                  </div>
                  <div>
                    <input type="email" placeholder="{{ __('messages.email')}} " />
                  </div>
                  <div>
                    <input type="text" placeholder="{{ __('messages.phonNumber')}} " />
                  </div>
                  <div class="">
                    <input type="text" placeholder="{{ __('messages.message')}}" class="message_input" />
                  </div>
                  <div class="btn-box ">
                    <button type="submit">
                      {{ __('messages.submit')}}
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->






 @endsection