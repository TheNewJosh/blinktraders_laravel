<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = ""; 
            $page_title = "Account";
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
                    <div class="deposit-res-px-5">
                    @if(auth()->user()->kyc_verify == 0)
                    <h4 class="force-color-black force-small-text">
                        Your account is not yet verified
                        <span class="force-bg-red px-2 py-2 small-font-size border-curve-5">UNVERIFIED</span>
                    </h4>
                    @endif
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                            <form action="{{ route('account') }}" method="post" enctype="multipart/form-data" class="pr-5">
                            @csrf
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control border border-dark" name="name" value="{{auth()->user()->name}}">
                                @error('name')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control border border-dark" name="username" value="{{auth()->user()->username}}">
                                @error('username')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Email Address</label>
                                <input type="email" class="form-control border border-dark" name="email" value="{{auth()->user()->email}}">
                                @error('email')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input type="tel" class="form-control border border-dark" name="phone" value="{{auth()->user()->phone}}">
                                @error('email')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control border border-dark" name="address" value="{{auth()->user()->address}}">
                                @error('email')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Country</label>
                                <select class="form-control input-outline" name="country">
                                                    <option value="Afganistan" @if(auth()->user()->country == 'Afganistan') selected @endif >Afghanistan</option>
                                                    <option value="Albania" @if(auth()->user()->country == 'Afganistan') selected @endif >Albania</option>
                                                    <option value="Algeria" @if(auth()->user()->country == 'Afganistan') selected @endif >Algeria</option>
                                                    <option value="American Samoa" @if(auth()->user()->country == 'Afganistan') selected @endif >American Samoa</option>
                                                    <option value="Andorra" @if(auth()->user()->country == 'Afganistan') selected @endif >Andorra</option>
                                                    <option value="Angola" @if(auth()->user()->country == 'Afganistan') selected @endif >Angola</option>
                                                    <option value="Anguilla" @if(auth()->user()->country == 'Afganistan') selected @endif >Anguilla</option>
                                                    <option value="Antigua & Barbuda" @if(auth()->user()->country == 'Afganistan') selected @endif >Antigua & Barbuda</option>
                                                    <option value="Argentina" @if(auth()->user()->country == 'Afganistan') selected @endif >Argentina</option>
                                                    <option value="Armenia" @if(auth()->user()->country == 'Afganistan') selected @endif >Armenia</option>
                                                    <option value="Aruba" @if(auth()->user()->country == 'Afganistan') selected @endif >Aruba</option>
                                                    <option value="Australia" @if(auth()->user()->country == 'Afganistan') selected @endif >Australia</option>
                                                    <option value="Austria" @if(auth()->user()->country == 'Afganistan') selected @endif >Austria</option>
                                                    <option value="Azerbaijan" @if(auth()->user()->country == 'Afganistan') selected @endif >Azerbaijan</option>
                                                    <option value="Bahamas" @if(auth()->user()->country == 'Afganistan') selected @endif >Bahamas</option>
                                                    <option value="Bahrain" @if(auth()->user()->country == 'Afganistan') selected @endif >Bahrain</option>
                                                    <option value="Bangladesh" @if(auth()->user()->country == 'Afganistan') selected @endif >Bangladesh</option>
                                                    <option value="Barbados" @if(auth()->user()->country == 'Afganistan') selected @endif >Barbados</option>
                                                    <option value="Belarus" @if(auth()->user()->country == 'Afganistan') selected @endif >Belarus</option>
                                                    <option value="Belgium" @if(auth()->user()->country == 'Afganistan') selected @endif >Belgium</option>
                                                    <option value="Belize" @if(auth()->user()->country == 'Afganistan') selected @endif >Belize</option>
                                                    <option value="Benin" @if(auth()->user()->country == 'Afganistan') selected @endif >Benin</option>
                                                    <option value="Bermuda" @if(auth()->user()->country == 'Afganistan') selected @endif >Bermuda</option>
                                                    <option value="Bhutan" @if(auth()->user()->country == 'Afganistan') selected @endif >Bhutan</option>
                                                    <option value="Bolivia" @if(auth()->user()->country == 'Afganistan') selected @endif >Bolivia</option>
                                                    <option value="Bonaire" @if(auth()->user()->country == 'Afganistan') selected @endif >Bonaire</option>
                                                    <option value="Bosnia & Herzegovina" @if(auth()->user()->country == 'Afganistan') selected @endif >Bosnia & Herzegovina</option>
                                                    <option value="Botswana" @if(auth()->user()->country == 'Afganistan') selected @endif >Botswana</option>
                                                    <option value="Brazil" @if(auth()->user()->country == 'Afganistan') selected @endif >Brazil</option>
                                                    <option value="British Indian Ocean Ter" @if(auth()->user()->country == 'Afganistan') selected @endif >British Indian Ocean Ter</option>
                                                    <option value="Brunei" @if(auth()->user()->country == 'Afganistan') selected @endif >Brunei</option>
                                                    <option value="Bulgaria" @if(auth()->user()->country == 'Afganistan') selected @endif >Bulgaria</option>
                                                    <option value="Burkina Faso" @if(auth()->user()->country == 'Afganistan') selected @endif >Burkina Faso</option>
                                                    <option value="Burundi" @if(auth()->user()->country == 'Afganistan') selected @endif >Burundi</option>
                                                    <option value="Cambodia" @if(auth()->user()->country == 'Afganistan') selected @endif >Cambodia</option>
                                                    <option value="Cameroon" @if(auth()->user()->country == 'Afganistan') selected @endif >Cameroon</option>
                                                    <option value="Canada" @if(auth()->user()->country == 'Afganistan') selected @endif >Canada</option>
                                                    <option value="Canary Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Canary Islands</option>
                                                    <option value="Cape Verde" @if(auth()->user()->country == 'Afganistan') selected @endif >Cape Verde</option>
                                                    <option value="Cayman Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Cayman Islands</option>
                                                    <option value="Central African Republic" @if(auth()->user()->country == 'Afganistan') selected @endif >Central African Republic</option>
                                                    <option value="Chad" @if(auth()->user()->country == 'Afganistan') selected @endif >Chad</option>
                                                    <option value="Channel Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Channel Islands</option>
                                                    <option value="Chile" @if(auth()->user()->country == 'Afganistan') selected @endif >Chile</option>
                                                    <option value="China" @if(auth()->user()->country == 'Afganistan') selected @endif >China</option>
                                                    <option value="Christmas Island" @if(auth()->user()->country == 'Afganistan') selected @endif >Christmas Island</option>
                                                    <option value="Cocos Island" @if(auth()->user()->country == 'Afganistan') selected @endif >Cocos Island</option>
                                                    <option value="Colombia" @if(auth()->user()->country == 'Afganistan') selected @endif >Colombia</option>
                                                    <option value="Comoros" @if(auth()->user()->country == 'Afganistan') selected @endif >Comoros</option>
                                                    <option value="Congo" @if(auth()->user()->country == 'Afganistan') selected @endif >Congo</option>
                                                    <option value="Cook Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Cook Islands</option>
                                                    <option value="Costa Rica" @if(auth()->user()->country == 'Afganistan') selected @endif >Costa Rica</option>
                                                    <option value="Cote DIvoire" @if(auth()->user()->country == 'Afganistan') selected @endif >Cote DIvoire</option>
                                                    <option value="Croatia" @if(auth()->user()->country == 'Afganistan') selected @endif >Croatia</option>
                                                    <option value="Cuba" @if(auth()->user()->country == 'Afganistan') selected @endif >Cuba</option>
                                                    <option value="Curaco" @if(auth()->user()->country == 'Afganistan') selected @endif >Curacao</option>
                                                    <option value="Cyprus" @if(auth()->user()->country == 'Afganistan') selected @endif >Cyprus</option>
                                                    <option value="Czech Republic" @if(auth()->user()->country == 'Afganistan') selected @endif >Czech Republic</option>
                                                    <option value="Denmark" @if(auth()->user()->country == 'Afganistan') selected @endif >Denmark</option>
                                                    <option value="Djibouti" @if(auth()->user()->country == 'Afganistan') selected @endif >Djibouti</option>
                                                    <option value="Dominica" @if(auth()->user()->country == 'Afganistan') selected @endif >Dominica</option>
                                                    <option value="Dominican Republic" @if(auth()->user()->country == 'Afganistan') selected @endif >Dominican Republic</option>
                                                    <option value="East Timor" @if(auth()->user()->country == 'Afganistan') selected @endif >East Timor</option>
                                                    <option value="Ecuador" @if(auth()->user()->country == 'Afganistan') selected @endif >Ecuador</option>
                                                    <option value="Egypt" @if(auth()->user()->country == 'Afganistan') selected @endif >Egypt</option>
                                                    <option value="El Salvador" @if(auth()->user()->country == 'Afganistan') selected @endif >El Salvador</option>
                                                    <option value="Equatorial Guinea" @if(auth()->user()->country == 'Afganistan') selected @endif >Equatorial Guinea</option>
                                                    <option value="Eritrea" @if(auth()->user()->country == 'Afganistan') selected @endif >Eritrea</option>
                                                    <option value="Estonia" @if(auth()->user()->country == 'Afganistan') selected @endif >Estonia</option>
                                                    <option value="Ethiopia" @if(auth()->user()->country == 'Afganistan') selected @endif >Ethiopia</option>
                                                    <option value="Falkland Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Falkland Islands</option>
                                                    <option value="Faroe Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Faroe Islands</option>
                                                    <option value="Fiji" @if(auth()->user()->country == 'Afganistan') selected @endif >Fiji</option>
                                                    <option value="Finland" @if(auth()->user()->country == 'Afganistan') selected @endif >Finland</option>
                                                    <option value="France" @if(auth()->user()->country == 'Afganistan') selected @endif >France</option>
                                                    <option value="French Guiana" @if(auth()->user()->country == 'Afganistan') selected @endif >French Guiana</option>
                                                    <option value="French Polynesia" @if(auth()->user()->country == 'Afganistan') selected @endif >French Polynesia</option>
                                                    <option value="French Southern Ter" @if(auth()->user()->country == 'Afganistan') selected @endif >French Southern Ter</option>
                                                    <option value="Gabon" @if(auth()->user()->country == 'Afganistan') selected @endif >Gabon</option>
                                                    <option value="Gambia" @if(auth()->user()->country == 'Afganistan') selected @endif >Gambia</option>
                                                    <option value="Georgia" @if(auth()->user()->country == 'Afganistan') selected @endif >Georgia</option>
                                                    <option value="Germany" @if(auth()->user()->country == 'Afganistan') selected @endif >Germany</option>
                                                    <option value="Ghana" @if(auth()->user()->country == 'Afganistan') selected @endif >Ghana</option>
                                                    <option value="Gibraltar" @if(auth()->user()->country == 'Afganistan') selected @endif >Gibraltar</option>
                                                    <option value="Great Britain" @if(auth()->user()->country == 'Afganistan') selected @endif >Great Britain</option>
                                                    <option value="Greece" @if(auth()->user()->country == 'Afganistan') selected @endif >Greece</option>
                                                    <option value="Greenland" @if(auth()->user()->country == 'Afganistan') selected @endif >Greenland</option>
                                                    <option value="Grenada" @if(auth()->user()->country == 'Afganistan') selected @endif >Grenada</option>
                                                    <option value="Guadeloupe" @if(auth()->user()->country == 'Afganistan') selected @endif >Guadeloupe</option>
                                                    <option value="Guam" @if(auth()->user()->country == 'Afganistan') selected @endif >Guam</option>
                                                    <option value="Guatemala" @if(auth()->user()->country == 'Afganistan') selected @endif >Guatemala</option>
                                                    <option value="Guinea" @if(auth()->user()->country == 'Afganistan') selected @endif >Guinea</option>
                                                    <option value="Guyana" @if(auth()->user()->country == 'Afganistan') selected @endif >Guyana</option>
                                                    <option value="Haiti" @if(auth()->user()->country == 'Afganistan') selected @endif >Haiti</option>
                                                    <option value="Hawaii" @if(auth()->user()->country == 'Afganistan') selected @endif >Hawaii</option>
                                                    <option value="Honduras" @if(auth()->user()->country == 'Afganistan') selected @endif >Honduras</option>
                                                    <option value="Hong Kong" @if(auth()->user()->country == 'Afganistan') selected @endif >Hong Kong</option>
                                                    <option value="Hungary" @if(auth()->user()->country == 'Afganistan') selected @endif >Hungary</option>
                                                    <option value="Iceland" @if(auth()->user()->country == 'Afganistan') selected @endif >Iceland</option>
                                                    <option value="Indonesia" @if(auth()->user()->country == 'Afganistan') selected @endif >Indonesia</option>
                                                    <option value="India" @if(auth()->user()->country == 'Afganistan') selected @endif >India</option>
                                                    <option value="Iran" @if(auth()->user()->country == 'Afganistan') selected @endif >Iran</option>
                                                    <option value="Iraq" @if(auth()->user()->country == 'Afganistan') selected @endif >Iraq</option>
                                                    <option value="Ireland" @if(auth()->user()->country == 'Afganistan') selected @endif >Ireland</option>
                                                    <option value="Isle of Man" @if(auth()->user()->country == 'Afganistan') selected @endif >Isle of Man</option>
                                                    <option value="Israel" @if(auth()->user()->country == 'Afganistan') selected @endif >Israel</option>
                                                    <option value="Italy" @if(auth()->user()->country == 'Afganistan') selected @endif >Italy</option>
                                                    <option value="Jamaica" @if(auth()->user()->country == 'Afganistan') selected @endif >Jamaica</option>
                                                    <option value="Japan" @if(auth()->user()->country == 'Afganistan') selected @endif >Japan</option>
                                                    <option value="Jordan" @if(auth()->user()->country == 'Afganistan') selected @endif >Jordan</option>
                                                    <option value="Kazakhstan" @if(auth()->user()->country == 'Afganistan') selected @endif >Kazakhstan</option>
                                                    <option value="Kenya" @if(auth()->user()->country == 'Afganistan') selected @endif >Kenya</option>
                                                    <option value="Kiribati" @if(auth()->user()->country == 'Afganistan') selected @endif >Kiribati</option>
                                                    <option value="Korea North" @if(auth()->user()->country == 'Afganistan') selected @endif >Korea North</option>
                                                    <option value="Korea Sout" @if(auth()->user()->country == 'Afganistan') selected @endif >Korea South</option>
                                                    <option value="Kuwait" @if(auth()->user()->country == 'Afganistan') selected @endif >Kuwait</option>
                                                    <option value="Kyrgyzstan" @if(auth()->user()->country == 'Afganistan') selected @endif >Kyrgyzstan</option>
                                                    <option value="Laos" @if(auth()->user()->country == 'Afganistan') selected @endif >Laos</option>
                                                    <option value="Latvia" @if(auth()->user()->country == 'Afganistan') selected @endif >Latvia</option>
                                                    <option value="Lebanon" @if(auth()->user()->country == 'Afganistan') selected @endif >Lebanon</option>
                                                    <option value="Lesotho" @if(auth()->user()->country == 'Afganistan') selected @endif >Lesotho</option>
                                                    <option value="Liberia" @if(auth()->user()->country == 'Afganistan') selected @endif >Liberia</option>
                                                    <option value="Libya" @if(auth()->user()->country == 'Afganistan') selected @endif >Libya</option>
                                                    <option value="Liechtenstein" @if(auth()->user()->country == 'Afganistan') selected @endif >Liechtenstein</option>
                                                    <option value="Lithuania" @if(auth()->user()->country == 'Afganistan') selected @endif >Lithuania</option>
                                                    <option value="Luxembourg" @if(auth()->user()->country == 'Afganistan') selected @endif >Luxembourg</option>
                                                    <option value="Macau" @if(auth()->user()->country == 'Afganistan') selected @endif >Macau</option>
                                                    <option value="Macedonia" @if(auth()->user()->country == 'Afganistan') selected @endif >Macedonia</option>
                                                    <option value="Madagascar" @if(auth()->user()->country == 'Afganistan') selected @endif >Madagascar</option>
                                                    <option value="Malaysia" @if(auth()->user()->country == 'Afganistan') selected @endif >Malaysia</option>
                                                    <option value="Malawi" @if(auth()->user()->country == 'Afganistan') selected @endif >Malawi</option>
                                                    <option value="Maldives" @if(auth()->user()->country == 'Afganistan') selected @endif >Maldives</option>
                                                    <option value="Mali" @if(auth()->user()->country == 'Afganistan') selected @endif >Mali</option>
                                                    <option value="Malta" @if(auth()->user()->country == 'Afganistan') selected @endif >Malta</option>
                                                    <option value="Marshall Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Marshall Islands</option>
                                                    <option value="Martinique" @if(auth()->user()->country == 'Afganistan') selected @endif >Martinique</option>
                                                    <option value="Mauritania" @if(auth()->user()->country == 'Afganistan') selected @endif >Mauritania</option>
                                                    <option value="Mauritius" @if(auth()->user()->country == 'Afganistan') selected @endif >Mauritius</option>
                                                    <option value="Mayotte" @if(auth()->user()->country == 'Afganistan') selected @endif >Mayotte</option>
                                                    <option value="Mexico" @if(auth()->user()->country == 'Afganistan') selected @endif >Mexico</option>
                                                    <option value="Midway Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Midway Islands</option>
                                                    <option value="Moldova" @if(auth()->user()->country == 'Afganistan') selected @endif >Moldova</option>
                                                    <option value="Monaco" @if(auth()->user()->country == 'Afganistan') selected @endif >Monaco</option>
                                                    <option value="Mongolia" @if(auth()->user()->country == 'Afganistan') selected @endif >Mongolia</option>
                                                    <option value="Montserrat" @if(auth()->user()->country == 'Afganistan') selected @endif >Montserrat</option>
                                                    <option value="Morocco" @if(auth()->user()->country == 'Afganistan') selected @endif >Morocco</option>
                                                    <option value="Mozambique" @if(auth()->user()->country == 'Afganistan') selected @endif >Mozambique</option>
                                                    <option value="Myanmar" @if(auth()->user()->country == 'Afganistan') selected @endif >Myanmar</option>
                                                    <option value="Nambia" @if(auth()->user()->country == 'Afganistan') selected @endif >Nambia</option>
                                                    <option value="Nauru" @if(auth()->user()->country == 'Afganistan') selected @endif >Nauru</option>
                                                    <option value="Nepal" @if(auth()->user()->country == 'Afganistan') selected @endif >Nepal</option>
                                                    <option value="Netherland Antilles" @if(auth()->user()->country == 'Afganistan') selected @endif >Netherland Antilles</option>
                                                    <option value="Netherlands" @if(auth()->user()->country == 'Afganistan') selected @endif >Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis" @if(auth()->user()->country == 'Afganistan') selected @endif >Nevis</option>
                                                    <option value="New Caledonia" @if(auth()->user()->country == 'Afganistan') selected @endif >New Caledonia</option>
                                                    <option value="New Zealand" @if(auth()->user()->country == 'Afganistan') selected @endif >New Zealand</option>
                                                    <option value="Nicaragua" @if(auth()->user()->country == 'Afganistan') selected @endif >Nicaragua</option>
                                                    <option value="Niger" @if(auth()->user()->country == 'Afganistan') selected @endif >Niger</option>
                                                    <option value="Nigeria" @if(auth()->user()->country == 'Afganistan') selected @endif >Nigeria</option>
                                                    <option value="Niue" @if(auth()->user()->country == 'Afganistan') selected @endif >Niue</option>
                                                    <option value="Norfolk Island" @if(auth()->user()->country == 'Afganistan') selected @endif >Norfolk Island</option>
                                                    <option value="Norway" @if(auth()->user()->country == 'Afganistan') selected @endif >Norway</option>
                                                    <option value="Oman" @if(auth()->user()->country == 'Afganistan') selected @endif >Oman</option>
                                                    <option value="Pakistan" @if(auth()->user()->country == 'Afganistan') selected @endif >Pakistan</option>
                                                    <option value="Palau Island" @if(auth()->user()->country == 'Afganistan') selected @endif >Palau Island</option>
                                                    <option value="Palestine" @if(auth()->user()->country == 'Afganistan') selected @endif >Palestine</option>
                                                    <option value="Panama" @if(auth()->user()->country == 'Afganistan') selected @endif >Panama</option>
                                                    <option value="Papua New Guinea" @if(auth()->user()->country == 'Afganistan') selected @endif >Papua New Guinea</option>
                                                    <option value="Paraguay" @if(auth()->user()->country == 'Afganistan') selected @endif >Paraguay</option>
                                                    <option value="Peru" @if(auth()->user()->country == 'Afganistan') selected @endif >Peru</option>
                                                    <option value="Phillipines" @if(auth()->user()->country == 'Afganistan') selected @endif >Philippines</option>
                                                    <option value="Pitcairn Island" @if(auth()->user()->country == 'Afganistan') selected @endif >Pitcairn Island</option>
                                                    <option value="Poland" @if(auth()->user()->country == 'Afganistan') selected @endif >Poland</option>
                                                    <option value="Portugal" @if(auth()->user()->country == 'Afganistan') selected @endif >Portugal</option>
                                                    <option value="Puerto Rico" @if(auth()->user()->country == 'Afganistan') selected @endif >Puerto Rico</option>
                                                    <option value="Qatar" @if(auth()->user()->country == 'Afganistan') selected @endif >Qatar</option>
                                                    <option value="Republic of Montenegro" @if(auth()->user()->country == 'Afganistan') selected @endif >Republic of Montenegro</option>
                                                    <option value="Republic of Serbia" @if(auth()->user()->country == 'Afganistan') selected @endif >Republic of Serbia</option>
                                                    <option value="Reunion" @if(auth()->user()->country == 'Afganistan') selected @endif >Reunion</option>
                                                    <option value="Romania" @if(auth()->user()->country == 'Afganistan') selected @endif >Romania</option>
                                                    <option value="Russia" @if(auth()->user()->country == 'Afganistan') selected @endif >Russia</option>
                                                    <option value="Rwanda" @if(auth()->user()->country == 'Afganistan') selected @endif >Rwanda</option>
                                                    <option value="St Barthelemy" @if(auth()->user()->country == 'Afganistan') selected @endif >St Barthelemy</option>
                                                    <option value="St Eustatius" @if(auth()->user()->country == 'Afganistan') selected @endif >St Eustatius</option>
                                                    <option value="St Helena" @if(auth()->user()->country == 'Afganistan') selected @endif >St Helena</option>
                                                    <option value="St Kitts-Nevis" @if(auth()->user()->country == 'Afganistan') selected @endif >St Kitts-Nevis</option>
                                                    <option value="St Lucia" @if(auth()->user()->country == 'Afganistan') selected @endif >St Lucia</option>
                                                    <option value="St Maarten" @if(auth()->user()->country == 'Afganistan') selected @endif >St Maarten</option>
                                                    <option value="St Pierre & Miquelon" @if(auth()->user()->country == 'Afganistan') selected @endif >St Pierre & Miquelon</option>
                                                    <option value="St Vincent & Grenadines" @if(auth()->user()->country == 'Afganistan') selected @endif >St Vincent & Grenadines</option>
                                                    <option value="Saipan" @if(auth()->user()->country == 'Afganistan') selected @endif >Saipan</option>
                                                    <option value="Samoa" @if(auth()->user()->country == 'Afganistan') selected @endif >Samoa</option>
                                                    <option value="Samoa American" @if(auth()->user()->country == 'Afganistan') selected @endif >Samoa American</option>
                                                    <option value="San Marino" @if(auth()->user()->country == 'Afganistan') selected @endif >San Marino</option>
                                                    <option value="Sao Tome & Principe" @if(auth()->user()->country == 'Afganistan') selected @endif >Sao Tome & Principe</option>
                                                    <option value="Saudi Arabia" @if(auth()->user()->country == 'Afganistan') selected @endif >Saudi Arabia</option>
                                                    <option value="Senegal" @if(auth()->user()->country == 'Afganistan') selected @endif >Senegal</option>
                                                    <option value="Seychelles" @if(auth()->user()->country == 'Afganistan') selected @endif >Seychelles</option>
                                                    <option value="Sierra Leone" @if(auth()->user()->country == 'Afganistan') selected @endif >Sierra Leone</option>
                                                    <option value="Singapore" @if(auth()->user()->country == 'Afganistan') selected @endif >Singapore</option>
                                                    <option value="Slovakia" @if(auth()->user()->country == 'Afganistan') selected @endif >Slovakia</option>
                                                    <option value="Slovenia" @if(auth()->user()->country == 'Afganistan') selected @endif >Slovenia</option>
                                                    <option value="Solomon Islands" @if(auth()->user()->country == 'Afganistan') selected @endif >Solomon Islands</option>
                                                    <option value="Somalia" @if(auth()->user()->country == 'Afganistan') selected @endif >Somalia</option>
                                                    <option value="South Africa" @if(auth()->user()->country == 'Afganistan') selected @endif >South Africa</option>
                                                    <option value="Spain" @if(auth()->user()->country == 'Afganistan') selected @endif >Spain</option>
                                                    <option value="Sri Lanka" @if(auth()->user()->country == 'Afganistan') selected @endif >Sri Lanka</option>
                                                    <option value="Sudan" @if(auth()->user()->country == 'Afganistan') selected @endif >Sudan</option>
                                                    <option value="Suriname" @if(auth()->user()->country == 'Afganistan') selected @endif >Suriname</option>
                                                    <option value="Swaziland" @if(auth()->user()->country == 'Afganistan') selected @endif >Swaziland</option>
                                                    <option value="Sweden" @if(auth()->user()->country == 'Afganistan') selected @endif >Sweden</option>
                                                    <option value="Switzerland" @if(auth()->user()->country == 'Afganistan') selected @endif >Switzerland</option>
                                                    <option value="Syria" @if(auth()->user()->country == 'Afganistan') selected @endif >Syria</option>
                                                    <option value="Tahiti" @if(auth()->user()->country == 'Afganistan') selected @endif >Tahiti</option>
                                                    <option value="Taiwan" @if(auth()->user()->country == 'Afganistan') selected @endif >Taiwan</option>
                                                    <option value="Tajikistan" @if(auth()->user()->country == 'Afganistan') selected @endif >Tajikistan</option>
                                                    <option value="Tanzania" @if(auth()->user()->country == 'Afganistan') selected @endif >Tanzania</option>
                                                    <option value="Thailand" @if(auth()->user()->country == 'Afganistan') selected @endif >Thailand</option>
                                                    <option value="Togo" @if(auth()->user()->country == 'Afganistan') selected @endif >Togo</option>
                                                    <option value="Tokelau" @if(auth()->user()->country == 'Afganistan') selected @endif >Tokelau</option>
                                                    <option value="Tonga" @if(auth()->user()->country == 'Afganistan') selected @endif >Tonga</option>
                                                    <option value="Trinidad & Tobago" @if(auth()->user()->country == 'Afganistan') selected @endif >Trinidad & Tobago</option>
                                                    <option value="Tunisia" @if(auth()->user()->country == 'Afganistan') selected @endif >Tunisia</option>
                                                    <option value="Turkey" @if(auth()->user()->country == 'Afganistan') selected @endif >Turkey</option>
                                                    <option value="Turkmenistan" @if(auth()->user()->country == 'Afganistan') selected @endif >Turkmenistan</option>
                                                    <option value="Turks & Caicos Is" @if(auth()->user()->country == 'Afganistan') selected @endif >Turks & Caicos Is</option>
                                                    <option value="Tuvalu" @if(auth()->user()->country == 'Afganistan') selected @endif >Tuvalu</option>
                                                    <option value="Uganda" @if(auth()->user()->country == 'Afganistan') selected @endif >Uganda</option>
                                                    <option value="United Kingdom" @if(auth()->user()->country == 'Afganistan') selected @endif >United Kingdom</option>
                                                    <option value="Ukraine" @if(auth()->user()->country == 'Afganistan') selected @endif >Ukraine</option>
                                                    <option value="United Arab Erimates" @if(auth()->user()->country == 'Afganistan') selected @endif >United Arab Emirates</option>
                                                    <option value="United States of America" @if(auth()->user()->country == 'Afganistan') selected @endif >United States of America</option>
                                                    <option value="Uraguay" @if(auth()->user()->country == 'Afganistan') selected @endif >Uruguay</option>
                                                    <option value="Uzbekistan" @if(auth()->user()->country == 'Afganistan') selected @endif >Uzbekistan</option>
                                                    <option value="Vanuatu" @if(auth()->user()->country == 'Afganistan') selected @endif >Vanuatu</option>
                                                    <option value="Vatican City State" @if(auth()->user()->country == 'Afganistan') selected @endif >Vatican City State</option>
                                                    <option value="Venezuela" @if(auth()->user()->country == 'Afganistan') selected @endif >Venezuela</option>
                                                    <option value="Vietnam" @if(auth()->user()->country == 'Afganistan') selected @endif >Vietnam</option>
                                                    <option value="Virgin Islands (Brit)" @if(auth()->user()->country == 'Afganistan') selected @endif >Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)" @if(auth()->user()->country == 'Afganistan') selected @endif >Virgin Islands (USA)</option>
                                                    <option value="Wake Island" @if(auth()->user()->country == 'Afganistan') selected @endif >Wake Island</option>
                                                    <option value="Wallis & Futana Is" @if(auth()->user()->country == 'Afganistan') selected @endif >Wallis & Futana Is</option>
                                                    <option value="Yemen" @if(auth()->user()->country == 'Afganistan') selected @endif >Yemen</option>
                                                    <option value="Zaire" @if(auth()->user()->country == 'Afganistan') selected @endif >Zaire</option>
                                                    <option value="Zambia" @if(auth()->user()->country == 'Afganistan') selected @endif >Zambia</option>
                                                    <option value="Zimbabwe" @if(auth()->user()->country == 'Afganistan') selected @endif >Zimbabwe</option>
                                                </select>
                                @error('country')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Zip</label>
                                <input type="text" class="form-control border border-dark" name="zip_code" value="{{auth()->user()->zip_code}}">
                                @error('email')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <br><br>
                              <input type="submit" class=" form-control btn btn-outline-primary" value="Save"><br><br>
                              @if(auth()->user()->upgrade_account == 0)
                              <button type="button" class="form-control btn btn-primary" data-toggle="modal" data-target="#myModalPayConfirm">Upgrade account</button>
                              @endif
                            </form>
                            
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
      <form action="{{ route('accountUpgrade') }}" method="post" class="modal-body text-center">
      @csrf
            <span class="small-font-size">
                Make a payment
            </span><br><br>
            <span class="big-font-size">By clicking proceed, a total amount of ${{$syscfg->upgrade_fee}} will be deducted from your account balance</span><br><br>
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
            <span class="small-font-size text-center">Account upgrade successful!</span><br><br>
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
                    $('#myModal').modal('show');
                });
            
                window.onload = (event) => {
                   bs4pop.notice('Input error', {position: 'topright', type: 'danger'})
                };
            @endif

            @if(session('statusSuccess'))
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
            @endif
        </script>

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