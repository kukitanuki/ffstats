@extends('main')

@section('content')

<div class="content">
    <table id="datatable" class="display">
        <thead>
            <tr>
                <th>User</th>
                <th>Current Weight</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td><a href="https://t.me/{{ $user->username }}">{{ $user->first_name }} {{ $user->last_name }}</a></td>
                <td class="userWeight">{{ number_format($user->current_weight) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection