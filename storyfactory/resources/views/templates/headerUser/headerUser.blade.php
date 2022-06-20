<div class="header__hello">Welcome</div>
<div class="header__name">{{Auth::user()->username}}</div>

<!--Modal change user data-->
<div id="changeUserData">
    <a href="{{ route("changeUserData") }}" class="hero_cta">Change user data</a>
</div>

<section class="modal ">
    <div class="modal_container">
        <div class="modal_header">
            <span class="iconify" data-icon="fa-solid:users-cog"></span>
        </div>
        <h1 class="modal_title">Change user data </h1>
        <form action="{{route("changeUserData")}}" method="post" class="form">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" value="{{Auth::user()->username}}">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{Auth::user()->email}}">
            <button class="buttonSend">Send</button>
        </form>
        <button class="buttonCancel">Cancel</button>
    </div>
</section>
<script src="{{asset("js/main.js")}}"></script>

