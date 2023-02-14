@extends('index')
@section('title') Blank @endsection



@section('content')
<div>
    <h2>Таблица кафедры</h2>
    <table class="table" border="1">
    <thead class="thead">
        <tr>
          <td>
            <input type="text" name="FIO" id="fio" placeholder="ФИО">
          </td>
          
          <td>
            Научное направление
          </td>
          <td>
            Академическое направление
          </td>
          <td>
            Другие направления
          </td>
          <td>
            Показатели для кафедр и программ
          </td>
        </tr>
      </thead>
      <tbody>

        @foreach($join as $data)
        <tr>
          <td>{{$data->name}}</td>
          <td>{{$data->punkt1}}</td>
          <td>{{$data->punkt2}}</td>
          <td>{{$data->punkt3}}</td>
          <td>{{$data->punkt4}}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{route('export')}}">Export</a>
  </div>
@endsection