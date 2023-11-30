<div>
    <p>Endlich eine Nachricht für dich du Hurensohn</p>

    <p>Datum: {{ $inquiry->sent_at }}</p><br/>

    <p>{{ $inquiry->name }} mit Email &lt;{{ $inquiry->email }}&gt; sagt:</p>
    <p>{{ $inquiry->message }}</p>
</div>
