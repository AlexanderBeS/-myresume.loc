<form action="{{ route('resumes.store') }}" method="post">
    @csrf
    <input type="text" name="title"/>
    <textarea name="content"></textarea>
    <button type="submit">Create resume</button>
</form>
