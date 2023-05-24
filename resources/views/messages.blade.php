<h3>Сообщения</h3>
@foreach($messages as $message)
    <h4>{{$message->id}}</h4>
    <h4>{{$message->name}}</h4>
    <h4>{{$message->text}}</h4>
@endforeach
