<h2>New Job Posted</h2>
<p>A new job has been posted on our platform. Here are the details:</p>
<ul>
    <li><strong>Title:</strong> {{ $job->title }}</li>
    <li><strong>Salary:</strong> {{ $job->salary }}</li>
    <li><strong>Posted At:</strong> {{ $job->created_at->format('F j, Y, g:i a') }}</li>
</ul>
<p>To view the job posting, please click the link below:</p>
<p><a href="{{ url('/jobs/' . $job->id) }}">View Job Posting</a></p>
