 <div id="guestbook-container">
     @if (isset($entries))
         @foreach ($entries as $entry)
             <div>
                 <strong>Name:</strong> {{ $entry['name'] }}
                 <p>{{ $entry['message'] }}</p>
             </div>
         @endforeach
     @endif
 </div>
