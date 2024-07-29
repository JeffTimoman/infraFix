<div class="sidebar col-1">
    <div class="col">
        <div class="profile text-center">
            <a href="{{ route('profile.show', $user = Auth::user()) }}">
                <span class="material-symbols-outlined mt-3 mb-3 ">
                    account_circle
                </span>
            </a>
        </div>
        <div class="password text-center">
            <a href="{{ route('profile.password') }}">
                <span class="material-symbols-outlined">
                    password
                </span>
            </a>
        </div>
    </div>
</div>
