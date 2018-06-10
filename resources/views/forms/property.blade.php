<!DOCTYPE html>
<html lang="en">
  <head>
    
    
    <link type="text/css" rel="stylesheet" href="{{asset('css/cognito.css')}}">
    <script type="text/javascript" crossorigin="anonymous" src="{{asset('js/cognito.js')}}"></script>

    <meta charset="utf-8">
    <title>Cognito Forms</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1,user-scalable=no">
   
<!--     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/> -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!--  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->


    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"> 
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

  </head>
  <body class="c-public-form cognito-background" >
    <div id="c-forms-container" class="cognito c-safari c-lrg">

      <form action="action.php" method="post">
        <div class="c-forms-form" tabindex="0">
          <div class="c-editor" style="display:none;">
            <input type="text" class="c-forms-form-style">
          </div>
          <div class="c-forms-form-body">
            <div class="c-forms-heading">
              <div class="c-forms-logo" style="display:none;">
              </div>
              <div class="c-forms-form-title">
                <h2>Web Form</h2>
                <div class="c-forms-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin, metus vitae venenatis viverra.</div>
              </div>
            </div>
            <div class="c-forms-form-main c-span-24 c-sml-span-12">
              <div class="c-progress-section">
                <div class="c-forms-progress c-progress-steps">
                  <ol class="">
                    <li class="c-page-selected" data-page="1"><span>Page 1</span></li>
                    <li class="" data-page="2"><span>Page 2</span></li>
                    <li class="" data-page="3"><span>Page 3</span></li>
                  </ol>
                </div>
              </div>
              <div class="c-forms-pages">
                <div class="c-page-page1" style="display: block;">
                  <div class="c-forms-template">
                    <div class="c-page toggle-off">
                      <div class="c-section c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                        <div class="c-title c-repeating-section-title">
                          <h3>Vendor Details</h3>
                          <div class="c-helptext">Enter the details for each Seller as required.</div>
                        </div>
                        <div class="c-repeating-section-group">
                          <div class="c-repeating-section-container">
                            <div class="c-repeating-section-item-title">
                              <div class="c-action-col">
                                <a class="c-remove-item" title="Remove Vendor">
                                <i class="icon-remove-sign"></i>
                                </a>
                              </div>
                              <h4>Vendor <span>1</span></h4>
                            </div>
                            <div class="c-repeating-section-item">
                              <div class="c-name c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                                <div class="c-label ">
                                  <label>Name</label>
                                </div>
                                <div>
                                  <div class="c-offscreen">
                                    <label for="c-0-254">First</label>
                                  </div>
                                  <div class="c-editor c-span-1" style="width: 28.5714%; float: left;">
                                    <input name="v_first[]" type="text" id="c-0-254" placeholder="First">
                                  </div>
                                  <div class="c-offscreen">
                                    <label for="c-1-254">Middle</label>
                                  </div>
                                  <div class="c-editor c-span-1" style="width: 28.5714%; float: left;">
                                    <input name="v_middle[]" type="text" id="c-1-254" placeholder="Middle">
                                  </div>
                                  <div class="c-offscreen"><label for="c-2-254">Last</label></div>
                                  <div class="c-editor c-span-1" style="width: 28.5714%; float: left;">
                                    <input name="v_last[]" type="text" id="c-2-254" placeholder="Last">
                                  </div>
                                  <div class="c-offscreen">
                                    <label for="c-3-254">Suffix</label>
                                  </div>
                                  <div class="c-editor c-span-1" style="width: 14.2857%; float: left;">
                                    <input name="v_suffix[]" type="text" id="c-3-254" placeholder="Suffix">
                                  </div>
                                </div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-number-integer c-field c-col-1 c-sml-col-1 c-span-8 c-sml-span-12">
                                <div class="c-label  ">
                                  <label for="c-5-253">TRN #</label>
                                </div>
                                <div class="c-editor">
                                  <input name="v_trn[]" type="text" id="c-5-253" placeholder="Tax Registration Number ">
                                </div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-date-date c-field c-col-9 c-sml-col-1 c-span-6 c-sml-span-12">
                                  <div class="c-label  "><label for="c-6-252">Date of Birth</label></div>
                                  <div class="c-editor">
                                    <div class="input-group date c-editor-date c-datepicker" >
                                      <input class="datepicker" name="v_dob[]" type="text" id="c-6-252"placeholder="" >
                                    </div>
                                    <div class="c-editor-date-icon input-group-addon"><i class="icon-calendar"></i></div>
                                  </div>

                                  <div class="c-validation"></div>
                              </div>
                              <div class="c-text-singleline c-field c-col-15 c-sml-col-1 c-span-10 c-sml-span-12">
                                <div class="c-label  ">
                                  <label for="c-7-251">Occupation</label>
                                </div>
                                <div class="c-editor">
                                  <input name="v_occupation[]" type="text" id="c-7-251" placeholder="">
                                </div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-phone c-phone-international c-field c-col-1 c-sml-col-1 c-span-10 c-sml-span-12">
                                <div class="c-label  "><label for="c-8-250">Phone</label></div>
                                <div class="c-editor"><input name="v_phone[]" type="text" id="c-8-250" placeholder=""></div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-email c-field c-col-11 c-sml-col-1 c-span-14 c-sml-span-12">
                                <div class="c-label  "><label for="c-9-249">Email</label></div>
                                <div class="c-editor"><input name="v_email[]" type="text" id="c-9-249" placeholder=""></div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-address c-address-international c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                                <div class="c-label "><label>Address</label></div>
                                <div>
                                  <div class="c-offscreen"><label for="c-10-10">Address Line 1</label></div>
                                  <div class="c-editor" style="float: left;"><input name="v_address1[]" type="text" id="c-10-10" placeholder="Address Line 1"></div>
                                  <div class="c-offscreen"><label for="c-11-10">Address Line 2</label></div>
                                  <div class="c-editor" style="float: left;"><input name="v_address2[]" type="text" id="c-11-10" placeholder="Address Line 2"></div>
                                  <div class="c-offscreen"><label for="c-12-10">City</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;"><input name="v_city[]" type="text" id="c-12-10" placeholder="City"></div>
                                  <div class="c-offscreen"><label for="c-13-10">State / Province / Region</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;"><input name="v_state[]" type="text" id="c-13-10" placeholder="State / Province / Region"></div>
                                  <div class="c-offscreen"><label for="c-14-10">Postal / Zip Code</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;"><input name="v_postal[]" type="text" id="c-14-10" placeholder="Postal / Zip Code"></div>
                                  <div class="c-offscreen"><label for="c-15-10">Country</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;">
                                    <div class="c-dropdown">
                                      <select name="v_country[]" id="c-15-10" class="c-placeholder-text-styled">
                                        <option value="">Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo, Republic of(Brazzaville)">Congo, Republic of(Brazzaville)</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Democratic Republic of the Congo (Kinshasa)">Democratic Republic of the Congo (Kinshasa)</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Holy See">Holy See</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Rep. (North Korea)">Korea, Democratic People's Rep. (North Korea)</option>
                                        <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia, Rep. of">Macedonia, Rep. of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federal States of">Micronesia, Federal States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar, Burma">Myanmar, Burma</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian territories">Palestinian territories</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion Island">Reunion Island</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria, Syrian Arab Republic">Syria, Syrian Arab Republic</option>
                                        <option value="Taiwan (Republic of China)">Taiwan (Republic of China)</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania; officially the United Republic of Tanzania">Tanzania; officially the United Republic of Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Tibet">Tibet</option>
                                        <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="c-validation"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-validation" style="display: block;"></div>
                        <div class="c-repeating-section-add"><a class="c-add-item" title="Add" tabindex="0">Add Vendor</a></div>
                      </div>
                      <div class="c-button-section">
                        <div class="c-action"><button type="button" class="c-page-nav c-page-next-page c-button">Next</button>
                        </div>
                      </div>
                      <div class="c-page-numbering">1 / 3</div>
                    </div>
                  </div>
                </div>
                <div class="c-page-page2" style="display: none;">
                  <div class="c-forms-template">
                    <div class="c-page toggle-off" >
                      <div class="c-section c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                        <div class="c-title c-repeating-section-title">
                          <h3>Buyer Detail</h3>
                          <div class="c-helptext">Enter the details for each Buyer as required.</div>
                        </div>
                        <div class="c-repeating-section-group">
                          <div class="c-repeating-section-container">
                            <div class="c-repeating-section-item-title">
                              <div class="c-action-col"><a class="c-remove-item" title="Remove Buyer "><i class="icon-remove-sign"></i></a></div>
                              <h4>Buyer  <span>1</span></h4>
                            </div>
                            <div class="c-repeating-section-item">
                              <div class="c-name c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                                <div class="c-label "><label>Name</label></div>
                                <div>
                                  <div class="c-offscreen"><label for="c-17-511">First</label></div>
                                  <div class="c-editor c-span-1" style="width: 28.5714%; float: left;"><input  name="b_first[]" type="text" id="c-17-511" placeholder="First"></div>
                                  <div class="c-offscreen"><label for="c-18-511">Middle</label></div>
                                  <div class="c-editor c-span-1" style="width: 28.5714%; float: left;"><input name="b_middle[]" type="text" id="c-18-511" placeholder="Middle"></div>
                                  <div class="c-offscreen"><label for="c-19-511">Last</label></div>
                                  <div class="c-editor c-span-1" style="width: 28.5714%; float: left;"><input name="b_last[]" type="text" id="c-19-511" placeholder="Last"></div>
                                  <div class="c-offscreen"><label for="c-20-511">Suffix</label></div>
                                  <div class="c-editor c-span-1" style="width: 14.2857%; float: left;"><input name="b_suffix[]" type="text" id="c-20-511" placeholder="Suffix"></div>
                                </div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-text-singleline c-field c-col-1 c-sml-col-1 c-span-8 c-sml-span-12">
                                <div class="c-label  "><label for="c-22-510">TRN #</label></div>
                                <div class="c-editor"><input name="b_trn[]" type="text" id="c-22-510" placeholder="Tax Registration Number"></div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-date-date c-field c-col-9 c-sml-col-1 c-span-6 c-sml-span-12">
                                <div class="c-label  "><label for="c-23-509">Date of Birth</label></div>
                                <div class="c-editor">
                                    <div class="input-group date c-editor-date c-datepicker" >
                                      <input class="datepicker" name="b_dob[]" type="text" id="c-23-509"placeholder="" >
                                    </div>
                                    <div class="c-editor-date-icon input-group-addon"><i class="icon-calendar"></i></div>
                                </div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-text-singleline c-field c-col-15 c-sml-col-1 c-span-10 c-sml-span-12">
                                <div class="c-label  "><label for="c-24-508">Occupation</label></div>
                                <div class="c-editor"><input name="b_occupation[]" type="text" id="c-24-508" placeholder=""></div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-phone c-phone-international c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12">
                                <div class="c-label  "><label for="c-25-507">Phone</label></div>
                                <div class="c-editor"><input name="b_phone[]" type="text" id="c-25-507" placeholder=""></div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-email c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12">
                                <div class="c-label  "><label for="c-26-506">Email</label></div>
                                <div class="c-editor"><input name="b_email[]" type="text" id="c-26-506" placeholder=""></div>
                                <div class="c-validation"></div>
                              </div>
                              <div class="c-address c-address-international c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                                <div class="c-label "><label>Address</label></div>
                                <div>
                                  <div class="c-offscreen"><label for="c-27-267">Address Line 1</label></div>
                                  <div class="c-editor" style="float: left;"><input name="b_address1[]" type="text" id="c-27-267" placeholder="Address Line 1"></div>
                                  <div class="c-offscreen"><label for="c-28-267">Address Line 2</label></div>
                                  <div class="c-editor" style="float: left;"><input name="b_address2[]" type="text" id="c-28-267" placeholder="Address Line 2"></div>
                                  <div class="c-offscreen"><label for="c-29-267">City</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;"><input name="b_city[]" type="text" id="c-29-267" placeholder="City"></div>
                                  <div class="c-offscreen"><label for="c-30-267">State / Province / Region</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;"><input name="b_state[]" type="text" id="c-30-267" placeholder="State / Province / Region"></div>
                                  <div class="c-offscreen"><label for="c-31-267">Postal / Zip Code</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;"><input name="b_postal[]" type="text" id="c-31-267" placeholder="Postal / Zip Code"></div>
                                  <div class="c-offscreen"><label for="c-32-267">Country</label></div>
                                  <div class="c-editor c-partial-line" style="float: left;">
                                    <div class="c-dropdown">
                                      <select name="b_country[]" id="c-32-267" class="c-placeholder-text-styled">
                                        <option value="">Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo, Republic of(Brazzaville)">Congo, Republic of(Brazzaville)</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Democratic Republic of the Congo (Kinshasa)">Democratic Republic of the Congo (Kinshasa)</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Holy See">Holy See</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Rep. (North Korea)">Korea, Democratic People's Rep. (North Korea)</option>
                                        <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia, Rep. of">Macedonia, Rep. of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federal States of">Micronesia, Federal States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar, Burma">Myanmar, Burma</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian territories">Palestinian territories</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion Island">Reunion Island</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria, Syrian Arab Republic">Syria, Syrian Arab Republic</option>
                                        <option value="Taiwan (Republic of China)">Taiwan (Republic of China)</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania; officially the United Republic of Tanzania">Tanzania; officially the United Republic of Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Tibet">Tibet</option>
                                        <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="c-validation"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="c-validation" style="display: block;"></div>
                        <div class="c-repeating-section-add"><a class="c-add-item" title="Add" tabindex="0">Add Buyer </a></div>
                      </div>
                      <div class="c-button-section">
                        <div class="c-action"><button type="button" class="c-page-nav c-page-previous-page c-button">Back</button><button type="button" class="c-page-nav c-page-next-page c-button">Next</button></div>
                      </div>
                      <div class="c-page-numbering">2 / 3</div>
                    </div>
                  </div>
                </div>
                <div class="c-page-page3" style="display: none;">
                  <div class="c-forms-template">
                    <div class="c-page toggle-off">
                      <div class="c-section c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                        <div class="c-title">
                          <h3>Property Details</h3>
                        </div>
                        <div class="c-helptext">Enter the details of the Property being Sold</div>
                        <div class="">
                          <div class="c-address c-address-international c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12">
                            <div class="c-label "><label>Address</label></div>
                            <div>
                              <div class="c-offscreen"><label for="c-34-526">Address Line 1</label></div>
                              <div class="c-editor" style="float: left;"><input name="p[address1]" type="text" id="c-34-526" placeholder="Address Line 1"></div>
                              <div class="c-offscreen"><label for="c-35-526">Address Line 2</label></div>
                              <div class="c-editor" style="float: left;"><input name="p[address2]" type="text" id="c-35-526" placeholder="Address Line 2"></div>
                              <div class="c-offscreen"><label for="c-36-526">City</label></div>
                              <div class="c-editor c-partial-line" style="float: left;"><input name="p[city]" type="text" id="c-36-526" placeholder="City"></div>
                              <div class="c-offscreen"><label for="c-37-526">State / Province / Region</label></div>
                              <div class="c-editor c-partial-line" style="float: left;"><input name="p[state]" type="text" id="c-37-526" placeholder="State / Province / Region"></div>
                              <div class="c-offscreen"><label for="c-38-526">Postal / Zip Code</label></div>
                              <div class="c-editor c-partial-line" style="float: left;"><input name="p[postal]" type="text" id="c-38-526" placeholder="Postal / Zip Code"></div>
                              <div class="c-offscreen"><label for="c-39-526">Country</label></div>
                              <div class="c-editor c-partial-line" style="float: left;">
                                <div class="c-dropdown">
                                  <select name="p[country]" id="c-39-526" class="">
                                    <option value="">Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo, Republic of(Brazzaville)">Congo, Republic of(Brazzaville)</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Democratic Republic of the Congo (Kinshasa)">Democratic Republic of the Congo (Kinshasa)</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Holy See">Holy See</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Ivory Coast">Ivory Coast</option>
                                    <option selected="selected" value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Rep. (North Korea)">Korea, Democratic People's Rep. (North Korea)</option>
                                    <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia, Rep. of">Macedonia, Rep. of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federal States of">Micronesia, Federal States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar, Burma">Myanmar, Burma</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian territories">Palestinian territories</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion Island">Reunion Island</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria, Syrian Arab Republic">Syria, Syrian Arab Republic</option>
                                    <option value="Taiwan (Republic of China)">Taiwan (Republic of China)</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania; officially the United Republic of Tanzania">Tanzania; officially the United Republic of Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Tibet">Tibet</option>
                                    <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="c-validation"></div>
                          </div>
                          <div class="c-currency c-field c-col-1 c-sml-col-1 c-span-7 c-sml-span-7">
                            <div class="c-label  "><label for="c-41-525">Sale Price</label></div>
                            <div class="c-editor"><input name="p[sale_price]" type="text" id="c-41-525" placeholder=""></div>
                            <div class="c-validation"></div>
                          </div>
                          <div class="c-date-date c-field c-col-8 c-sml-col-8 c-span-5 c-sml-span-5">
                            <div class="c-label  "><label for="c-42-524">Contract Date</label></div>
                            <!-- <div class="c-editor">
                              <div class="c-editor-date"><input name="p[c_date]" type="text" id="c-42-524" placeholder="" class="c-datepicker"></div>
                              <div class="c-editor-date-icon"><i class="icon-calendar"></i></div>
                            </div> -->
                            <div class="c-editor">
                                <div class="input-group date c-editor-date c-datepicker" >
                                  <input class="datepicker" name="p[c_date]" type="text" id="c-42-524" placeholder="" >
                                </div>
                                <div class="c-editor-date-icon input-group-addon"><i class="icon-calendar"></i></div>
                            </div>
                            <div class="c-validation"></div>
                            <div class="c-helptext">Date of Sales Agreement</div>
                          </div>
                          <div class="c-choice-radiobuttons c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12">
                            <legend class="c-label  ">Property Type</legend>
                            <div class="c-editor c-columns-0">
                              <div class="c-choice-option"><label for="c-43-520"><input name="p[type][house]" type="radio" id="c-43-520"><span>House</span></label></div>
                              <div class="c-choice-option"><label for="c-43-521"><input name="p[type][land]" type="radio" id="c-43-521"><span>Land only</span></label></div>
                              <div class="c-choice-option"><label for="c-43-522"><input name="p[type][apartment]" type="radio" id="c-43-522"><span>Apartment </span></label></div>
                              <div class="c-choice-option"><label for="c-43-523"><input name="p[type][commercial]" type="radio" id="c-43-523"><span>Commercial</span></label></div>
                            </div>
                            <div class="c-validation"></div>
                            <div class="c-helptext">Choose type of property</div>
                          </div>
                          <div class="c-currency c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12">
                            <div class="c-label  "><label for="c-44-518">Deposit</label></div>
                            <div class="c-editor"><input name="p[deposit]" type="text" id="c-44-518" placeholder=""></div>
                            <div class="c-validation"></div>
                          </div>
                        </div>
                        <div class="c-validation"></div>
                      </div>
                    </div>
                  </div>
                  <div id="c-recaptcha-div"></div>
                  <div class="c-forms-error">
                    <div class="c-validation"></div>
                  </div>
                  <div class="c-button-section">
                    <div class="c-action"><button type="button" class="c-page-nav c-page-previous-page c-button">Back</button><button class="c-button" id="c-submit-button">Submit</button></div>
                  </div>
                  <div class="c-page-numbering">3 / 3</div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-forms-confirmation">
            <div class="c-forms-heading">
              <div class="c-forms-logo" style="display:none;"></div>
              <div class="c-forms-form-title">
                <h2>HMF Property Sales Data Form</h2>
              </div>
            </div>
            <div class="c-forms-confirmation-message c-html"><span>Thank you for filling out the form. Your response has been recorded.</span></div>
            <div class="c-forms-confirmation-message">
              <div class="c-forms-document-links"></div>
            </div>
          </div>
          <div class="c-footer-terms" sys:attach="dataview" dataview:data="">
            <ul class="terms">
              <!-- <li><a href="https://www.cognitoforms.com/reportabuse?form=https%3A%2F%2Fwww.cognitoforms.com%2FMarcusWilliams1%2FHMFPropertySalesDataForm" target="_blank">Report Abuse</a></li>
              <li><a href="https://www.cognitoforms.com/terms" target="_blank">Terms of Service</a></li> -->
            </ul>
          </div>
        </div>
        <input type="hidden" name="NoBots" id="c-nobots" value="Cpy9xdA3AeD6VuOZlzI7hF0cp+PxKQSFxbZWuPsDiNw=|8d3d2b1992a1961cb6d21eeaaf4a761b">
      </form>

    </div>
  </body>
</html>