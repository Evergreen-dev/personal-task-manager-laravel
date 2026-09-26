@extends('layouts.app')

@section('content')

<div class="form-container">

<h2>Create New Task</h2>

<form action="{{ route('tasks.store') }}" method="POST">

    @csrf

    <div class="grid">

        <div>
            <label>Task Name</label>

            <input
                type="text"
                name="task_name"
                placeholder="Enter task name"
                required>
        </div>

        <div>
            <label>Status</label>

            <select name="status">
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>
        </div>

    </div>

    <label>Description</label>

    <textarea
        name="description"
        rows="5"
        placeholder="Enter task description"></textarea>

    <label>Due Date</label>

    <input
        type="date"
        name="due_date"
        required>

    <button class="btn-primary" type="submit">
        Save Task
    </button>

</form>

</div>

@endsection