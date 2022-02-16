@extends('layouts.indexLayouts')

@section('content')
    <div id="contacts">

        @{{productitem1}}
      <table>
        <tr>
          <th v-on="click: orderBy('name')">Name</th>
          <th v-on="click: orderBy('phone')">Phone</th>
          <th v-on="click: orderBy('age')">Age</th>
        </tr>
        <tr v-repeat="person : people | orderBy sortKey desc">
          <td>@{{ person.name }}</td>
          <td>@{{ person.phone }}</td>
          <td>@{{ person.age }}</td>
        </tr>
      </table>
    </div>
@endsection
