@include('hearder')


<h1>Laravel-project</h1>
<a href="/hey">post page</a>
{{ 5 + 2}}
<br><br>

{!!"<h1>Laravel</h1>"!!}
{{-- {!!"<script>alert('are you ready..')</script>"!!} --}}
@php
    $name = ["meet","jitu","vishal","umang"]
@endphp
<ul>
@foreach ($name as $n )
<li>{{ $loop->index }} - {{ $n }}</li>
{{-- <li>{{ $loop->iteration}} - {{ $n }}</li> --}}

@endforeach
</ul>
<ul>
    @foreach ($name as $n )
    {{-- <li>{{ $loop->index }} - {{ $n }}</li> --}}
    <li>{{ $loop->iteration}} - {{ $n }}</li>
    
    @endforeach
    </ul>
    <ul>
        @foreach ($name as $n )
        <li>{{ $loop->count }} - {{ $n }}</li>
        {{-- <li>{{ $loop->iteration}} - {{ $n }}</li> --}}
        
        @endforeach
        </ul>

        <ul>
            @foreach ($name as $n )
            @if ($loop->first)
            <li style="color:red">{{ $n }}</li>
          @elseif ($loop->last)
          <li style="color:rgb(217, 255, 0)">{{ $n }}</li>      
                @else
                <li style="color:lightpink">{{ $n }}</li>  
            @endif      
            @endforeach
            </ul>
            <ul>
                @foreach ($name as $n )
                @if ($loop->even)
                <li style="color:red">{{ $n }}</li>
              @elseif ($loop->odd)
              <li style="color:rgb(217, 255, 0)">{{ $n }}</li>      
                    @else
                    <li style="color:lightpink">{{ $n }}</li>  
                @endif      
                @endforeach
                </ul>
               
@include('footer')                