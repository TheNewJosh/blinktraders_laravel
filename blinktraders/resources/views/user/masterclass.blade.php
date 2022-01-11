<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "masterclass.php"; 
            $page_title = "Master Class";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi1 = $smi2 = $smi3 = $smi4 = $smi5 = "";
        ?>
    </head>
    <body>
        <main class="main-dash row main-bottom">
            <section class="col col-lg-1 display-none-area">
                @include('user.layouts.sidebar')
            </section>
            <section class="heading-dash col col-lg-11">
                <div class="head-border-bottom">
                    @include('user.layouts.header')
                </div>
                <div class="pofolio-div">
                    <div class="space-mobile"></div>
                    <h4 class="force-color-black force-small-text">BLINK TRADERS MASTERCLASS AGREEMENT</h4>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                       <div class="card border border-primary">
                          <div class="card-body">
                              <div class="dotted-line-masterclass text-center">
                                    <h5 class="force-color-black force-small-text amount-span-masterclass">Mentorship Agreement on Trading</h5>
                              </div>
                              <div>
                                  <br>
                                  <p class="small-font-size">This agreement is between:</p>
                                  <p class="small-font-size">
                                    <label class="mr-2">Name</label>
                                      <input type="text" class="form-under-line mr-5" value="{{auth()->user()->name}}" readonly />
                                      <span class="small-font-size ml-5">mentee</span>
                                  </p>
                                  <p class="small-font-size">
                                    <label class="mr-2">Email Address</label>
                                      <input type="text" class="form-under-line mr-5" value="{{auth()->user()->email}}" readonly />
                                  </p>
                                  <p>
                                    <span class="mr-5 small-font-size">Name: {{$system_configuration->company_name}}</span>
                                      <span class="small-font-size ml-5">mentor</span><br>
                                      <span class="small-font-size">Email Address: {{$system_configuration->company_email}}</span>
                                  </p>
                                  <ol>
                                      <li class="small-font-size">
                                        Aim of the mentorship<br>
                                        The aim of this mentorship is to make the mentee profitable in trade after one month of tutoring<br><br>
                                      </li>
                                      <li class="small-font-size">
                                        Delivery Process<br>
Mentee will agree to be coachable by mentor and do work-task-assignments given to them by mentor<br><br>
                                          Mentee will get 2-3 signals daily for next 30 days (from starting date of agreement)<br><br>

All sessions will be held/delivered on Zoom or Telegram<br><br>
                                      </li>
                                      <li class="small-font-size">
                                          Confidentiality & Copyright of Materials<br>
The mentor will treat the mentee's personals in full confidence and not share that work wit anyone else. The mentee owns copyright to any of the mentor's own knowledge delivered as part of the scheme <br><br>
                                      </li>
                                      <li class="small-font-size">
                                          In the Event of a Breakdown in the Relationship<br>
If the mentoring relationship breaks down in any way and no third party be able to repair it, the mentoring relationship will stop and nothing more be due from either party. Breakdown is constituted by either party refusing to continue
                                        <br><br>   
                                          If there is a sign of unseriousness from mentee and the mentor notices the same. Firstly, mentor will give a warning to mentee if the no goood response continues from mentee's side then breakdown occurs.<br><br>
if dismissal occurs in the first week full fee will be refunded.<br><br>
                                      </li>
                                      <li class="small-font-size">
                                          Membership<br>
Mentee has a life time mentorship/guide i.e mentor will answer all the questions and provide helpful advice to mentee when he/she finds himself or herself in trouble during trading
                                        <br><br>    
                                      </li>
                                      <li class="small-font-size">
                                          Evaluation<br>
Mentor will evaluate mentee's capability of learning through assignments e.t.c
Mentee has to submit a summary of what he/she has learned after each lesson<br><br>

Mentee's evaluation report
The report should include a summary of the following:<br><br>
                                          <ul>
                                              <li class="small-font-size">A review of the goals that were set at the beginning of the project and an appraisal of whether you feel that you have met them</li>
                                              <li>What it was like to work with your mentor over the period of the scheme</li>
                                              <li>The highlights and low points of the project and explanations if relevant</li>
                                              <li>Anything that you feel that you could have done differently to benefit more from the experience</li>
                                              <li>A general statement on the value of the experience to you</li>
                                              <li>Your appraisal of how [the managing agency] managed the scheme from your perspective</li>
                                          </ul>
                                        <br><br>    
                                      </li>
                                      <li class="small-font-size">
                                          Timescale<br>
The mentor agrees to provide creative mentoring, on a one-to-one basis, for a period of one month.<br><br>

Over that period the mentor and mentee will arrange 3 flexible meetings each week. These meetings will take at intervals of no longer than 3 days. Dates and time are as mutually agreed. Communications between mentor and mentee will be restricted to the times of submission of materials and the actual mentoring sessions, unless a matter emergency
                                        <br><br>    
                                      </li>
                                      <li class="small-font-size">
                                          Rescheduling of Meetings<br>
Should either party need to reschedule a session, at least 48 hours notice should be given and a mutually convenient alternative date agreed. Should the mentor and not the mentee attend a session, that session will be deemed to have been delivered.
                                        <br><br>    
                                      </li>
                                      <li class="small-font-size">
                                          Equality<br>
Both parties must adhere and respect natural mentor and mentee Equality. Each party if acts in any way which compromises equality during the duration of this contract, the Mentor and mentee reserves the right to end the contract and if necessary to seek repayment of any fees which have been paid in advance.
                                        <br><br>    
                                      </li>
                                      <li class="small-font-size">
                                          Payments to the Mentor<br>
The total fee payable for this agreement shall be paid in advance i.e $499<br><br>

We the Mentor and the Mentee agreed on the above mentioned terms and conditions and do our best abide by all terms and conditions.
(Copies of the agreement to be signed and given to each participating party.)
                                        <br><br>    
                                      </li>
                                  </ol>
                                  <div class="small-font-size">
                                    <label class="mr-2">SIGNED: Mentee Date</label><br><br>
                                      <input type="text" class="form-under-line mr-5" readonly /><br><br>
                                  </div>
                                  <div class="small-font-size">
                                    <label class="mr-2">SIGNED: Mentor Date</label><br><br>
                                      <input type="text" class="form-under-line mr-5" readonly />
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div>
                            <a href="components/actions-masterclass.php?print=yes">
                                <button type="button" class="btn print-button float-right">Print</button>
                            </a>
                        </div>
                        <div class="mt-5"><br><br>
                            <p class="big-font-size">THE ABOVE DOCUMENT IS A MENTORSHIP AGREEMENT FOR YOU TO BECOME A MENTEE UNDER BLINK TRADERS LTD</p>
                            <ol>
                                <li class="big-font-size">READ THE DOCUMENT FROM TOP TO BOTTOM.</li>
                                <li class="big-font-size">BE FULLY AWARE OF WHAT YOU ARE ABOUT TO AGREE TO.</li>
                                <li class="big-font-size">TYPE YOUR FULL NAME AS IT APPEARS ON YOUR PROFILE AND KYC DOCUMENT</li>
                            </ol>
                        </div>
                        <div class="small-font-size border-name-bottom">
                            <span class="mr-2">{{auth()->user()->name}}</span>
                          </div>
                        <br>
                        <p class="big-font-size">BY TYPING YOUR FULL NAME AND PRESSING "I AGREE" YOU ARE PROVIDING A DIGITAL SIGNATURE AND THEREFORE ACCEPTING THE ABOVE DOCUMENT ON A LEGAL GROUNDS</p>
                        <div class="d-flex justify-content-center">
                          <button type="button" class="btn btn-primary px-5" data-toggle="modal" data-target="#myModalPayConfirm">I AGREE</button>
                        </div>
                        
                    </div>
                </div>
            </section>
        </main>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalPayConfirm">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->

      <!-- Modal body -->
      <form action="{{ route('masterclass') }}" method="post" class="modal-body text-center">
      @csrf
            <span class="small-font-size">
                Make a payment
            </span><br><br>
            <span class="big-font-size">Paid mentorship $495(Life time)</span><br><br>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <button type="submit" class="btn btn-primary">Proceed</button>
      </form>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalSuccess">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-green" style="font-size:50px;"><i class="far fa-check-circle"></i></span><br>
            <span class="big-font-size">Congratulations!</span><br>
            <span class="small-font-size text-center">You are now a blink trade mentee</span><br><br>
      </div>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalNoAvaBal">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Unsuccessful</span><br>
            <span class="small-font-size text-center">Insufficient balance. Please fund your account to proceed.</span><br><br>
      </div>
    </div>
  </div>
</div>
        
        @include('user.layouts.footer')
        
        <script>
            @if(session('statusError'))
                $(window).on('load', function() {
                    $('#myModalError').modal('show');
                });
            @endif
            
            @if(session('statusErrorNoInvestPlan'))
                $(window).on('load', function() {
                    $('#myModalNoInvestPlan').modal('show');
                });
            @endif
            
            @if(session('statusErrorNoAvaBal'))
                $(window).on('load', function() {
                    $('#myModalNoAvaBal').modal('show');
                });
            @endif

            @if(session('statusSuccess'))
                $(window).on('load', function() {
                    $('#myModalSuccess').modal('show');
                });
            @endif
        </script>
        
        
    </body>
</html>