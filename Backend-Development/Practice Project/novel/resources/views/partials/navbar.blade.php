<!--navbar --> 
<div style="display: flex; justify-content: space-between; align-items: center; background-color: #333; padding: 10px 20px;">
        <div style="font-size: 1.5rem; font-weight: bold; color: white;">MyWebsite</div>
        <div style="display: flex;">
            <a href="{{ route('home') }}" style="color: white; text-decoration: none; padding: 14px 20px; display: block;">Home</a>
            <a href="{{ route('about') }}" style="color: white; text-decoration: none; padding: 14px 20px; display: block;">About</a>
            <a href="{{ route('contact') }}" style="color: white; text-decoration: none; padding: 14px 20px; display: block;">Contact</a>
        </div>
    </div> 