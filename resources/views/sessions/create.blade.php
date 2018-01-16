@extends ('layouts.master')




@section ('content')



        <div class="col-md-8">

            <h1>Sign In</h1>

            <hr/>

            <form method="POST" action="/login">

                {{ csrf_field() }}

                <div class="form-group">
                    
                    <div>
                        @if ($errors->has('email'))

                            <span class="text-danger">{{ $errors->first('email') }}</span>

                        @endif
                    </div>

                    <label for="email">Email:</label>
                    
                    <input type="email" name="email" class="form-control" id="email">
                
                </div>

                <div class="form-group">
                    <div>
                        @if ($errors->has('password'))

                            <span class="text-danger">{{ $errors->first('password') }}</span>

                        @endif
                    </div>
                    
                    <label for="password">Password:</label>
                    
                    <input type="password" name="password" class="form-control" id="password">
                
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </form>

        </div>



@endsection