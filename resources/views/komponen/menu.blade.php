<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        
        <span class="fs-4">Wisuda UAA</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/mahasiswa" class="nav-link active" aria-current="page">mahasiswa</a></li>
        <form action="/sesi/logout" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-link nav-link">Logout</button>
        </form>
        
        
    </ul>
</header>
