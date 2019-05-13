<?php $__env->startSection('content'); ?>
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title">Love to Hear From You</h1>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p> -->

                <p>Email us with any questions or inquiries. We would be happy to answer your questions and set up a meeting with you. We would be glad to help you!</p>

                <div class="find-widget">
                 Company: BloodBank
                </div>
                <div class="find-widget">
                 Address: Kathmandu 44600
                </div>
                <div class="find-widget">
                  Phone:  + 977-9841******
                </div>
                
                <div class="find-widget">
                  Website:  www.bloodbank.com
                </div>
                <div class="find-widget">
                   Program: Sun to Fri: 09:00 AM - 05.00 PM
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <?php echo Form::open(['action' => 'ContactsController@store', 'method' => 'POST']); ?>

                    <!-- <form class="shake" role="form" method="post" action="ContactsController@store" id="contactForm" name="contact-form" data-toggle="validator"> -->
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="body" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="body" name="body" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->

                      <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>


                  <?php echo Form::close(); ?>

                  <!-- </form> -->
              </div>
          </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>