@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    May the force be with you {{$user->name}}
                    <div>
                        <a class="btn-navigation" href= "/pianeti-home">Clicca per continuare</a>
                    </div>
                    
                </div>

                    
                {{-- per fare redirect del utente registrato al client side in automatico --}}
                @if(!(Auth::user()))
                        {{ 'Login' }}
                @else 
                    <script>
                        window.location = "/pianeti-home";
                    </script>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
