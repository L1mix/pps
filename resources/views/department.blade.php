@extends('index')
@section('title') Blank @endsection



@section('content')
<div> 
    <h2>Таблица Факультеты</h2>
    <table class="table">
      <thead class="thead">
        <tr>
          <th>
            Факультет
          </th>
          <th>
            Научное направление
          </th>
          <th>
            Академическое направление
          </th>
          <th>
            Другие направления
          </th>
          <th>
            Показатели для кафедр и программ
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($departments as $data)
        <tr>
          <td>{{$data->faculty}}</td>        
          <td>{{$data->punkt1}}</td>
          <td>{{$data->punkt2}}</td>
          <td>{{$data->punkt3}}</td>
          <td>{{$data->punkt4}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{route('exportDepartment')}}">Export</a>
</div>
@endsection