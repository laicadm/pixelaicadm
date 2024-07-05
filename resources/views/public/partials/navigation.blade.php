<nav class="navbar">
    <ul>
        <li><a href="#home"><img src="{{ asset('images/home.png') }}" width="30" height="30" alt="Home"></a></li>
        <li><a href="#about"><img src="{{ asset('images/website.png') }}" width="30" height="30" alt="About"></a></li>
        <li><a href="#services"><img src="{{ asset('images/folder.png') }}" width="30" height="30" alt="Services"></a></li>
        <li><a href="#contact"><img src="{{ asset('images/users.png') }}" width="30" height="30" alt="Contact"></a></li>
        <li><a href="#time" class="time pixelify-sans">{{ $data['time'] }}</a></li>
    </ul>
</nav>