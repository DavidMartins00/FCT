@if ( auth()->user()->role == "Admin" )
    <p>Admin</p>
@endif
@if ( auth()->user()->role == "Func" )
    <p>Func</p>
@endif
@if ( auth()->user()->role == "Ger" )
    <p>Ger</p>
@endif
