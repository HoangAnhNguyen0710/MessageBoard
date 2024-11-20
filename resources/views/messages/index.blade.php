@extends ('layouts.app')

@section ('content')

<di class="prose ml-4">
    <h2 class="text-lg"> Message List </h2>
    </div>

    @if (isset($messages))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th> id </th>
                    <th> Message </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td> <a class="link link-hover text-info" href="{{ route('messages.show', $message->id) }}"> {{ $message->id }} </a> </td>
                        <td> {{ $message->content }} </td>
                </tr> @endforeach
            </tbody>
    </table> @endif
    <a class = "btn btn-primary"  href = " {{ route ( 'messages.create' ) }} ">Post a new message </a > 

    @endsection