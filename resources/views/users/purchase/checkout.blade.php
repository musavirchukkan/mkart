@extends('users.layout.master')
@section('title', 'Checkout')
@section('content')



    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Billing Details
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="John">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" placeholder="Doe">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="example@email.com">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="+123 456 789">
                                    </div>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Shiping Address
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">

                                    @foreach ($user->addresses as $address)
                                        <div class="col-sm-6 mb-2">
                                            <div class="card card-bordered shadow-none">
                                                <!-- card body -->
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <!-- checkbox -->
                                                            <input class="form-check-input" type="radio" name="Adress"
                                                                value="{{ $address->id }}" id="paypal"
                                                                data-gtm-form-interact-field-id="0">
                                                            <label class="form-check-label ms-2" for="paypal">

                                                            </label>
                                                        </div>
                                                        <div>
                                                            <h5 class="card-title">{{ $address->fname }}
                                                                {{ $address->lname }}</h5>
                                                            <h6 class='card-text'>{{ $address->email }}</h6>
                                                            <h6 class='card-text'>{{ $address->phone }}</h6>
                                                            <p class="card-text">{{ $address->house_name }},
                                                                {{ $address->street }},
                                                                {{ $address->city }}, {{ $address->state }},
                                                                {{ $address->country }}, {{ $address->pincode }} </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm-6 mb-2">
                                            <div class="card border-dark">
                                                <div class="card-body">

                                                    <h5 class="card-title">{{ $address->fname }} {{ $address->lname }}</h5>
                                                    <h6 class='card-text'>{{ $address->email }}</h6>
                                                    <h6 class='card-text'>{{ $address->phone }}</h6>
                                                    <p class="card-text">{{ $address->house_name }}, {{ $address->street }},
                                                        {{ $address->city }}, {{ $address->state }},
                                                        {{ $address->country }}, {{ $address->pincode }} </p>
                                                    <a href="#" class="btn btn-primary">Deliver Here</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    @endforeach

                                    {{-- <div class="col-sm-6 mb-2">
                                        <div class="card border-dark">
                                            <div class="card-body">

                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-2">
                                        <div class="card border-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <a href="{{route('user.address.add')}}">Add New Address</a> --}}
                                    <a data-bs-toggle="collapse" href="#collapseExample" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        Add New Address
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <div class="bg-light p-10 mb-5">
                                                <form action="{{ route('user.address.doAdd') }}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <label>First Name</label>
                                                            <input class="form-control" name="fname" type="text"
                                                                placeholder="John" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>Last Name</label>
                                                            <input class="form-control" name="lname" type="text"
                                                                placeholder="Doe">
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>E-mail</label>
                                                            <input class="form-control" name="email" type="email"
                                                                placeholder="example@email.com" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>Mobile No</label>
                                                            <input class="form-control" name="phone" type="number"
                                                                placeholder="919876543210" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>House Name</label>
                                                            <input class="form-control" name="house_name" type="text"
                                                                placeholder="House Name" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>Street</label>
                                                            <input class="form-control" name="street" type="text"
                                                                placeholder="Street" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>Country</label>
                                                            <select class="custom-select" name="country">
                                                                <option value="United States">United States</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Åland Islands">Åland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda
                                                                </option>
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
                                                                <option value="Bosnia and Herzegovina">Bosnia and
                                                                    Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British
                                                                    Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam
                                                                </option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                    Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Democratic Republic of The">
                                                                    Congo, The Democratic Republic of The
                                                                </option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic
                                                                </option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea
                                                                </option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland
                                                                    Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern
                                                                    Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard
                                                                    Island and Mcdonald Islands
                                                                </option>
                                                                <option value="Holy See (Vatican City State)">Holy See
                                                                    (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India" selected>India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic
                                                                    Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">
                                                                    Korea, Democratic People's Republic
                                                                    of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of
                                                                </option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao
                                                                    People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                                    Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, The Former Yugoslav Republic of">
                                                                    Macedonia, The Former Yugoslav
                                                                    Republic of</option>
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
                                                                <option value="Micronesia, Federated States of">Micronesia,
                                                                    Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of
                                                                </option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles
                                                                </option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana
                                                                    Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian
                                                                    Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation
                                                                </option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                                </option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                                    Miquelon</option>
                                                                <option value="Saint Vincent and The Grenadines">Saint
                                                                    Vincent and The Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe
                                                                </option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option
                                                                    value="South Georgia and The South Sandwich Islands">
                                                                    South Georgia and The South
                                                                    Sandwich Islands</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan
                                                                    Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic
                                                                </option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania,
                                                                    United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-leste">Timor-leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago
                                                                </option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos
                                                                    Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates
                                                                </option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United
                                                                    States Minor Outlying Islands
                                                                </option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands,
                                                                    British</option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                                </option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna
                                                                </option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>City</label>
                                                            <input class="form-control" name="city" type="text"
                                                                placeholder="Kozhikode" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>State</label>
                                                            <input class="form-control" name="state" type="text"
                                                                placeholder="Kerala" required>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label>ZIP Code</label>
                                                            <input class="form-control" name="pincode" type="number"
                                                                placeholder="123-456" required>
                                                        </div>
                                                        <div >
                                                            <div class="row justify-content-between">
                                                                <div class="col-4">
                                                                    <input type="checkbox" id="saveAddress"
                                                                        name="vehicle1" value=1>
                                                                    <label for="saveAddress"> Save Address for
                                                                        Later</label>
                                                                </div>
                                                                <div class="col-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Add Address
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Payment Method
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="card card-bordered shadow-none mb-2 col-6">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="form-check">
                                                <!-- checkbox -->
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="paypal" data-gtm-form-interact-field-id="0">
                                                <label class="form-check-label ms-2" for="paypal">

                                                </label>
                                            </div>
                                            <div>
                                                <h5 class="mb-1"> Payment with Paypal</h5>
                                                <p class="mb-0 fs-6">You will be redirected to PayPal website to complete
                                                    your
                                                    purchase
                                                    securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                        Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        @php
                            $total = 0;
                            $price = 0;
                        @endphp
                        @foreach ($carts as $cart)
                        <div class="d-flex justify-content-between">
                            <p>{{$cart->product->product_name}}</p>
                            <p>&#8377;{{$cart->product->price}}</p>
                            @php
                                $total += $cart->price;
                                $price += $cart->product->price;
                            @endphp
                        </div>
                        @endforeach

                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>&#8377;{{$price}}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Discount</h6>
                            <h6 class="font-weight-medium">&#8377; @php
                                echo $price-$total;
                            @endphp</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium .text-success">Free</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>&#8377;{{$total}}</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Checkout End -->
@endsection
