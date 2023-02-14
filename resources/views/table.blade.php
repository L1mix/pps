@extends('index')
@section('title') Table @endsection

@section('content')
<div class="topnav">
    <nav class="container">
      <a href="{{route('table')}}">Таблица</a>
      <a href="{{route('blank')}}">Анкета</a>
      <a href="{{route('logout')}}">Выход</a>
    </nav>   
</div>
<div class="container">
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Teacher')">Преподаватели</button>
    <button class="tablinks" onclick="openCity(event, 'Cathedra')">Кафедры</button>
    <button class="tablinks" onclick="openCity(event, 'Department')">Факультеты</button>
  </div>
  <div id="Teacher" class="tabcontent">
    <h2 class="title">Таблица преподавателей</h2>
    <table class="table" id="outputFIO" >
      <thead class="thead">
        <tr>
          <th>
            Фамилия 
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
        @foreach($tables as $data)
        <tr>
          <td>{{$data->user['fio']}}</td>
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
  <div id="Cathedra" class="tabcontent">
    <h2>Таблица кафедры</h2>
    <table class="table" >
      <thead class="thead">
        <tr>
          <th>
            Кафедра
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
    <a href="{{route('exportCathedra')}}">Export</a>
  </div>

  <div id="Department" class="tabcontent"> 
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
</div>
<script>
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
@endsection