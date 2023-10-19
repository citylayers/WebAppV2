@extends('layouts.app')

@section('main')


    <button id="openPopup_profile" class="popup-btn">Open Popup</button>

    <div id="popup_profile" class="w-full lg:w-4/12 fixed shadow-md ml-[-2px] overflow-y-auto right-0 hidden">
        <a id="closePopup">
            <img src="{{ asset('img/icons/arrow.png') }}" class="arrow">

        </a>
        <div class="p-4">

            <div class="top">
                <div class="topo">
                    <input type="file" style="" name="image" id="image" class="hidden" accept="image/*"
                           onchange="javascript:this.form.submit();">
                    <label for="image" class="cursor-pointer new" >
                        <img class="object-cover w-24 h-24 border-7 border-blue-500 rounded-full nimage mimage"
                             
                             src="{{asset('images/iconfinder_avatar_boy_kid_person_4043238.svg')}}" alt="">
                    </label>
                </div>
                <div class="tops">
                    <div class="toptaxt">Hello "USername!"</div>
                    <a href="/profile" class="vieprofile">View Profile</a>
                </div>


            </div>
            <br/>
            <br/>
            <div class="list">
                <a href="/" class="lbox">
                    <div class="check" >+</div>
                    <div class="ltax">Add to map</div>
                </a>
                <a href="/dashboard" class="lbox">
                    <div class="check" >.</div>
                    <div class="ltax">Dashboard</div>
                </a>
                <a href="/preferences" class="lbox">
                    <div class="check" >"</div>
                    <div class="ltax">Community achievements</div>
                </a>
                <a href="/about" class="lbox">
                    <div class="check" >?</div>
                    <div class="ltax">About City Layers</div>
                </a>
                <a href="/contact" class="lbox">
                    <div class="check" >.</div>

                    <div class="ltax">Term & contact</div>
                </a>
                <a href="/privacy_policy" class="lbox">
                    <div class="check" >!</div>

                    <div class="ltax">Privacy Policy and Terms of Service</div>
                </a>
                <a href="/impressum" class="lbox">
                    <div class="check" >i</div>
                    <div class="ltax">Impressum & accessibility</div>
                </a>
            </div>
            <br/>
            <div class="belo">
                <div class="mapping">Mappings are public. Youor username will be shown along with the mapping.</div>
                <div class="closebt" id="closePopup_profile">Close</div>
            </div>
        </div>
    </div>



    


    <script >
        const openPopupButton = document.getElementById('openPopup_profile');
        const closePopupButton = document.getElementById('closePopup_profile');
        const popup = document.getElementById('popup_profile');

        openPopupButton.addEventListener('click', () => {
            
            setTimeout(() => {
                popup.style.display = 'block';
            }, 500);
        });

        closePopupButton.addEventListener('click', () => {
            console.log('aaaa');
            
            setTimeout(() => {
                popup.style.display = 'none';
            }, 500); 
        });

    </script>

@endsection