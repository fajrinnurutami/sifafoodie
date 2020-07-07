@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($ar_member as $member)
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $member->name }}</h6>
    </div>
    <div class="card-body">
        <div class="text-center">  
            @if(!empty($member->foto))
            <td><img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;" 
                 src="{{asset('img/member')}}/{{ $member->foto }}" /></td>
            @else
            <td><img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                src="{{asset('img')}}/nophoto.png" /></td>
            @endif  
        </div>
        Email : {{ $member->email }} <br/>
        Role : {{ $member->role }} <br/>
        Status Aktif : {{ $member->isactive }} <br/>
        <hr/>
      <a href="{{ url('member') }}" class="btn btn-warning"><i class="fas fa-home"></i> Kembali</a>
    </div>
</div> 
@endforeach   
 @else
    @include('auth.terlarang')
@endif
@endsection