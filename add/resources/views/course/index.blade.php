
<div class="">

<div class="table">
   <table>
    <thead>

 
       <tr>
  
       <th>Course title</th>
       <th>course credit</th>
 
       </tr>
       </thead>


       <tbody>
          @foreach($alldata as $data)
            <tr>
         
                 <td>{{$data->course_title}}</td>
                   <td>{{$data->course_credit}}</td>
      

            </tr>
            @endforeach
            </tbody>
      
             </table>

            </div>
          </div>