<h1>hello {{ $myname}} </h1>
<h4>hhhhhhhhhh {{$lastname}}</h4></P>

@if(strlen($myname) > 3)

<p>exlant</p>
@elseif (strlen($myname) < 3)
<p>\EROOR</p>
@else
<P>BAUD</P>


@endif


@unless