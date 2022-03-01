@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif