<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders </title>
        @include('layouts.meta') 
        <?php
            $page = "account.php";
        ?>
    </head>
    <body>
        @include('layouts.header')
        <main class="main">
            <div class="bg-img-page">
                <section class="min-vh-100">
                    <div id="cover-caption">
                        <div class="container">
                            <div class="row text-white">
                                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
                                    <div class="cover">
                                        <h2 class="force-color-black">Register</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="102" height="34" viewBox="0 0 102 34" fill="none">
<circle cx="85" cy="17" r="16.5"  fill="#014EE1"/>
<path d="M78.912 24C78.912 23.056 79.016 22.216 79.224 21.48C79.448 20.744 79.832 20.08 80.376 19.488C80.92 18.896 81.688 18.32 82.68 17.76C83.56 17.296 84.296 16.904 84.888 16.584C85.48 16.264 85.928 15.96 86.232 15.672C86.552 15.368 86.712 15.016 86.712 14.616C86.712 14.136 86.52 13.728 86.136 13.392C85.752 13.04 85.208 12.864 84.504 12.864C83.736 12.864 83.072 13.048 82.512 13.416C81.968 13.784 81.496 14.208 81.096 14.688L79.056 12.336C79.344 12.032 79.776 11.704 80.352 11.352C80.928 11 81.616 10.696 82.416 10.44C83.216 10.184 84.096 10.056 85.056 10.056C86.688 10.056 87.952 10.44 88.848 11.208C89.76 11.96 90.216 12.936 90.216 14.136C90.216 14.888 90.04 15.528 89.688 16.056C89.352 16.568 88.928 17.008 88.416 17.376C87.92 17.728 87.44 18.04 86.976 18.312C85.952 18.824 85.144 19.272 84.552 19.656C83.976 20.04 83.512 20.52 83.16 21.096H90.48V24H78.912Z" fill="white"/>
<path d="M68 17.5C68.2761 17.5 68.5 17.2761 68.5 17C68.5 16.7239 68.2761 16.5 68 16.5V17.5ZM34 17.5H68V16.5H34V17.5Z" fill="#014EE1"/>
<circle cx="17" cy="17" r="17" fill="#014EE1"/>
<path d="M22.28 21.096V24H12.536V21.096H15.944V13.824C15.752 14.064 15.424 14.32 14.96 14.592C14.512 14.864 14.016 15.096 13.472 15.288C12.944 15.48 12.472 15.576 12.056 15.576V12.576C12.344 12.576 12.688 12.488 13.088 12.312C13.504 12.12 13.912 11.896 14.312 11.64C14.728 11.384 15.08 11.136 15.368 10.896C15.672 10.64 15.864 10.44 15.944 10.296H19.232V21.096H22.28Z" fill="white"/>
</svg>
                                        <br><br>
                                    </div>
                                    <div class="px-2">
                                        <form action="{{ route('registerUpdate') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $user->id }}" name="user_id" />
                                            <input type="hidden" value="{{ $user->email }}" name="email" />
                                            <span class="force-color-black"><span class="force-color-blue">*</span>Required fields</span><br>
                                            <div class="form-group">
                                                <label class="force-color-black">Username<span class="force-color-blue">*</span></label>
                                                <input type="text" class="form-control input-outline" name="username" value="{{ old('username') }}" >
                                                @error('username')
                                                    <span class="force-color-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Country <span class="force-color-blue">*</span></label>
                                                <select class="form-control input-outline" name="country">
    <option value="Afganistan" @if(old('country') == 'Afganistan') selected @endif >Afghanistan</option>
    <option value="Albania" @if(old('country') == 'Albania') selected @endif >Albania</option>
    <option value="Algeria" @if(old('country') == 'Algeria') selected @endif >Algeria</option>
    <option value="American Samoa" @if(old('country') == 'American Samoa') selected @endif >American Samoa</option>
    <option value="Andorra" @if(old('country') == 'Andorra') selected @endif >Andorra</option>
    <option value="Angola" @if(old('country') == 'Angola') selected @endif >Angola</option>
    <option value="Anguilla" @if(old('country') == 'Anguilla') selected @endif >Anguilla</option>
    <option value="Antigua & Barbuda" @if(old('country') == 'Antigua & Barbuda') selected @endif >Antigua & Barbuda</option>
    <option value="Argentina" @if(old('country') == 'Argentina') selected @endif >Argentina</option>
    <option value="Armenia" @if(old('country') == 'Armenia') selected @endif >Armenia</option>
    <option value="Aruba" @if(old('country') == 'Aruba') selected @endif >Aruba</option>
    <option value="Australia" @if(old('country') == 'Australia') selected @endif >Australia</option>
    <option value="Austria" @if(old('country') == 'Austria') selected @endif >Austria</option>
    <option value="Azerbaijan" @if(old('country') == 'Azerbaijan') selected @endif >Azerbaijan</option>
    <option value="Bahamas" @if(old('country') == 'Bahamas') selected @endif >Bahamas</option>
    <option value="Bahrain" @if(old('country') == 'Bahrain') selected @endif >Bahrain</option>
    <option value="Bangladesh" @if(old('country') == 'Bangladesh') selected @endif >Bangladesh</option>
    <option value="Barbados" @if(old('country') == 'Barbados') selected @endif >Barbados</option>
    <option value="Belarus" @if(old('country') == 'Belarus') selected @endif >Belarus</option>
    <option value="Belgium" @if(old('country') == 'Belgium') selected @endif >Belgium</option>
    <option value="Belize" @if(old('country') == 'Belize') selected @endif >Belize</option>
    <option value="Benin" @if(old('country') == 'Benin') selected @endif >Benin</option>
    <option value="Bermuda" @if(old('country') == 'Bermuda') selected @endif >Bermuda</option>
    <option value="Bhutan" @if(old('country') == 'Bhutan') selected @endif >Bhutan</option>
    <option value="Bolivia" @if(old('country') == 'Bolivia') selected @endif >Bolivia</option>
    <option value="Bonaire" @if(old('country') == 'Bonaire') selected @endif >Bonaire</option>
    <option value="Bosnia & Herzegovina" @if(old('country') == 'Bosnia & Herzegovina') selected @endif >Bosnia & Herzegovina</option>
    <option value="Botswana" @if(old('country') == 'Botswana') selected @endif >Botswana</option>
    <option value="Brazil" @if(old('country') == 'Brazil') selected @endif >Brazil</option>
    <option value="British Indian Ocean Ter" @if(old('country') == 'British Indian Ocean Ter') selected @endif >British Indian Ocean Ter</option>
    <option value="Brunei" @if(old('country') == 'Brunei') selected @endif >Brunei</option>
    <option value="Bulgaria" @if(old('country') == 'Bulgaria') selected @endif >Bulgaria</option>
    <option value="Burkina Faso" @if(old('country') == 'Burkina Faso') selected @endif >Burkina Faso</option>
    <option value="Burundi" @if(old('country') == 'Burundi') selected @endif >Burundi</option>
    <option value="Cambodia" @if(old('country') == 'Cambodia') selected @endif >Cambodia</option>
    <option value="Cameroon" @if(old('country') == 'Cameroon') selected @endif >Cameroon</option>
    <option value="Canada" @if(old('country') == 'Canada') selected @endif >Canada</option>
    <option value="Canary Islands" @if(old('country') == 'Canary Islands') selected @endif >Canary Islands</option>
    <option value="Cape Verde" @if(old('country') == 'Cape Verde') selected @endif >Cape Verde</option>
    <option value="Cayman Islands" @if(old('country') == 'Cayman Islands') selected @endif >Cayman Islands</option>
    <option value="Central African Republic" @if(old('country') == 'Central African Republic') selected @endif >Central African Republic</option>
    <option value="Chad" @if(old('country') == 'Chad') selected @endif >Chad</option>
    <option value="Channel Islands" @if(old('country') == 'Channel Islands') selected @endif >Channel Islands</option>
    <option value="Chile" @if(old('country') == 'Chile') selected @endif >Chile</option>
    <option value="China" @if(old('country') == 'China') selected @endif >China</option>
    <option value="Christmas Island" @if(old('country') == 'Christmas Island') selected @endif >Christmas Island</option>
    <option value="Cocos Island" @if(old('country') == 'Cocos Island') selected @endif >Cocos Island</option>
    <option value="Colombia" @if(old('country') == 'Colombia') selected @endif >Colombia</option>
    <option value="Comoros" @if(old('country') == 'Comoros') selected @endif >Comoros</option>
    <option value="Congo" @if(old('country') == 'Congo') selected @endif >Congo</option>
    <option value="Cook Islands" @if(old('country') == 'Cook Islands') selected @endif >Cook Islands</option>
    <option value="Costa Rica" @if(old('country') == 'Costa Rica') selected @endif >Costa Rica</option>
    <option value="Cote DIvoire" @if(old('country') == 'Cote DIvoire') selected @endif >Cote DIvoire</option>
    <option value="Croatia" @if(old('country') == 'Croatia') selected @endif >Croatia</option>
    <option value="Cuba" @if(old('country') == 'Cuba') selected @endif >Cuba</option>
    <option value="Curaco" @if(old('country') == 'Curacao') selected @endif >Curacao</option>
    <option value="Cyprus" @if(old('country') == 'Cyprus') selected @endif >Cyprus</option>
    <option value="Czech Republic" @if(old('country') == 'Czech Republic') selected @endif >Czech Republic</option>
    <option value="Denmark" @if(old('country') == 'Denmark') selected @endif >Denmark</option>
    <option value="Djibouti" @if(old('country') == 'Djibouti') selected @endif >Djibouti</option>
    <option value="Dominica" @if(old('country') == 'Dominica') selected @endif >Dominica</option>
    <option value="Dominican Republic" @if(old('country') == 'Dominican Republic') selected @endif >Dominican Republic</option>
    <option value="East Timor" @if(old('country') == 'East Timor') selected @endif >East Timor</option>
    <option value="Ecuador" @if(old('country') == 'Ecuador') selected @endif >Ecuador</option>
    <option value="Egypt" @if(old('country') == 'Egypt') selected @endif >Egypt</option>
    <option value="El Salvador" @if(old('country') == 'El Salvador') selected @endif >El Salvador</option>
    <option value="Equatorial Guinea" @if(old('country') == 'Equatorial Guinea') selected @endif >Equatorial Guinea</option>
    <option value="Eritrea" @if(old('country') == 'Eritrea') selected @endif >Eritrea</option>
    <option value="Estonia" @if(old('country') == 'Estonia') selected @endif >Estonia</option>
    <option value="Ethiopia" @if(old('country') == 'Ethiopia') selected @endif >Ethiopia</option>
    <option value="Falkland Islands" @if(old('country') == 'Falkland Islands') selected @endif >Falkland Islands</option>
    <option value="Faroe Islands" @if(old('country') == '>Faroe Islands') selected @endif >Faroe Islands</option>
    <option value="Fiji" @if(old('country') == 'Fiji') selected @endif >Fiji</option>
    <option value="Finland" @if(old('country') == 'Finland') selected @endif >Finland</option>
    <option value="France" @if(old('country') == 'France') selected @endif >France</option>
    <option value="French Guiana" @if(old('country') == 'French Guiana') selected @endif >French Guiana</option>
    <option value="French Polynesia" @if(old('country') == 'French Polynesia') selected @endif >French Polynesia</option>
    <option value="French Southern Ter" @if(old('country') == 'French Southern Te') selected @endif >French Southern Ter</option>
    <option value="Gabon" @if(old('country') == 'Gabon') selected @endif >Gabon</option>
    <option value="Gambia" @if(old('country') == 'Gambia') selected @endif >Gambia</option>
    <option value="Georgia" @if(old('country') == 'Georgia') selected @endif >Georgia</option>
    <option value="Germany" @if(old('country') == 'Germany') selected @endif >Germany</option>
    <option value="Ghana" @if(old('country') == 'Ghana') selected @endif >Ghana</option>
    <option value="Gibraltar" @if(old('country') == 'Gibraltar') selected @endif >Gibraltar</option>
    <option value="Great Britain" @if(old('country') == 'Great Britain') selected @endif >Great Britain</option>
    <option value="Greece" @if(old('country') == 'Greece') selected @endif >Greece</option>
    <option value="Greenland" @if(old('country') == 'Greenland') selected @endif >Greenland</option>
    <option value="Grenada" @if(old('country') == 'Grenada') selected @endif >Grenada</option>
    <option value="Guadeloupe" @if(old('country') == 'Guadeloupe') selected @endif >Guadeloupe</option>
    <option value="Guam" @if(old('country') == 'Guam') selected @endif >Guam</option>
    <option value="Guatemala" @if(old('country') == 'Guatemala') selected @endif >Guatemala</option>
    <option value="Guinea" @if(old('country') == 'Guinea') selected @endif >Guinea</option>
    <option value="Guyana" @if(old('country') == 'Guyana') selected @endif >Guyana</option>
    <option value="Haiti" @if(old('country') == 'Haiti') selected @endif >Haiti</option>
    <option value="Hawaii" @if(old('country') == 'Hawaii') selected @endif >Hawaii</option>
    <option value="Honduras" @if(old('country') == 'Honduras') selected @endif >Honduras</option>
    <option value="Hong Kong" @if(old('country') == 'Hong Kong') selected @endif >Hong Kong</option>
    <option value="Hungary" @if(old('country') == 'Hungary') selected @endif >Hungary</option>
    <option value="Iceland" @if(old('country') == 'Iceland') selected @endif >Iceland</option>
    <option value="Indonesia" @if(old('country') == 'Indonesia') selected @endif >Indonesia</option>
    <option value="India" @if(old('country') == 'India') selected @endif >India</option>
    <option value="Iran" @if(old('country') == 'Iran') selected @endif >Iran</option>
    <option value="Iraq" @if(old('country') == 'Iraq') selected @endif >Iraq</option>
    <option value="Ireland" @if(old('country') == 'Ireland') selected @endif >Ireland</option>
    <option value="Isle of Man" @if(old('country') == 'Isle of Man') selected @endif >Isle of Man</option>
    <option value="Israel" @if(old('country') == 'Israel') selected @endif >Israel</option>
    <option value="Italy" @if(old('country') == 'Italy') selected @endif >Italy</option>
    <option value="Jamaica" @if(old('country') == 'Jamaica') selected @endif >Jamaica</option>
    <option value="Japan" @if(old('country') == 'Japan') selected @endif >Japan</option>
    <option value="Jordan" @if(old('country') == 'Jordan') selected @endif >Jordan</option>
    <option value="Kazakhstan" @if(old('country') == 'Kazakhstan') selected @endif >Kazakhstan</option>
    <option value="Kenya" @if(old('country') == 'Kenya') selected @endif >Kenya</option>
    <option value="Kiribati" @if(old('country') == 'Kiribati') selected @endif >Kiribati</option>
    <option value="Korea North" @if(old('country') == 'Korea North') selected @endif >Korea North</option>
    <option value="Korea Sout" @if(old('country') == 'Korea South') selected @endif >Korea South</option>
    <option value="Kuwait" @if(old('country') == 'Kuwait') selected @endif >Kuwait</option>
    <option value="Kyrgyzstan" @if(old('country') == 'Kyrgyzstan') selected @endif >Kyrgyzstan</option>
    <option value="Laos" @if(old('country') == 'Laos') selected @endif >Laos</option>
    <option value="Latvia" @if(old('country') == 'Latvia') selected @endif >Latvia</option>
    <option value="Lebanon" @if(old('country') == 'Lebanon') selected @endif >Lebanon</option>
    <option value="Lesotho" @if(old('country') == 'Lesotho') selected @endif >Lesotho</option>
    <option value="Liberia" @if(old('country') == 'Liberia') selected @endif >Liberia</option>
    <option value="Libya" @if(old('country') == 'Libya') selected @endif >Libya</option>
    <option value="Liechtenstein" @if(old('country') == 'Liechtenstein') selected @endif >Liechtenstein</option>
    <option value="Lithuania" @if(old('country') == 'Lithuania') selected @endif >Lithuania</option>
    <option value="Luxembourg" @if(old('country') == 'Luxembourg') selected @endif >Luxembourg</option>
    <option value="Macau" @if(old('country') == 'Macau') selected @endif >Macau</option>
    <option value="Macedonia" @if(old('country') == 'Macedonia') selected @endif >Macedonia</option>
    <option value="Madagascar" @if(old('country') == 'Madagascar') selected @endif >Madagascar</option>
    <option value="Malaysia" @if(old('country') == 'Malaysia') selected @endif >Malaysia</option>
    <option value="Malawi" @if(old('country') == 'Malawi') selected @endif >Malawi</option>
    <option value="Maldives" @if(old('country') == 'Maldives') selected @endif >Maldives</option>
    <option value="Mali" @if(old('country') == 'Mali') selected @endif >Mali</option>
    <option value="Malta" @if(old('country') == 'Malta') selected @endif >Malta</option>
    <option value="Marshall Islands" @if(old('country') == 'Marshall Islands') selected @endif >Marshall Islands</option>
    <option value="Martinique" @if(old('country') == 'Martinique') selected @endif >Martinique</option>
    <option value="Mauritania" @if(old('country') == 'Mauritania') selected @endif >Mauritania</option>
    <option value="Mauritius" @if(old('country') == 'Mauritius') selected @endif >Mauritius</option>
    <option value="Mayotte" @if(old('country') == 'Mayotte') selected @endif >Mayotte</option>
    <option value="Mexico" @if(old('country') == 'Mexico') selected @endif >Mexico</option>
    <option value="Midway Islands" @if(old('country') == 'Midway Islands') selected @endif >Midway Islands</option>
    <option value="Moldova" @if(old('country') == 'Moldova') selected @endif >Moldova</option>
    <option value="Monaco" @if(old('country') == 'Monaco') selected @endif >Monaco</option>
    <option value="Mongolia" @if(old('country') == 'Mongolia') selected @endif >Mongolia</option>
    <option value="Montserrat" @if(old('country') == 'Montserrat') selected @endif >Montserrat</option>
    <option value="Morocco" @if(old('country') == 'Morocco') selected @endif >Morocco</option>
    <option value="Mozambique" @if(old('country') == 'Mozambique') selected @endif >Mozambique</option>
    <option value="Myanmar" @if(old('country') == 'Myanmar') selected @endif >Myanmar</option>
    <option value="Nambia" @if(old('country') == 'Nambia') selected @endif >Nambia</option>
    <option value="Nauru" @if(old('country') == 'Nauru') selected @endif >Nauru</option>
    <option value="Nepal" @if(old('country') == 'Nepal') selected @endif >Nepal</option>
    <option value="Netherland Antilles" @if(old('country') == 'Netherland Antilles') selected @endif >Netherland Antilles</option>
    <option value="Netherlands" @if(old('country') == 'Netherlands') selected @endif >Netherlands (Holland, Europe)</option>
    <option value="Nevis" @if(old('country') == 'Nevis') selected @endif >Nevis</option>
    <option value="New Caledonia" @if(old('country') == 'New Caledonia') selected @endif >New Caledonia</option>
    <option value="New Zealand" @if(old('country') == 'New Zealand') selected @endif >New Zealand</option>
    <option value="Nicaragua" @if(old('country') == 'Nicaragua') selected @endif >Nicaragua</option>
    <option value="Niger" @if(old('country') == 'Niger') selected @endif >Niger</option>
    <option value="Nigeria" @if(old('country') == 'Nigeria') selected @endif >Nigeria</option>
    <option value="Niue" @if(old('country') == 'Niue') selected @endif >Niue</option>
    <option value="Norfolk Island" @if(old('country') == 'Norfolk Island') selected @endif >Norfolk Island</option>
    <option value="Norway" @if(old('country') == 'Norway') selected @endif >Norway</option>
    <option value="Oman" @if(old('country') == 'Oman') selected @endif >Oman</option>
    <option value="Pakistan" @if(old('country') == 'Pakistan') selected @endif >Pakistan</option>
    <option value="Palau Island" @if(old('country') == 'Palau Island') selected @endif >Palau Island</option>
    <option value="Palestine" @if(old('country') == 'Palestine') selected @endif >Palestine</option>
    <option value="Panama" @if(old('country') == 'Panama') selected @endif >Panama</option>
    <option value="Papua New Guinea" @if(old('country') == 'Papua New Guinea') selected @endif >Papua New Guinea</option>
    <option value="Paraguay" @if(old('country') == 'Paraguay') selected @endif >Paraguay</option>
    <option value="Peru" @if(old('country') == 'Peru') selected @endif >Peru</option>
    <option value="Phillipines" @if(old('country') == 'Philippines') selected @endif >Philippines</option>
    <option value="Pitcairn Island" @if(old('country') == 'Pitcairn Island') selected @endif >Pitcairn Island</option>
    <option value="Poland" @if(old('country') == 'Poland') selected @endif >Poland</option>
    <option value="Portugal" @if(old('country') == 'Portugal') selected @endif >Portugal</option>
    <option value="Puerto Rico" @if(old('country') == 'Puerto Rico') selected @endif >Puerto Rico</option>
    <option value="Qatar" @if(old('country') == 'Qatar') selected @endif >Qatar</option>
    <option value="Republic of Montenegro" @if(old('country') == 'Republic of Montenegro') selected @endif >Republic of Montenegro</option>
    <option value="Republic of Serbia" @if(old('country') == 'Republic of Serbia') selected @endif >Republic of Serbia</option>
    <option value="Reunion" @if(old('country') == 'Reunion') selected @endif >Reunion</option>
    <option value="Romania" @if(old('country') == 'Romania') selected @endif >Romania</option>
    <option value="Russia" @if(old('country') == 'Russia') selected @endif >Russia</option>
    <option value="Rwanda" @if(old('country') == 'Rwanda') selected @endif >Rwanda</option>
    <option value="St Barthelemy" @if(old('country') == 'St Barthelemy') selected @endif >St Barthelemy</option>
    <option value="St Eustatius" @if(old('country') == 'St Eustatius') selected @endif >St Eustatius</option>
    <option value="St Helena" @if(old('country') == 'St Helena') selected @endif >St Helena</option>
    <option value="St Kitts-Nevis" @if(old('country') == 'St Kitts-Nevis') selected @endif >St Kitts-Nevis</option>
    <option value="St Lucia" @if(old('country') == 'St Lucia') selected @endif >St Lucia</option>
    <option value="St Maarten" @if(old('country') == 'St Maarten') selected @endif >St Maarten</option>
    <option value="St Pierre & Miquelon" @if(old('country') == 'St Pierre & Miquelon') selected @endif >St Pierre & Miquelon</option>
    <option value="St Vincent & Grenadines" @if(old('country') == 'St Vincent & Grenadines') selected @endif >St Vincent & Grenadines</option>
    <option value="Saipan" @if(old('country') == 'Saipan') selected @endif >Saipan</option>
    <option value="Samoa" @if(old('country') == 'Samoa') selected @endif >Samoa</option>
    <option value="Samoa American" @if(old('country') == 'Samoa American') selected @endif >Samoa American</option>
    <option value="San Marino" @if(old('country') == 'San Marino') selected @endif >San Marino</option>
    <option value="Sao Tome & Principe" @if(old('country') == 'Sao Tome & Principe') selected @endif >Sao Tome & Principe</option>
    <option value="Saudi Arabia" @if(old('country') == 'Saudi Arabia') selected @endif >Saudi Arabia</option>
    <option value="Senegal" @if(old('country') == 'Senegal') selected @endif >Senegal</option>
    <option value="Seychelles" @if(old('country') == 'Seychelles') selected @endif >Seychelles</option>
    <option value="Sierra Leone" @if(old('country') == 'Sierra Leone') selected @endif >Sierra Leone</option>
    <option value="Singapore" @if(old('country') == 'Singapore') selected @endif >Singapore</option>
    <option value="Slovakia" @if(old('country') == 'Slovakia') selected @endif >Slovakia</option>
    <option value="Slovenia" @if(old('country') == 'Slovenia') selected @endif >Slovenia</option>
    <option value="Solomon Islands" @if(old('country') == 'Solomon Islands') selected @endif >Solomon Islands</option>
    <option value="Somalia" @if(old('country') == 'Somalia') selected @endif >Somalia</option>
    <option value="South Africa" @if(old('country') == 'South Africa') selected @endif >South Africa</option>
    <option value="Spain" @if(old('country') == 'Spain') selected @endif >Spain</option>
    <option value="Sri Lanka" @if(old('country') == 'Sri Lanka') selected @endif >Sri Lanka</option>
    <option value="Sudan" @if(old('country') == 'Sudan') selected @endif >Sudan</option>
    <option value="Suriname" @if(old('country') == 'Suriname') selected @endif >Suriname</option>
    <option value="Swaziland" @if(old('country') == 'Swaziland') selected @endif >Swaziland</option>
    <option value="Sweden" @if(old('country') == 'Sweden') selected @endif >Sweden</option>
    <option value="Switzerland" @if(old('country') == 'Switzerland') selected @endif >Switzerland</option>
    <option value="Syria" @if(old('country') == 'Syria') selected @endif >Syria</option>
    <option value="Tahiti" @if(old('country') == 'Tahiti') selected @endif >Tahiti</option>
    <option value="Taiwan" @if(old('country') == 'Taiwan') selected @endif >Taiwan</option>
    <option value="Tajikistan" @if(old('country') == 'Tajikistan') selected @endif >Tajikistan</option>
    <option value="Tanzania" @if(old('country') == 'Tanzania') selected @endif >Tanzania</option>
    <option value="Thailand" @if(old('country') == 'Thailand') selected @endif >Thailand</option>
    <option value="Togo" @if(old('country') == 'Togo') selected @endif >Togo</option>
    <option value="Tokelau" @if(old('country') == 'Tokelau') selected @endif >Tokelau</option>
    <option value="Tonga" @if(old('country') == 'Tonga') selected @endif >Tonga</option>
    <option value="Trinidad & Tobago" @if(old('country') == 'Trinidad & Tobago') selected @endif >Trinidad & Tobago</option>
    <option value="Tunisia" @if(old('country') == 'Tunisia') selected @endif >Tunisia</option>
    <option value="Turkey" @if(old('country') == 'Turkey') selected @endif >Turkey</option>
    <option value="Turkmenistan" @if(old('country') == 'Turkmenistan') selected @endif >Turkmenistan</option>
    <option value="Turks & Caicos Is" @if(old('country') == 'Turks & Caicos Is') selected @endif >Turks & Caicos Is</option>
    <option value="Tuvalu" @if(old('country') == 'Tuvalu') selected @endif >Tuvalu</option>
    <option value="Uganda" @if(old('country') == 'Uganda') selected @endif >Uganda</option>
    <option value="United Kingdom" @if(old('country') == 'United Kingdom') selected @endif >United Kingdom</option>
    <option value="Ukraine" @if(old('country') == 'Ukraine') selected @endif >Ukraine</option>
    <option value="United Arab Erimates" @if(old('country') == 'United Arab Emirates') selected @endif >United Arab Emirates</option>
    <option value="United States of America" @if(old('country') == 'United States of America') selected @endif >United States of America</option>
    <option value="Uraguay" @if(old('country') == 'Uruguay') selected @endif >Uruguay</option>
    <option value="Uzbekistan" @if(old('country') == 'Uzbekistan') selected @endif >Uzbekistan</option>
    <option value="Vanuatu" @if(old('country') == 'Vanuatu') selected @endif >Vanuatu</option>
    <option value="Vatican City State" @if(old('country') == 'Vatican City State') selected @endif >Vatican City State</option>
    <option value="Venezuela" @if(old('country') == 'Venezuela') selected @endif >Venezuela</option>
    <option value="Vietnam" @if(old('country') == 'Vietnam') selected @endif >Vietnam</option>
    <option value="Virgin Islands (Brit)" @if(old('country') == 'Virgin Islands (Brit)') selected @endif >Virgin Islands (Brit)</option>
    <option value="Virgin Islands (USA)" @if(old('country') == 'Virgin Islands (USA)') selected @endif >Virgin Islands (USA)</option>
    <option value="Wake Island" @if(old('country') == 'Wake Island') selected @endif >Wake Island</option>
    <option value="Wallis & Futana Is" @if(old('country') == 'Wallis & Futana Is') selected @endif >Wallis & Futana Is</option>
    <option value="Yemen" @if(old('country') == 'Yemen') selected @endif >Yemen</option>
    <option value="Zaire" @if(old('country') == 'Zaire') selected @endif >Zaire</option>
    <option value="Zambia" @if(old('country') == 'Zambia') selected @endif >Zambia</option>
    <option value="Zimbabwe" @if(old('country') == 'Zimbabwe') selected @endif >Zimbabwe</option>
</select>
                                                @error('country')
                                                    <span class="force-color-red" >{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group" >
                                                <label class="force-color-black" >Create Password <span class="force-color-blue" >*</span></label>
                                                <input type="password" class="form-control input-outline" name="password" value="{{ old('password') }}" >
                                                @error('password')
                                                    <span class="force-color-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Confirm Password <span class="force-color-blue">*</span></label>
                                                <input type="password" class="form-control input-outline" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                                @error('password_confirmation')
                                                    <span class="force-color-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="cover">
                                                <button type="submit" class="btn btn-primary btn-lg text-center" name="submit_form_2_btn">Submit</button>
                                                <p>
                                                    <br>
                                                    <span class="force-color-pale-white">Have an account?</span>
                                                    <span><a href="{{ route('login') }}" class="force-color-blue">Login</a></span>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        
        @include('layouts.footer')

        <script>
            @if($errors->any())
                window.onload = (event) => {
                bs4pop.notice('Input Error', {position: 'topright', type: 'danger'})
                };
            @endif

            // @if($user->id && !$errors->any())
            //     window.onload = (event) => {
            //         bs4pop.notice('Account created', {position: 'topright', type: 'success'})
            //     };
            // @endif
        </script>
                
    </body>
</html>