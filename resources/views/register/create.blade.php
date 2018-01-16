@extends ('layouts.master')



@section ('content')

    <div class="col-md-8">
        
        <h1 class="text-muted">Register</h1>

        <hr/>

        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class="form-group">

                <div>
                    @if ($errors->has('name'))

                        <span class="text-danger">{{ $errors->first('name') }}</span>

                    @endif

                </div>

                <label for="name">Name:</label>

                <input type="text" name="name" id="name" class="form-control">

            </div>

             <div class="form-group">

                <div>
                    @if ($errors->has('email'))

                        <span class="text-danger">{{ $errors->first('email') }}</span>

                    @endif
                
                </div>

                <label for="email">Email:</label>

                <input type="email" name="email" id="email" class="form-control">

            </div>

             <div class="form-group">
            
                <div>
                    @if ($errors->has('password'))

                        <span class="text-danger">{{ $errors->first('password') }}</span>

                    @endif
                
                </div>

                <label for="password">Password:</label>

                <input type="password" name="password" id="password" class="form-control">

            </div>

            <div class="form-group">

                <div>
                    @if ($errors->has('password_confirmation'))

                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>

                    @endif
                </div>

                <label for="password_confirmation">Password Confirmation:</label>

                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

            </div>

            <div class="form-group">
                    
                <button type="submit" class="btn btn-primary">Register</button>

            </div>


        </form>
    
    </div>

@endsection 