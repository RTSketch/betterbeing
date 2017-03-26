@extends('base')

        @section('browsertitle')
            Better Being: Register
        @stop
        
        @section('content')
        <section class ="sticky-prompt"></section>
        <section class ="section-form">
            <div class="row">
                <h2>Sign Up</h2>
                
            </div>
            <div class="row thin-row">
                @yield('errormessage')
                <form id="registerform" name="registerform" class="register-form"
                    action="/register" method="post">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="username">Username</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="username" id="username" placeholder="Choose a username" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="firstname">First Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="firstname" id="firstname" placeholder="Your first name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="surname">Surname</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="surname" id="surname" placeholder="Your surname" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email1">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email1" id="email1" placeholder="example@email.com" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email2">Verify Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email2" id="email2" placeholder="Repeat e-mail" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="password1">Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="password" name="password1" id="password1" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="password2">Verify Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="password" name="password2" id="password2" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="" disabled="disabled" selected="selected" required>Please select one</option>
                                <option value="friends" >Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                            </div>
                        </div>
                        <div class="col span-2-of-3">
                            <div class="form-group">
                                <input type="file" id="exampleInputFile">
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Sign Up">
                        </div>
                    </div>


                </form>

            </div>
        </section>
        @stop

        @section('bottomjs')

        <script>

            $(document).ready(function() {
                
               $("#registerform").validate({
                   rules: {
                       email2: {
                           required: true,
                           email: true,
                           equalTo: "#email1"
                       },
                       password2: {
                           required: true,
                           equalTo: "#password1"
                       }
                   }
               });

            }); 

        </script>
        @stop