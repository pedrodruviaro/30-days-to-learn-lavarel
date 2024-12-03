<h2>
    {{ $job->title }}
</h2>

<p>Congrats! Yout job is now live on your website.</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listing</a>
</p>
