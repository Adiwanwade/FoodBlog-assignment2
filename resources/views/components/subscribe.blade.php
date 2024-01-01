
    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<br>
<form action="{{ route('subscribe') }}" method="post">
    @csrf
    
    <div>
    <input type="email" name="email" required placeholder="sample@mail.com">
</div>
<br>
    <div class="wpr-mailchimp-subscribe">
        <button type="submit" id="wpr-subscribe-327323d0" class="wpr-mailchimp-subscribe-btn" data-loading="Subscribing..." style="background-color: #ff9500; color: #ffffff; border-color: #E6E2E2; transition-duration: 0.6s; font-family: Raleway, Sans-serif; font-size: 15px; font-weight: 500; letter-spacing: -0.1px; height: 30px; line-height: 30px; border-style: none; border-radius: 0px 1px 1px 0px;">
            Subscribe
        </button>
    </div>
</form>

