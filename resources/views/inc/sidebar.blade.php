@section('sidebar')
        <div class="bg-light mb-3">
            <h1>SideBar</h1>
            This is the sidebar!!!!!!!!!
            @if (!Request::is('/'))
             <br /><a href="/messages" class="btn btn-success"> see All messages </a>
            @endif
        </div>        
    @show