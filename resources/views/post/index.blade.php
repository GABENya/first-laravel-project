<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@foreach($posts as $post)
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <img src="{{ $post->poster }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <p>{{$post->description}}</p>
                        <p> {{$post->content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
