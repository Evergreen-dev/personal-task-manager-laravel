@extends('layouts.app')

@section('content')

<div class="topbar">

    <div>
        <h1>Welcome Back 👋</h1>
        <p>Manage your daily tasks and stay productive.</p>
    </div>

    <a href="{{ route('tasks.create') }}" class="btn-primary">
        + New Task
    </a>

</div>

<div class="stats">

    <div class="stat-card blue">
        <span>Total Tasks</span>
        <h2>{{ $tasks->count() }}</h2>
    </div>

    <div class="stat-card orange">
        <span>Pending</span>
        <h2>{{ $tasks->where('status','Pending')->count() }}</h2>
    </div>

    <div class="stat-card green">
        <span>Completed</span>
        <h2>{{ $tasks->where('status','Completed')->count() }}</h2>
    </div>

</div>

<div class="search-box">
    <span class="material-icons">search</span>
    <input type="text" placeholder="Search task...">
</div>

<div class="table-wrapper">

<table>

<thead>
<tr>
    <th>Task</th>
    <th>Status</th>
    <th>Due Date</th>
    <th>Action</th>
</tr>
</thead>

<tbody>

@forelse($tasks as $task)

<tr>

<td>
    <strong>{{ $task->task_name }}</strong>
    <br>
    <small>{{ $task->description }}</small>
</td>

<td>

@if($task->status == "Pending")
<span class="badge pending">Pending</span>
@else
<span class="badge completed">Completed</span>
@endif

</td>

<td>{{ $task->due_date }}</td>

<td>

<div class="action-buttons">

<a href="{{ route('tasks.edit',$task->id) }}" class="edit-btn">
    Edit
</a>

<form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="delete-btn">
        Delete
    </button>
</form>

</div>

</td>

</tr>

@empty

<tr>
    <td colspan="4" class="empty">
        No tasks available.
    </td>
</tr>

@endforelse

</tbody>

</table>

</div>

@endsection