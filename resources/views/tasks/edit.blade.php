@extends('layouts.app')

@section('content')

<div class="form-container">

<h2>Edit Task</h2>

<form action="{{ route('tasks.update',$task->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="grid">

        <div>

            <label>Task Name</label>

            <input
                type="text"
                name="task_name"
                value="{{ $task->task_name }}"
                required>

        </div>

        <div>

            <label>Status</label>

            <select name="status">

                <option value="Pending"
                    {{ $task->status == 'Pending' ? 'selected' : '' }}>
                    Pending
                </option>

                <option value="Completed"
                    {{ $task->status == 'Completed' ? 'selected' : '' }}>
                    Completed
                </option>

            </select>

        </div>

    </div>

    <label>Description</label>

    <textarea
        name="description"
        rows="5">{{ $task->description }}</textarea>

    <label>Due Date</label>

    <input
        type="date"
        name="due_date"
        value="{{ $task->due_date }}"
        required>

    <button class="btn-primary" type="submit">
        Update Task
    </button>

</form>

</div>

@endsection