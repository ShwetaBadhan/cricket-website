@php
    $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
    $socialSetting = App\Models\SocialSetting::where('is_active', true)->first();
@endphp
<div class="row ">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title ">
                    <h2>Contact Information</h2>
                    <p>Your talent deserves a platform — contact us and be part of JSL
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Start-->
    <div class="col-md-4">
        <div class="contact-box">
            <h5>Address:</h5>
            <p> {{$websiteSetting->location ?? 'Jharkhand'}}
            </p>
        </div>
    </div>
    <!--End-->
    <!--Start-->
    <div class="col-md-4">
        <div class="contact-box">
            <h5>Contact:</h5>
              @php
                $phone1 = $websiteSetting->phone_1 ?? '+91 92637 47143';
                $phone2 = $websiteSetting->phone_2 ?? '+91 92637 47143';
              @endphp
            <p><strong>Phone 1 :</strong> {{$phone1}}</p>
            <p><strong>Phone 2 : </strong> {{$phone2}} </p>
        </div>
    </div>
    <!--End-->
    <!--Start-->
    <div class="col-md-4">
        <div class="contact-box">
            <h5>For More Information:</h5>
            <p> <strong>Email:</strong> <a href="mailto:{{$websiteSetting->email ?? 'info@jharkhandsuperleague.com'}}" target="_blank">{{$websiteSetting->email ?? 'info@jharkhandsuperleague.com'}}</a></p>
           
        </div>
    </div>
    <!--End-->
</div>