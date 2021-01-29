@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Email</th>
                                <th scope="col">HP</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pesan</th>
                                {{-- <th scope="col">action</th> --}}
                              </tr>
                            </thead>
                        @foreach($messages as $message)
                            <tbody>
                              <tr>
                                <th scope="col">{{$message->name}} </th>
                                <th scope="col">{{$message->created_at}}</th>
                                <th scope="col">{{$message->email}} </th>
                                <th scope="col">{{$message->phone_number}}</th>
                                <th scope="col">{{$message->subject}}</th>
                                <th scope="col">{{$message->message}}</th>
                                {{-- <th>
                                    <form action="/member/{{$member->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button class="btn btn-danger">delete</button>
                                    </form>
                                </th> --}}
                              </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $messages->links() !!}
                    </div>    
                    </div>
    </div>
</div>
@endsection
