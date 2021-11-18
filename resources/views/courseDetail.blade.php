
    <div class="row">
        <div class="col-sm-2"></div>

        @foreach($courses as $course)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-md-3">

                        <h5 class="card-title">{{$course->title}}</h5>
                        <input type="hidden" name="id" value="{{$course->id}}">
                        <img src="{{asset('image/')}}/{{$course->image}}" class="img-fluid" alt="" width="80%">
                        <img src="{{asset('icons/')}}/{{$course->icon}}" class="img-fluid" alt="" width="80%">
                    </div>

                    <div class="col-md-9">
                        <br><br>
                        <p class="card-text">{{$course->description}}</p>
                        <p class="card-text">{{$course->teacher}}</p>

                        <br>

                    </div>
                </div>
                </form>
            </div>
        </div>
        @endforeach

        <div class="col-sm-4"></div>
    </div>

