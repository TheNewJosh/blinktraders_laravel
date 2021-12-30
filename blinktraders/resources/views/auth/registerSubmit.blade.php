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
                                            <span class="force-color-black"><span class="force-color-blue">*</span>Required fields</span><br>
                                            <div class="form-group">
                                                <label class="force-color-black">Referral ID<span class="force-color-blue">*</span></label>
                                                <input type="text" class="form-control input-outline" name="referral_id" value="{{ old('referral_id') }}" >
                                                @error('referral_id')
                                                    <span class="force-color-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Country <span class="force-color-blue">*</span></label>
                                                <input type="text" class="form-control input-outline" name="country" value="{{ old('country') }}">
                                                @error('country')
                                                    <span class="force-color-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Create Password <span class="force-color-blue">*</span></label>
                                                <input type="password" class="form-control input-outline" name="password" value="{{ old('password') }}">
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

            @if($user->id && !$errors->any())
                window.onload = (event) => {
                    bs4pop.notice('Account created', {position: 'topright', type: 'success'})
                };
            @endif
        </script>
                
    </body>
</html>