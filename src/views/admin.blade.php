<div class="container">
    <h1>Hai {{count($users)}} utenti connessi</h1>
    <div class="col-md-8">
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-items">
                    {{$user}}
                </li>
            @endforeach
        </ul>
    </div>
</div>