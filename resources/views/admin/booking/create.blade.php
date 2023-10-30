@extends('admin/master')

@section('title', '| Booking - Create')

{{-- multi step form --}}
<link rel="stylesheet" href="{{ asset('style.css') }}" />
<link rel="stylesheet" href="{{ asset('style-timings.css') }}" />
<script src="{{ asset('app.js') }}" defer></script>

@section('content-main')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="form">
                <div class="form-container">
                    <!-- Sidebar start -->
                    <div class="form-sidebar">
                        <div class="step active">
                            <div class="circle">1</div>
                            <div class="step-content">
                                <span>Step 1</span>
                                <b>Your info</b>
                            </div>
                        </div>
                        <div class="step">
                            <div class="circle">2</div>
                            <div class="step-content">
                                <span>Step 2</span>
                                <b>Select Service</b>
                            </div>
                        </div>
                        <div class="step">
                            <div class="circle">3</div>
                            <div class="step-content">
                                <span>Step 3</span>
                                <b>Select Staff</b>
                            </div>
                        </div>
                        <div class="step">
                            <div class="circle">4</div>
                            <div class="step-content">
                                <span>Step 4</span>
                                <b>Select Timing</b>
                            </div>
                        </div>
                        {{-- <div class="step">
                            <div class="circle">5</div>
                            <div class="step-content">
                                <span>Step 5</span>
                                <b>Finish</b>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Sidebar end -->
                    <!-- * Step 1 start -->
                    <form action="{{ route('admin.booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="stp step-1">
                        <div class="header">
                            <h1 class="title">Personal info</h1>
                            <p class="exp">
                                Please provide your name, email address, and phone number.
                            </p>
                        </div>
                        
                            <select name="client_id" id="">
                                <option class="box label" value="">Please choose client</option>
                                
                                @foreach ($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->firstname }} {{ $client->lastname}}
                                </option>
                                
                                @endforeach
                            </select>
                            @if ($client->id )
                                <div class="label">
                                    <label for="name">Fullname</label>
                                    <p class="error">This Field Is Required</p>
                                </div>
                                <input required type="text" id="name" name="" placeholder="Stephen King" value=" {{ $client->firstname }}"/>
                                <div class="label">
                                    <label for="name">Fullname</label>
                                    <p class="error">This Field Is Required</p>
                                </div>
                                <input required type="text" id="name" name="" placeholder="Stephen King" value=" {{ $client->lastname }}"/>
                                <div class="label">
                                    <label for="email">Email Address</label>
                                    <p class="error">This Field Is Required</p>
                                </div>
                                <input required type="text" id="email" placeholder="stephenking@lorem.com" name="" value="{{ $client->email }}"/>
                                <div class="label">
                                    <label for="phone">Phone Number</label>
                                    <p class="error">This Field Is Required</p>
                                </div>
                                <input required type="tel" id="phone" placeholder="+84 234 567 890" name="" value="{{ $client->phone }}"/>
                            @endif
                        
                        <div class="btns">
                            <button class="next-stp" type="button">Next Step</button>
                        </div>
                    </div>
                    <!-- Step 1 end -->
                    <!-- * Step 2 start -->
                    <div class="stp step-2">
                        <div class="header">
                            <h1 class="title">Select your service</h1>
                            <p class="exp">You have the option.</p>
                        </div>
                        
                            <div id="" class="container">
                                <div class="row" >
                                    @foreach ($services as $service)
                                    <div class="col col-lg-4">
                                        <div>
                                            <input type="radio" name="service_id" value="{{ $service->id }}" {{ old('status', $service->id) == $service->id ? 'checked' : '' }}>
                                            <label for="service_id">
                                                <span class="service-item" value="{{ $service->id }}">
                                                    <div class="plan-card">
                                                        <img src="{{ asset('image/service') }}/{{$service->image}}" alt="arcade" />
                                                        <div class="plan-info chosen">
                                                            <h3>{{$service->name}}</h3>
                                                            <b>{{$service->intro}}</b>
                                                            <span class="plan-priced">{{number_format($service->price,0, "", ".")}} VND</span>
                                                        </div>
                                                    </div>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        
                        <div class="switcher d-none">
                            <p class="monthly sw-active">Monthly</p>
                            <label class="switch">
                                <input type="checkbox" />
                                <span class="slider round"></span>
                            </label>
                            <p class="yearly">Yearly</p>
                        </div>
                        <div class="btns">
                            <button class="prev-stp" type="button">Go Back</button>
                            <button class="next-stp" type="button">Next Step</button>
                        </div>
                    </div>
                    <!-- Step 2 end -->

                    <!-- * Step 3 start -->
                    <div class="stp step-3">
                        <div class="header">
                            <h1 class="title">Pick add-ons</h1>
                            <p class="exp">Add-ons help enhance your gaming experience.</p>
                        </div>
                            <div>
                                <span>Day Booking</span>
                                <input class="box day-booking" type="date" name="date" value="{{ old('date') }}"/>
                            </div>
                            <div id="" class="container">
                                <div class="row" >
                                    @foreach ($staffs as $staff)
                                    <div class="col col-lg-4">
                                        <div>
                                            <input type="radio" name="staff_id" value="{{ $staff->id }}" {{ old('status', $staff->id ) == $staff->id ? 'checked' : '' }}>
                                            <label for="staff_id">
                                                <span class="service-item " value="{{ $staff->id }}">
                                                    <div class="plan-card">
                                                        <img src="{{ asset('image/staff') }}/{{$staff->image}}" alt="arcade" />
                                                        <div class="staff-info chosen">
                                                            <b>{{$staff->firstname}} {{$staff->lastname}}</b>
                                                        </div>
                                                    </div>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            

                            <!-- partial:index.partial.html -->
                            <div class="app-time">
                                <div>
                                    <h1>Timings</h1>
                                    <p>9:00AM to 11:30PM & 13:00PM to 18:00PM</p>
                                    <div class="app-check">
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="1" {{ old('timings', 1) == 1 ? 'checked' : '' }}  />
                                            <div class="app-border">

                                                <label class="app-label">08:00 AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="2" {{ old('timings', 2) == 2 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">08:30 AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="3" {{ old('timings', 3) == 3 ? 'checked' : '' }}  />
                                            {{-- disabled --}}
                                            <div class="app-border">

                                                <label class="app-label">9:00 AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="4" {{ old('timings', 4) == 4 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">9:30 AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="5" {{ old('timings', 5) == 5 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">10:00AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="6" {{ old('timings', 6) == 6 ? 'checked' : '' }}  />
                                            <div class="app-border">

                                                <label class="app-label">10:30AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="7" {{ old('timings', 7) == 7 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">11:00AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="8" {{ old('timings', 8) == 8 ? 'checked' : '' }}  />
                                            <div class="app-border">

                                                <label class="app-label">11:30AM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="9" {{ old('timings', 9) == 9 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">13:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="10" {{ old('timings', 10) == 10 ? 'checked' : '' }}  />
                                            <div class="app-border">

                                                <label class="app-label">13:30 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="11" {{ old('timings', 11) == 11 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">14:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="12" {{ old('timings', 12) == 12 ? 'checked' : '' }}  />
                                            <div class="app-border">

                                                <label class="app-label">14:30 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="13" {{ old('timings', 13) == 13 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">15:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="14" {{ old('timings', 14) == 14 ? 'checked' : '' }}  />
                                            <div class="app-border">

                                                <label class="app-label">15:30 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="15" {{ old('timings', 15) == 15 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">16:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="16" {{ old('timings', 16) == 16 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">16:30 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="17" {{ old('timings', 17) == 17 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">17:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        <div class="diplayy">
                                            <input type="radio" class="option-input radio" name="timings" value="18" {{ old('timings', 18) == 18 ? 'checked' : '' }} />
                                            <div class="app-border">

                                                <label class="app-label">17:30 PM
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- partial -->


                        <div class="btns">
                            <button class="prev-stp" type="button">Go Back</button>
                            <button class="next-stp" type="button">Next Step</button>
                        </div>
                    </div>
                    <!-- Step 3 end -->
                    <!-- * Step 4 start -->
                    <div class="stp step-4">
                        <div class="header">
                            <h1 class="title">Finishing up</h1>
                            <p class="exp">
                                Double-check everything looks OK before confirming.
                            </p>
                        </div>
                            <div>
                                <span>Note</span>
                                <textarea class="box col-lg-12" name="note" id="">{{ old('note') }}</textarea>
                            </div>
                        
                            <div class="selection-box">
                                <div class="selection-container">
                                    <div class="selected-plan">
                                        <p class="plan-name">Arcade(Monthly)</p>
                                        <p class="plan-price">$9/mo</p>
                                    </div>
                                    <hr />
                                    <div class="addons">
                                        <template>
                                            <div class="selected-addon">
                                                <span class="service-name">Online serivice</span>
                                                <span class="servic-price">+$1/mo</span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <p class="total">Total (per month) <b>+$12/mo</b></p>
                                <div class="btns">
                                    <button class="prev-stp" type="button">Go Back</button>
                                    <button class="next-stp" type="submit">Next Step</button>
                                </div>
                            </div>
                    </div>
                    </form>
                    <!-- Step 4 end -->
                    <!-- Step 5 start -->
                    {{-- <div class="stp step-5">
                        <img src="{{ asset('assets') }}/images/icon-thank-you.svg" alt="" />
                        <div class="header">
                            <h1 class="title">Thank you!</h1>
                        </div>
                    </div> --}}
                    <!-- Step 5 end -->
                    {{-- <script>
                        $(document).ready(function(){
                            $('.client_id').on('change',function(){
                                let id = $(this).val();
                                console.log(id);
                            })
                        })
                    </script> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
