<table class="table table-bordered">
    <tr>
        <th>Subject</th>
        <th>Author</th>
    </tr>
    @foreach ($comments as $comment)
        <tr>
            <td>{{ $comment->content }}</td>
            <td>{{ $comment->author }}</td>
        </tr>
    @endforeach
</table>
{!! $comments->render() !!}
{!! $comments->render('form.default') !!}
