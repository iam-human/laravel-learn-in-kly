@extends('blog.layout')

@section('title', 'Users')

@section('body')

<section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-border-top">
<div class="container">
<div class="row">
<div class="col-md-12 section-heading probootstrap-animate">
<h2>Our Users</h2>
@foreach ($users as $u)
<p>
    {{
        $loop->iteration .'. Nama : '. $u->name .' - '. $u->email .' - '        
    }}
    @if (isset($u->phone['phone']))
        {{$u->phone['phone']}}
    @else
        <span class="text-danger">Have'nt Number Phone</span>
    @endif
</p>
@endforeach
</div>
</div>
</div>
</section>
    
    
@endsection

