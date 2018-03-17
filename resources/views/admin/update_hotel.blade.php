<?php

  foreach($user as $user){

    $id    = $user->id;
    $image    = $user->image;
    $title  = $user->title;
    $description = $user->description;
  }



?>

{{ Form::open(['url' => 'update','files'=>true]) }} 




              <div class="form-group">

                {{ Form::hidden('id', $id, ['size' => '30x1'])}}

               <input  type="file" name="image"><br>
                
                {{ Form::label('title','Title')}}<br>

                {{ Form::textarea('title', $title, ['size' => '30x1'])}}

              </div>

              <div class="form-group">
                
                 {{ Form::label('description','Sort Description')}}<br>

                  {{ Form::textarea('description', $description, ['size' => '40x2'])}}
              </div>

             
              
              
              {{ Form::submit('Update')}}

            {!! Form::close() !!}

