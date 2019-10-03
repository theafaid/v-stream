@extends('layouts.app')

@section('title')
    Create a Channel
@endsection

@section('content')
    <main id="col-main">

        <div class="dashboard-container">

            <ul class="dashboard-sub-menu">
                <li class="current"><a href="dashboard-account.html">Account Settings</a></li>
                <li><a href="dashboard-account-payment.html">Payment Info</a></li>
            </ul><!-- close .dashboard-sub-menu -->

            <div class="container-fluid">
                <div class="row">
                        <form class="account-settings-form">
                            <h5>General Information</h5>
                            <p class="small-paragraph-spacing">By letting us know your name, we can make our support experience much more personal.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="first-name" class="col-form-label">First Name:</label>
                                        <input type="text" class="form-control" id="first-name" value="Suzie">
                                    </div>
                                </div><!-- close .col -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="last-name" class="col-form-label">Last Name:</label>
                                        <input type="text" class="form-control" id="last-name" value="Smith">
                                    </div>
                                </div><!-- close .col -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="last-name" class="col-form-label">Country:</label>
                                        <select class="custom-select">
                                            <option value="0">All Countries</option>
                                            <option value="1">Argentina</option>
                                            <option value="2">Australia</option>
                                            <option value="3">Bahamas</option>
                                            <option value="4">Belgium</option>
                                            <option value="5">Brazil</option>
                                            <option value="6">Canada</option>
                                            <option value="7">Chile</option>
                                            <option value="8">China</option>
                                            <option value="9">Denmark</option>
                                            <option value="10">Ecuador</option>
                                            <option value="11">France</option>
                                            <option value="12">Germany</option>
                                            <option value="13">Greece</option>
                                            <option value="14">Guatemala</option>
                                            <option value="15">Italy</option>
                                            <option value="16">Japan</option>
                                            <option value="17">asdfasdf</option>
                                            <option value="18">Korea</option>
                                            <option value="19">Malaysia</option>
                                            <option value="20">Monaco</option>
                                            <option value="21">Morocco</option>
                                            <option value="22">New Zealand</option>
                                            <option value="23">Panama</option>
                                            <option value="24">Portugal</option>
                                            <option value="25">Russia</option>
                                            <option value="26">United Kingdom</option>
                                            <option selected>United States</option>
                                        </select>
                                    </div>
                                </div><!-- close .col -->
                            </div><!-- close .row -->
                            <hr>

                            <h5>Account Information</h5>
                            <p class="small-paragraph-spacing">You can change the email address you use here.</p>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="e-mail" class="col-form-label">E-mail</label>
                                        <input type="text" class="form-control" id="e-mail" value="suzie@outlook.com">
                                    </div>
                                </div><!-- close .col -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div><label for="button-change" class="col-form-label">&nbsp; &nbsp;</label></div>
                                        <a href="#!" class="btn btn-form">Change E-mail</a>
                                    </div>
                                </div><!-- close .col -->

                            </div><!-- close .row -->

                            <hr>
                            <h5>Change Password</h5>
                            <p class="small-paragraph-spacing">You can change the password you use for your account here.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Current Password:</label>
                                        <input type="text" class="form-control" id="password" value="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;">
                                    </div>
                                </div><!-- close .col -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="new-password" class="col-form-label">New Password:</label>
                                        <input type="text" class="form-control" id="new-password" placeholder="Minimum of 6 characters">
                                    </div>
                                </div><!-- close .col -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div><label for="confirm-password" class="col-form-label">&nbsp; &nbsp;</label></div>
                                        <input type="text" class="form-control" id="confirm-password" placeholder="Confirm New Password">
                                    </div>
                                </div><!-- close .col -->
                            </div><!-- close .row -->

                            <hr>
                            <h5>Preferred Genres</h5>
                            <p class="small-paragraph-spacing">Pick your favorite genres for content.</p>

                            <div class="registration-genres-step">
                                <ul class="registration-genres-choice">
                                    <li class="active">
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/drama.png" alt="Drama">
                                        <h6>Drama</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/comedy.png" alt="Comedy">
                                        <h6>Comedy</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/action.png" alt="Action">
                                        <h6>Action</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/romance.png" alt="Romance">
                                        <h6>Romance</h6>
                                    </li>
                                    <li class="active">
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/horror.png" alt="Horror">
                                        <h6>Horror</h6>
                                    </li>
                                    <li class="active">
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/fantasy.png" alt="Fantasy">
                                        <h6>Fantasy</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/sci-fi.png" alt="Sci-Fi">
                                        <h6>Sci-Fi</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/thriller.png" alt="Thriller">
                                        <h6>Thriller</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/western.png" alt="Western">
                                        <h6>Western</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/adventure.png" alt="Adventure">
                                        <h6>Adventure</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/animation.png" alt="Animation">
                                        <h6>Animation</h6>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <img src="images/genres/documentary.png" alt="Documentary">
                                        <h6>Documentary</h6>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div><!-- close .registration-genres-step -->
                            <div class="clearfix"></div>
                            <hr>
                            <p><a href="dashboard-account.html" class="btn btn-green-pro">Save Changes</a></p>
                            <br>
                        </form>
                    </div><!-- close .col -->

                </div><!-- close .row -->
            </div><!-- close .container-fluid -->

        </div><!-- close .dashboard-container -->
    </main>
@endsection
