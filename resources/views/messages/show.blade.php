@extends ('layouts.app')

@section ('content')

<div class="prose ml-4">
    <h2> Message detail page for id = {{ $message->id}} </h2>
</div>


<table class="table w-full my-4">
    <tr>
        <th> id </th>
        <td> {{ $message->id}} </td>
    </tr>


    <t>
        <th> Message </th>
        <td> {{ $message->content}} </td>
        </tr>
</table>
<a class="btn btn-outline" href=" {{ route('messages.edit', $message->id) }} ">Edit this message </a>
<form method="POST" action=" {{ route('messages.destroy', $message->id) }} " class="my-2">
    @csrf
    @method ('DELETE')

    <button type="submit" class="btn btn-error btn-outline"
        onclick="return confirm(' Delete the message with id = {{ $message->id}} . Are you sure?')">Delete </button>
</form>

@endsection