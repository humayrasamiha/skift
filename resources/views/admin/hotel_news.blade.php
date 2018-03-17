


@include('admin.header')
            


<div class="row">

          <div class="col-md-2 navigation ">

            @include('admin.sidebar') 

          </div>

          <div class="col-md-10">

          
            {!! Form::open(['url' => 'addHotel','files'=>true]) !!}

            <input  type="file" name="image">

              <div class="form-group">
                
                {{ Form::label('title','Title')}}<br>

                {{ Form::textarea('title', null, ['size' => '30x1'])}}

              </div>

              <div class="form-group">
                
                 {{ Form::label('description','Sort Description')}}<br>

                  {{ Form::textarea('description',null, ['size' => '40x2'])}}

              </div>

             
              
              
              {{ Form::submit('Submit')}}

            {!! Form::close() !!}

          </div>

      </div>

    </div>

          
       

      

    




