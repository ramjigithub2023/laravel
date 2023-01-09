
@extends('layout')
     
     @section('content')
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    <div class='row'>
    <div class='col-sm-12' >
        <a href="" style='float:right' class='btn btn-primary' style='margin-bottom: 4px;' data-toggle="modal" data-target="#myModal">A    DD New</a>
        

</div>  
</div>

 <table class='table table-striped table-bordered ' >
    <tr style='text-align:center;'>
        <th>Sno</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Experience</th>
    </tr>


    @foreach($employee as $employees)
    <tr>
        <th>{{$employees->id}}</th>
        <th>
        @if($employees->image)
        
            <img src="/image/{{$employees->image}}
       "  style='width:10% !important'>
       @else
       <img src="/image/1.png"style='width:10% !important' >
    @endif
    </th>
        <th>{{$employees->name}}</th>
        <th>{{$employees->email}}</th>
        <th>{{$employees->exp}}yrs Experience</th>
        <th><form action="{{ route('employee.destroy',$employees->id) }}" method="POST">
     


     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form></th>
    </tr>
    @endforeach
 </table>
</div>
@endsection
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Employee</h4>
      </div>
      <div class="modal-body">
      <form action="{{url('employee')}}" method='POST' enctype='multipart/form-data'>
        @csrf()
        <div class="form-group">
            <label for="">Emp  Name</label>
            <input type="text" name='name' class='form-group' requireds>
        </div>
        <div class="form-group">
            <label for="">Emp Email</label>
            <input type="text" name='email' class='form-group'requireds>
        </div>
        
        <div class="form-group">
            <label for="">Emp  exp</label>
            <select name="exp" id="" class='form-control' requireds>
                <option value="">Select Emp  experience</option>
                @for ($i=1;$i< 20;$i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
</div>
            <div class="form-group">
            <label for="">Emp  pic</label>
            <input type="file" name='image' class='form-group' requireds>
        </div>
        <input type="submit" class='btn btn-success'>

      </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>

  </div>
</div>