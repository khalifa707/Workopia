<x-layout>
<h1>Create New Job</h1>
<form action="/jobs" method="post">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Submit</button>
</form>
</x-layout>
