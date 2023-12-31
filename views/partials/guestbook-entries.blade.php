 <div id="guestbook-container">
     @if (isset($entries))
         @foreach ($entries as $entry)
             @if (isset($entry['message']))
                 <p class="flex flex-row items-center gap-2">
                     <span
                         class="font-bold">{{ $entry['name'] ? $entry['name'] . ':' : null }}</span><span>{{ $entry['message'] }}</span>
                 </p>
             @endif
         @endforeach
     @endif
 </div>
