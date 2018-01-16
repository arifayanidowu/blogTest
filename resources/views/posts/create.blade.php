@extends ('layouts.master')




@section('content')

    <h2 class="text-muted">A blog Post by Stizzle</h2>

    <hr/>

    <div class="row">
        <div class="col-md-6"> 
            <form method="POST" action="/posts">
            
            {{ csrf_field() }}

            
                <div class="form-group">
                    <div>
                        @if ($errors->has('title'))

                            <span class="text-danger">{{ $errors->first('title') }}</span>

                        @endif
                    </div>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">

                    <div>
                        @if ($errors->has('body'))

                            <span class="text-danger">{{ $errors->first('body') }}</span>

                        @endif
                    </div>
                    <label for="body">Body:</label>
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

            </form>
        </div>
    </div>
    


@endsection 