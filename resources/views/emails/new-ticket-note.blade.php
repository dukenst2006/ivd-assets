<h4>A new ticket note has been added to Ticket Number: {{$ticket->id}}</h4>

<a href="{{url('/tickets')}}/{{$ticket->id}}">View The Ticket Online</a>

<p>Note: {!!$ticketEntry->note!!}</p>

<ul>
  <li>Logged by: {{$ticket->user->name}}</li>
  <li>Location: {{$ticket->location->location_name}}</li>
  <li>Status: {{$ticket->ticket_status->status}}</li>
  <li>Type: {{$ticket->ticket_type->type}}</li>
  <li>Priority: {{$ticket->ticket_priority->priority}}</li>
</ul>

<h4>Subject: {{$ticket->subject}}</h4>
<p>Description: {!!$ticket->description!!}</p>
