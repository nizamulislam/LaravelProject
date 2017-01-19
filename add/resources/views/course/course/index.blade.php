
<div class="">

<div class="table">
   <table>
    <thead>

       {!!Form::open(['route'=>'course.index','method'=>'GET','class'=>'Class_name'])!!}

          <!-- {!!Form::text('course_code')!!}-->
      {!!Form::text('course_title') !!}


            {!! Form::text('course_code', $value = null,$attributes = array('class'=>'form-control','placeholder'=>'course code','required')); !!}

       {!!Form::submit()!!}

       {!!Form::close()!!}
       <tr>
       <th>Course Code</th>
       <th>Course title</th>
       <th>course credit</th>
       <th>Action</th>
       </tr>
       </thead>


       <tbody>
          @foreach($alldata as $data)
            <tr>
               <td>{{$data->course_code}}</td>
                 <td>{{$data->course_title}}</td>
                   <td>{{$data->course_credit}}</td>
        <td> 
        <a href="{{route('course.edit',$data->course_id)}}" class="btn btn-info">Edit</a>

              {!! Form::open(array('route' => ['course.destroy', $data->course_id], 'class' => 'form-horzental', 'method' => 'delete')) !!}

                        {!! Form::hidden('id', $data->course_id)!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}


 
 


        </td>

            </tr>
            @endforeach
            </tbody>
      
             </table>

            {!!$alldata->render() !!}
            </div>
          </div>