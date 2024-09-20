USER

@auth
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="nav-link"><i class="nav-icon bi bi-box-arrow-right"></i>
            <p>Logout</p>
        </button>
    </form>
@endauth
